<?php

namespace App\Http\Livewire\Services;

use App\Models\servicesModel;
use App\Models\SubscribersModel;
use App\Models\UserSubMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

use App\Models\ServicesList;

class Services extends Component
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
            'Total' => DB::table('services')->count(),
            'Pending' => DB::table('services')->where('Status', 'PENDING')->count(),
            'Active' => DB::table('services')->where('Status', 'ACTIVE')->count(),
            'Blocked' => DB::table('services')->where('Status', 'BLOCKED')->count(),
        ];
    }


    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = ServicesModel::all();

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'service_name' => $client->subscriber_name,
                'service_type' => $client->subscriber_phone_number,
            ];
        }

        Session::put('MainTitle','Services Dashboard');
        Session::put('MainSubTitle','An Overview Of Services');
    }




    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Services Dashboard');
                Session::put('MainSubTitle','An Overview Of Services');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Service Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Service Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Client',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }



    public function render()
    {



        if(trim($this->search == '')){
            $this->client = DB::table('services')
                ->get();
        }else{
            $this->client = DB::table('services')
                ->where('service_name', 'like', "%$this->search%")
                ->orWhere('service_type', 'like', "%$this->search%")
                ->get();
        }

        return view('livewire.services.services');
    }
}
