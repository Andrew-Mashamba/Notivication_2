<?php

namespace App\Http\Livewire\Commodities;

use App\Exports\StockPricesExport;
use App\Models\approvals;
use App\Models\StockPrice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\CommoditiesModel;
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
use Maatwebsite\Excel\Facades\Excel;


class ViewCommodity extends Component
{


    public $price_per_kilo;
    public $name;
    public $Status = '';


    public $photo;

    public $client;

    public $isOpen;
    public $editKey;

    public $newValue;



    public $types = ['PENDING', 'ACTIVE'];

    public $colors = [
        'PENDING' => '#f6ad55',
        'ACTIVE' => '#fc8181',
    ];
    public $firstRun = true;

    public $showDataLabels = false;

    public $data;

    public $commodity;

    public $startDate;
    public $endDate;
    public $stockPrices;
    public $price;
    public $commodity_id;
    public $message;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'price_per_kilo' => 'required|string|max:255',
        'name' => 'required|email|max:255',
    ];

    public function mount()
    {
        $this->startDate = Carbon::now()->subDays(30)->format('Y-m-d');
        $this->endDate = Carbon::now()->format('Y-m-d');
        $this->commodity_id = Session::get('Commodity');
        $this->loadStockPrices();
    }

    public function loadStockPrices()
    {
        $stockPrices = StockPrice::whereBetween('created_at', [$this->startDate, $this->endDate])
            ->orderBy('created_at')
            ->get();

        $formattedData = [];

        foreach ($stockPrices as $price) {
            $formattedData[] = [
                'data' => floatval($price->price),
                'month' => Carbon::parse($price->recorded_at)->format('M d'),
            ];
        }

        $this->stockPrices = $formattedData;

       // dd($this->stockPrices);


        $this->dispatchBrowserEvent('refreshChart');
    }

    public function boot()
    {
        // Initialization for ES Users
        $this->data = [
            'columns' => [
                ['label' => 'Name', 'field' => 'name'],
                'Position',
                'Office',
                'Age',
                'Start date',
                'Salary',
            ],
            'rows' => [
                ["Tiger Nixon", "System Architect", "Edinburgh", "61", "2011/04/25", "$320,800"],
                ["Garrett Winters", "Accountant", "Tokyo", "63", "2011/07/25", "$170,750"],
                ["Ashton Cox", "Junior Technical Author", "San Francisco", "66", "2009/01/12", "$86,000"],
                ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "22", "2012/03/29", "$433,060"],
                // ... (remaining rows)
            ],
        ];
    }

    public function savePrice(){
        // Remove the commas
        $numberWithoutCommas = str_replace(',', '', $this->price);

        // Convert the string to a double
        $doubleNumber = (double) $numberWithoutCommas;


        $updateData = [
            'price_per_kilo' => $doubleNumber,
        ];


        $updateData = json_encode($updateData);


        approvals::updateOrCreate(
            [
                'process_id' => $this->commodity_id,
                'user_id' => auth()->user()->id,
                'process_name' => 'changePrice',

            ],
            [
                'institution' => ' ',
                'process_name' => 'changePrice',
                'process_description' => auth()->user()->name.' has changed the price per kilo of commodity named  - '.$this->commodity->name.', from '.$this->commodity->price_per_kilo.' to '.$doubleNumber,
                'approval_process_description' => auth()->user()->name.' has edited role named - '.$this->commodity->name,
                'process_code' => '24',
                'process_id' => $this->commodity_id,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> $updateData
            ]
        );

        $this->price = null;
        $this->message ="Done, Awaiting Approval";
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
        CommoditiesModel::where('id', $this->commodity->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }

    public function export()
    {

        $stockPrices = StockPrice::whereBetween('created_at', [$this->startDate, $this->endDate])
            ->orderBy('created_at')
            ->get();

        return Excel::download(new StockPricesExport($stockPrices), 'stock_prices.xlsx');
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


        $expenses = CommoditiesModel::get();
        $pieChartModel = $expenses->groupBy('Status')
            ->reduce(function ($pieChartModel, $data) {
                $type = $data->first()->Status;
                $value = $data->sum('id');

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


        $this->commodity = CommoditiesModel::find(Session::get('Commodity'));


        return view('livewire.commodities.view-commodity')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
