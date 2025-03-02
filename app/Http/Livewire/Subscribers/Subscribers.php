<?php

namespace App\Http\Livewire\Subscribers;

use App\Models\SubscribersModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Subscribers extends Component
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
            'Total' => DB::table('subscribers')->count(),
            'Pending' => DB::table('subscribers')->where('Status', 'PENDING')->count(),
            'Active' => DB::table('subscribers')->where('Status', 'ACTIVE')->count(),
            'Blocked' => DB::table('subscribers')->where('Status', 'BLOCKED')->count(),
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
                'subscribers_id' => $client->subscribers_id,
                'source_id' => $client->source_id,
                'Status' => $client->Status,
            ];
        }

        Session::put('MainTitle','Subscribers Dashboard');
        Session::put('MainSubTitle','An Overview Of Subscribers');
    }




    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Subscribers Dashboard');
                Session::put('MainSubTitle','An Overview Of Subscribers');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Subscriber Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Subscribers Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Client',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }



    public function render()
    {



        if(trim($this->search == '')){
            $this->client = DB::table('subscribers')
                ->get();
        }else{
            $this->client = DB::table('subscribers')
                ->where('subscriber_name', 'like', "%$this->search%")
                ->orWhere('subscriber_phone_number', 'like', "%$this->search%")
                ->orWhere('subscriber_email', 'like', "%$this->search%")
                ->orWhere('subscribers_id', 'like', "%$this->search%")
                ->orWhere('source_id', 'like', "%$this->search%")
                ->orWhere('Status', 'like', "%$this->search%")
                ->get();
        }


        return view('livewire.subscribers.subscribers');
    }
}
