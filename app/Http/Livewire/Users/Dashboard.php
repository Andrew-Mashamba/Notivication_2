<?php

namespace App\Http\Livewire\Users;

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


    public $types = ['PENDING','ACTIVE','BLOCKED'];

    public $colors = [
        'PENDING' => '#003300',
        'ACTIVE' => '#004c00',
        'BLOCKED' => '#006600',
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    public $data;




    public function boot()
    {


        // Initialize data array
        $this->data = [
            'columns' => [
                ['label' => 'name', 'field' => 'name'],
                ['label' => 'email', 'field' => 'email'],
                ['label' => 'nida_number', 'field' => 'nida_number'],
                ['label' => 'created_at', 'field' => 'created_at'],
                ['label' => 'role', 'field' => 'role'],
                ['label' => 'status', 'field' => 'status'],
                ['label' => 'branch', 'field' => 'branch'],
                ['label' => 'phone_number', 'field' => 'phone_number'],
                ['label' => 'role', 'field' => 'role'],
            ],
            'rows' => [],
        ];
        // Retrieve data from the CollateralManager table
        $collateralManagers = CollateralManager::all();

        // Populate rows array with data from CollateralManager model
        foreach ($collateralManagers as $manager) {
            $this->data['rows'][] = [

                'name' => $manager->name,
                'email' => $manager->email,
                'nida_number' => $manager->nida_number,
                'role' => $manager->role,
                'status' => $manager->status,
                'branch' => $manager->branch,
                'phone_number' => $manager->phone_number,
                'role' => $manager->role,

            ];
        }
    }



    public function render()
    {


        $expenses = \App\Models\bladeUsers::get();
        $pieChartModel = $expenses->groupBy('status')
            ->reduce(function ($pieChartModel, $data) {
                $type = $data->first()->status;
                $value = $data->sum('id');

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





        return view('livewire.users.dashboard')
            ->with([
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
