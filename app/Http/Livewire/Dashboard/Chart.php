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


class Chart extends Component
{

    public $variable;

    public $firstRun = true;

    public $showDataLabels = false;

    public $data;

    public $stockSummary;

    public function mount()
    {
        $this->stockSummary = [
            'Total' => DB::table('stocks')->where('commodity_id',$this->variable)->count(),
            'Pending' => DB::table('stocks')->where('commodity_id',$this->variable)->where('status', 'PENDING')->count(),
            'Pledged' => DB::table('stocks')->where('commodity_id',$this->variable)->where('status', 'PLEDGED')->count(),
            'Released' => DB::table('stocks')->where('commodity_id',$this->variable)->where('status', 'RELEASED')->count(),
        ];

    }

    public function render()
    {

        return view('livewire.dashboard.chart');
    }
}
