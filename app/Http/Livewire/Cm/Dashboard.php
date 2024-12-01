<?php

namespace App\Http\Livewire\Cm;

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
use App\Models\CollateralManager;


class Dashboard extends Component
{


    public $types = ['PLEDGED','AVAILABLE','COLLATERAL RELEASE REQUESTED','ACTIVE', 'NEW CLIENT','APPROVED', 'REJECTED','PENDING','ACCEPTED','RELEASED','DECLINED','COLLATERAL RELEASED'];

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
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    public $data;




    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $collateralManagers = CollateralManager::all();

        // Initialize data array
        $this->data = [
            'columns' => [
                ['label' => 'CMNumber', 'field' => 'CMNumber'],
                ['label' => 'FirstName', 'field' => 'FirstName'],
                ['label' => 'LastName', 'field' => 'LastName'],
                ['label' => 'Address', 'field' => 'Address'],
                ['label' => 'City', 'field' => 'City'],
                ['label' => 'Status', 'field' => 'Status'],
            ],
            'rows' => [],
        ];

        // Populate rows array with data from CollateralManager model
        foreach ($collateralManagers as $manager) {
            $this->data['rows'][] = [
                'CMNumber' => $manager->CMNumber,
                'FirstName' => $manager->FirstName,
                'LastName' => $manager->LastName,
                'Address' => $manager->Address,
                'City' => $manager->City,
                'Status' => $manager->Status,
            ];
        }
    }



    public function render()
    {


        $expenses = CollateralManager::get();
        $pieChartModel = $expenses->groupBy('Status')
            ->reduce(function ($pieChartModel, $data) {
                $type = $data->first()->Status;
                $value = $data->sum('canInitiateLoan');

                return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
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





        return view('livewire.cm.dashboard')
            ->with([
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
