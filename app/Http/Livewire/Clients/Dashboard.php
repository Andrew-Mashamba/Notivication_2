<?php

namespace App\Http\Livewire\Clients;

use App\Models\SourcesModel;
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

    public $applicationSummary;
    public $commodityValues1 = [];

    public function mount()
    {
        $this->applicationSummary = [
            'Total' => DB::table('sources')->count(),
            'Pending' => DB::table('sources')->where('Status', 'PENDING')->count(),
            'Active' => DB::table('sources')->where('Status', 'ACTIVE')->count(),
            'Suspended' => DB::table('sources')->where('Status', 'SUSPENDED')->count(),
            'Inactive' => DB::table('sources')->where('Status', 'INACTIVE')->count(),
        ];


    }


    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = SourcesModel::all();

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'source_name' => $client->first_name,
                'source_ip' => $client->last_name,
                'source_id' => $client->date_of_birth,
            ];
        }


    }




    public function render()
    {



        return view('livewire.clients.dashboard');
    }
}
