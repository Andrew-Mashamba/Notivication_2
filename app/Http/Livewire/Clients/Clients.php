<?php

namespace App\Http\Livewire\Clients;

use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;






class Clients extends Component
{

    public $viewLoaded = 'b';

    public $search = '';

    public $client;
    public $data;
    //public $applicationSummary;
    public $applicationSummary;



    public function mount()
    {
        $this->applicationSummary = [
            'Total' => DB::table('sources')->count(),
            'Pending' => DB::table('sources')->where('Status', 'PENDING')->count(),
            'Under Review' => DB::table('sources')->where('Status', 'UNDER REVIEW')->count(),
            'Pending Disbursement' => DB::table('sources')->where('Status', 'PENDING DISBURSEMENT')->count(),
            'Disbursed' => DB::table('sources')->where('Status', 'DISBURSED')->count(),
            'Rejected' => DB::table('sources')->where('Status', 'REJECTED')->count(),
            'Archived' => DB::table('sources')->where('Status', 'ARCHIVED')->count(),
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

        Session::put('MainTitle','Sources Dashboard');
        Session::put('MainSubTitle','An Overview Of Sources');
    }




    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Sources Dashboard');
                Session::put('MainSubTitle','An Overview Of Collateral Managers');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Sources Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Client Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Client',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }



    public function render()
    {



        if(trim($this->search == '')){
            $this->client = DB::table('sources')
                ->get();
        }else{
            $this->client = DB::table('sources')
                ->where('source_name', 'like', "%$this->search%")
                ->orWhere('source_ip', 'like', "%$this->search%")
                ->orWhere('source_id', 'like', "%$this->search%")
                ->get();
        }


        return view('livewire.clients.clients');
    }
}
