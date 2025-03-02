<?php

namespace App\Http\Livewire\Subscribers;

use App\Models\SourcesModel;
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
            'Total' => DB::table('subscribers')->count(),
            'Pending' => DB::table('subscribers')->where('Status', 'PENDING')->count(),
            'Active' => DB::table('subscribers')->where('Status', 'ACTIVE')->count(),
            'Suspended' => DB::table('subscribers')->where('Status', 'BLOCKED')->count(),
            'Inactive' => DB::table('subscribers')->where('Status', 'INACTIVE')->count(),
        ];


    }


    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = SubscribersModel::all();

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'subscriber_name' => $client->subscriber_name,
                'subscriber_phone_number' => $client->subscriber_phone_number,
                'subscriber_email' => $client->subscriber_email,
            ];
        }


    }




    public function render()
    {


        return view('livewire.subscribers.dashboard');
    }
}
