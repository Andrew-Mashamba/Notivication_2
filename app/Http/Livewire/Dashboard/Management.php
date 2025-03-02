<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use App\Models\ReleasesModel;

class Management extends Component
{
    public $firstRun = true;

    public $showDataLabels = false;

    public $data;
    public $chartValue=false;
    public $changeDisplay;
    public $applicationSummary;
    public $clientsSummary;
    public $commodityValues;


    public $types = ['SUSPENDED','PLEDGED','AVAILABLE','COLLATERAL RELEASE REQUESTED','ACTIVE', 'NEW CLIENT','APPROVED', 'REJECTED','PENDING','ACCEPTED','RELEASED','DECLINED','COLLATERAL RELEASED'];

    public $colors = [
        'APPROVED' => '#003300',
        'REJECTED' => '#004c00',
        'PENDING' => '#006600',
        'ACCEPTED' => '#005AA9',
        'RELEASED' => '#33cc33',
        'DECLINED' => '#66ff66',
        'COLLATERAL RELEASED' => '#99ff99',
        'ACTIVE' => '#003300',
        'NEW CLIENT' => '#004c00',
        'COLLATERAL RELEASE REQUESTED' => '#006600',
        'PLEDGED' => '#005AA9',
        'AVAILABLE' => '#004c00',
        'SUSPENDED' => '#66ff66',
    ];


    public function mount()
    {
        $this->applicationSummary = [
            'Total' => DB::table('stocks')->count(),
            'Pending' => DB::table('stocks')->where('status', 'PENDING')->count(),
            'Pledged' => DB::table('stocks')->where('status', 'PLEDGED')->count(),
            'Released' => DB::table('stocks')->where('status', 'RELEASED')->count(),
        ];

        $this->clientsSummary = [
            'Total' => DB::table('farmers')->count(),
            'Active' => DB::table('farmers')->where('status', 'ACTIVE')->count(),
            'Resting' => DB::table('farmers')->where('status', 'RESTING')->count(),
            'Pending' => DB::table('farmers')->where('status', 'PENDING')->count(),
        ];

        $this->cmSummary = [
            'Total' => DB::table('collateral_managers')->count(),
            'Active' => DB::table('collateral_managers')->where('Status', 'ACTIVE')->count(),
            'Resting' => DB::table('collateral_managers')->where('Status', 'RESTING')->count(),
            'Pending' => DB::table('collateral_managers')->where('Status', 'PENDING')->count(),
        ];

        // Fetch all commodities
        $commodities = DB::table('commodities')->get();

        // Initialize an array to store commodity values
        $this->commodityValues = [];

        // Loop through each commodity and calculate the total value
        foreach ($commodities as $commodity) {
            $totalValue = DB::table('stocks')
                ->where('commodity_id', $commodity->id)
                ->sum(DB::raw('kilos * price_per_kilo'));

            // Add the commodity name and total value to the array
            $this->commodityValues[] = [
                'name' => $commodity->name,
                'value' => $totalValue
            ];
        }
    }


    public function boot()
    {
        // Initialize data array
        $this->data = [
            'columns' => [
                ['label' => 'principle', 'field' => 'principle'],
                ['label' => 'interest', 'field' => 'interest'],
                ['label' => 'offer_status', 'field' => 'offer_status'],
                ['label' => 'tenure', 'field' => 'tenure'],
            ],
            'rows' => [],
        ];
    }

    public function ChangeDisplay()
    {

        $this->chartValue=!$this->chartValue;

        $this->render();


    }
    #[On('onColumnClick')]
    public function handleOnColumnClick($event)
    {

        dd($event);
        $this->ChangeDisplay();

    }
    public function render()
    {


        $stocks = DB::table('stocks')->get();

        $pieChartModels = collect($stocks)->reduce(function ($pieChartModels, $data) {
            $commodityId = $data->commodity_id;

            // Extract pledged kilos and available kilos from the stdClass object
            $pledgedKilos = $data->pledged_kilos;
            $availableKilos = $data->kilos;

            // Add slices for pledged kilos and available kilos
            $pieChartModels = $pieChartModels
                ->addSlice("Pledged Kilos (Commodity $commodityId)", $pledgedKilos, $this->colors['AVAILABLE'])
                ->addSlice("Available Kilos (Commodity $commodityId)", $availableKilos, $this->colors['AVAILABLE']);

            return $pieChartModels;
        },
            LivewireCharts::pieChartModel()
            ->setAnimated($this->firstRun)
            ->setType('donut')
            ->withOnSliceClickEvent('onSliceClick')
            ->withoutLegend()
            ->legendPositionBottom()
            ->legendHorizontallyAlignedCenter()
            ->setDataLabelsEnabled($this->showDataLabels)
            ->setColors([$this->colors['PLEDGED'], $this->colors['AVAILABLE']])); // Set colors for slices



        $farmers = DB::table('farmers')->get();

        $farmersModel = $farmers->groupBy('Status')
            ->reduce(function ($farmersModel, $data) {
                $type = $data->first()->Status;
                $value = $data->count('id');

                return $farmersModel->addSlice($type, $value, $this->colors[$type]);
            },

                LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->setType('donut')
                ->withOnSliceClickEvent('onSliceClick')
                ->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setColors(['#DD0035', '#005AA9', '#DD0035', '#005AA9']) // Additional customization using Apex chart properties
            );

        $collateral_managers = DB::table('collateral_managers')->get();
        $collateral_managersModel = $collateral_managers->groupBy('Status')
            ->reduce(function ($collateral_managersModel, $data) {
                $type = $data->first()->Status;
                $value = $data->count('id');

                return $collateral_managersModel->addSlice($type, $value, $this->colors[$type]);
            }, LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->setType('donut')
                ->withOnSliceClickEvent('onSliceClick')
                ->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
            //->setColors(['#DD0035', '#005AA9', '#DD0035', '#005AA9']) // Additional customization using Apex chart properties
            );








        $commoditiesChartModel = (new ColumnChartModel())
            ->setTitle('TZS')
            ->withOnColumnClickEventName('onColumnClick');

        $commodities = DB::table('commodities')->get();

        foreach ($commodities as $commodity) {


                $pledgedKilos=  DB::table('stocks')->where('commodity_id', $commodity->id)->where('status', 'ACTIVE')->selectRaw('SUM(kilos * price_per_kilo) as total_value')->value('total_value');



            if($commodity->id == 7){
                //dd($commodity->name,$pledgedKilos);
            }
             $commoditiesChartModel->addColumn( " Total Value of".$commodity->name, $pledgedKilos, '#75C465'); // Use a color based on the commodity name




        }




        return view('livewire.dashboard.management')
            ->with([
                'pieChartModels' => $pieChartModels,
                'farmersModel' => $farmersModel,
                'collateral_managersModel' => $collateral_managersModel,
                'commoditiesChartModel' => $commoditiesChartModel,
                'commodities' => $commodities,
            ]);
    }
}
