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


class RoleDashboard extends Component
{


    public $types = ['BLOCK','REJECTED','UPDATED','PENDING','ACTIVE','BLOCKED'];

    public $colors = [
        'PENDING' => '#003300',
        'ACTIVE' => '#004c00',
        'BLOCKED' => '#006600',
        'UPDATED' => '#004c00',
        'REJECTED' => '#003300',
        'BLOCK' => '#006600',
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    public $data;


    public function boot()
    {


        // Initialize data array
        $this->data = [
            'columns' => [
                ['label' => 'institution_id', 'field' => 'institution_id'],
                ['label' => 'status', 'field' => 'status'],
                ['label' => 'department_name', 'field' => 'department_name'],
                ['label' => 'permissions', 'field' => 'permissions'],
                ['label' => 'description', 'field' => 'description'],
                ['label' => 'modules', 'field' => 'modules'],


            ],
            'rows' => [],
        ];
        // Retrieve data from the CollateralManager table
        $collateralManagers = CollateralManager::all();

        // Populate rows array with data from CollateralManager model
        foreach ($collateralManagers as $manager) {
            $this->data['rows'][] = [

                'institution_id' => $manager->institution_id,
                'status' => $manager->status,
                'department_name' => $manager->department_name,
                'permissions' => $manager->permissions,
                'description' => $manager->description,
                'modules' => $manager->modules,

            ];
        }
    }



    public function render()
    {


        $expenses = \App\Models\Role::get();
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





        return view('livewire.users.role-dashboard')
            ->with([
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
