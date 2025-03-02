<?php

namespace App\Http\Livewire\Branches;

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
use App\Models\ClientsModel;


class Dashboard extends Component
{


    public $firstRun = true;

    public $showDataLabels = false;

    public $data;


    public function boot()
    {
        $expenses = DB::table('branches')->get();
    }



    public function render()
    {


        return view('livewire.branches.dashboard');
    }
}
