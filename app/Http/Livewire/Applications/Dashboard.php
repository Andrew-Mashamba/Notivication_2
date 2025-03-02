<?php

namespace App\Http\Livewire\Applications;

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
use App\Models\Application;


class Dashboard extends Component
{

    public $client_id;
    public $application_status;
    public $tenure;
    public $loan_id;
    public $loan_amount;
    public $created_at;



    public $firstRun = true;

    public $showDataLabels = false;

    public $data;


    public function mount()
    {
        $this->applicationSummary = [
            'Total' => DB::table('applications')->count(),
            'Pending' => DB::table('applications')->where('application_status', 'PENDING')->count(),
            'Under Review' => DB::table('applications')->where('application_status', 'UNDER REVIEW')->count(),
            'Pending Disbursement' => DB::table('applications')->where('application_status', 'PENDING DISBURSEMENT')->count(),
            'Disbursed' => DB::table('applications')->where('application_status', 'DISBURSED')->count(),
            'Rejected' => DB::table('applications')->where('application_status', 'REJECTED')->count(),
            'Archived' => DB::table('applications')->where('application_status', 'ARCHIVED')->count(),
        ];
    }


    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = Application::all();

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'client_id' => $client->client_id,
                'application_status' => $client->application_status,
                'tenure' => $client->tenure,
                'loan_id' => $client->loan_id,
                'loan_amount' => $client->loan_amount,
                'created_at' => $client->created_at,
            ];
        }
    }



    public function render()
    {



        return view('livewire.applications.dashboard');
    }
}
