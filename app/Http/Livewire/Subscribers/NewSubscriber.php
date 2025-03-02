<?php

namespace App\Http\Livewire\Subscribers;

use App\Models\SourcesModel;
use App\Models\SubscribersModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewSubscriber extends Component
{


    public $source_name;
    public $subscriber_name;
    public $subscriber_phone_number;
    public $subscriber_email;
    public $clients;
    public $search;




    protected $rules = [
        'source_name' => 'required|string|max:255',
        'subscriber_name' => 'required|email|max:255',
        'subscriber_phone_number' => 'required|string|max:255',
        'subscriber_email' => 'required|string|max:255',
    ];




    public function saveClientInfo()
    {
        //dd('44');
        //$this->validate();

        SubscribersModel::create([
            'source_id' => $this->source_name,
            'subscriber_name' => $this->subscriber_name,
            'subscriber_phone_number' => $this->subscriber_phone_number,
            'subscriber_email' => $this->subscriber_email,
            'Status' => 'ACTIVE',
        ]);

        session()->flash('message', 'Subscriber created successfully.');

        $this->resetProperties(); // Clear form fields after successful save
    }

    function resetProperties()
    {

        $this->source_name=null;
        $this->subscriber_name=null;
        $this->subscriber_phone_number=null;
        $this->subscriber_email=null;

    }


    public function render()
    {




        if(trim($this->search == '')){
            $this->clients = DB::table('subscribers')
                ->get();
        }else {
            $this->clients = DB::table('subscribers')
                ->where('source_name', 'like', "%$this->search%")
                ->orWhere('subscriber_name', 'like', "%$this->search%")
                ->orWhere('subscriber_phone_number', 'like', "%$this->search%")
                ->orWhere('subscriber_email', 'like', "%$this->search%")
                ->get();

        }
        return view('livewire.subscribers.new-subscriber');
    }
}
