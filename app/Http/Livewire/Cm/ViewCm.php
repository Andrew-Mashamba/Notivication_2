<?php

namespace App\Http\Livewire\Cm;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\CollateralManager;
use App\Charts\commodities;


use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;




class ViewCm extends Component
{


    public $CMNumber;
    public $EmailAddress;
    public $FirstName;
    public $LastName;
    public $Address;
    public $City;
    public $Country;
    public $PostalCode;
    public $canAddFarmers = false;
    public $canInitiateLoan = false;
    public $canSetPrices = false;
    public $WarehouseLocation = '';
    public $BusinessName;
    public $BusinessLicenceNumber;
    public $TINNumber;
    public $BusinessPhoneNumber;

    public $photo;

    public $manager;

    public $isOpen;
    public $editKey;

    public $newValue;



    public $types = ['0', '1'];

    public $colors = [
        '0' => '#f6ad55',
        '1' => '#fc8181',
    ];
    public $firstRun = true;

    public $showDataLabels = false;

    public $data;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'CMNumber' => 'required|string|max:255',
        'EmailAddress' => 'required|email|max:255',
        'FirstName' => 'required|string|max:255',
        'LastName' => 'required|string|max:255',
        'Address' => 'required|string|max:255',
        'City' => 'required|string|max:255',
        'Country' => 'required|string|max:255',
        'PostalCode' => 'required|string|max:255',
        'WarehouseLocation' => 'url|nullable',
        'canAddFarmers' => 'boolean',
        'canInitiateLoan' => 'boolean',
        'canSetPrices' => 'boolean',
        'BusinessName' => 'required|string|max:255',
        'BusinessLicenceNumber' => 'required|string|max:255',
        'TINNumber' => 'required|string|max:255',
        'BusinessPhoneNumber' => 'required|string|max:255',
    ];

    public function boot()
    {
        // Initialization for ES Users
        //$this->data = DB::table('applications')->get();

        // Initialization for ES Users
        $tableName = 'applications'; // Adjust the table name as per your requirement
        $this->data['columns'] = Schema::getColumnListing($tableName);
        $this->data['rows'] = DB::table($tableName)->get()->toArray(); // Fetch data from the specified table

    }

    public function updatedSearch($value)
    {
        // Handle search logic here
        // You can filter $this->data['rows'] based on the search value
        // and update the Livewire property accordingly
    }


    public function refreshComponent()
    {
        $this->render();
    }


    public function saveCollateralManagerInfo()
    {
        //dd('44');
        //$this->validate();

        CollateralManager::create([
            'CMNumber' => $this->CMNumber,
            'EmailAddress' => $this->EmailAddress,
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName,
            'Address' => $this->Address,
            'City' => $this->City,
            'Country' => $this->Country,
            'PostalCode' => $this->PostalCode,
            'Status' => 'PENDING',
            'WarehouseLocation' => $this->WarehouseLocation,
            'canAddFarmers' => $this->canAddFarmers,
            'canInitiateLoan' => $this->canInitiateLoan,
            'canSetPrices' => $this->canSetPrices,
            //'photo' => $this->photo->store('photos', 'public'), // Store the photo and save the path
            'BusinessName' => $this->BusinessName,
            'BusinessLicenceNumber' => $this->BusinessLicenceNumber,
            'TINNumber' => $this->TINNumber,
            'BusinessPhoneNumber' => $this->BusinessPhoneNumber,
        ]);

        session()->flash('message', 'Collateral Manager created successfully.');

        $this->reset(); // Clear form fields after successful save
    }

    public function doubleClick($key)
    {
        $this->editKey = $key;
        $this->isOpen = true;
    }
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function saveChanges()
    {
        CollateralManager::where('id', $this->manager->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }

    public function render()
    {


        $columnChartModel =
            (new ColumnChartModel())
                ->setTitle('Expenses by Type')
                ->addColumn('Food', 100, '#f6ad55')
                ->addColumn('Shopping', 200, '#fc8181')
                ->addColumn('Travel', 300, '#90cdf4')
        ;


        $expenses = CollateralManager::get();
        $pieChartModel = $expenses->groupBy('canAddFarmers')
            ->reduce(function ($pieChartModel, $data) {
                $type = $data->first()->canAddFarmers;
                $value = $data->sum('canInitiateLoan');

                return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
            }, LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->setType('donut')
                ->withOnSliceClickEvent('onSliceClick')
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
            );


        $this->manager = CollateralManager::find(Session::get('Manager'));

        $commodities = DB::table('commodities')->get();

        $commoditiesChartModel = (new ColumnChartModel())
            ->setTitle('Kilograms');

        foreach ($commodities as $commodity) {

            $pledgedKilos = DB::table('stocks')
                ->where('collateral_manager_id',Session::get('Manager'))
                ->where('commodity_id', $commodity->id)->sum('kilos');


            $commoditiesChartModel->addColumn($commodity->name, $pledgedKilos, '#005AA9'); // Use a color based on the commodity name
        }



        return view('livewire.cm.view-cm')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel,
                'commoditiesChartModel' =>$commoditiesChartModel,
            ]);
    }
}
