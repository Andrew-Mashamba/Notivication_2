<?php

namespace App\Http\Livewire\Services;

use App\Models\SubscribersModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

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
            'Total' => DB::table('services')->count(),
            'Pending' => DB::table('services')->where('Status', 'PENDING')->count(),
            'Active' => DB::table('services')->where('Status', 'ACTIVE')->count(),
            'Suspended' => DB::table('services')->where('Status', 'BLOCKED')->count(),
            'Inactive' => DB::table('services')->where('Status', 'INACTIVE')->count(),
        ];


    }


    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = SubscribersModel::all();

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'service_name' => $client->service_name,
                'service_type' => $client->service_type,
                'Status' => $client->Status,
            ];
        }


    }





    public function render()
    {
        return view('livewire.services.dashboard');
    }
}
