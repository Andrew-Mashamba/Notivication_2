<?php

namespace App\Http\Livewire\Services;

use App\Models\servicesModel;
use App\Models\SubscribersModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewService extends Component
{

    public $service_name;
    public $service_type;

    public $clients;
    public $search;




    protected $rules = [
        'service_name' => 'required|string|max:255',
        'service_type' => 'required|email|max:255',
    ];




    public function saveClientInfo()
    {
        //dd('44');
        //$this->validate();

        ServicesModel::create([
            'service_name' => $this->service_name,
            'service_type' => $this->service_type,
            'Status' => 'ACTIVE',
        ]);

        session()->flash('message', 'Service created successfully.');

        $this->resetProperties(); // Clear form fields after successful save
    }

    function resetProperties()
    {

        $this->service_name=null;
        $this->service_type=null;

    }


    public function render()
    {




        if(trim($this->search == '')){
            $this->clients = DB::table('services')
                ->get();
        }else {
            $this->clients = DB::table('services')
                ->where('service_name', 'like', "%$this->search%")
                ->orWhere('service_type', 'like', "%$this->search%")
                ->get();

        }

        return view('livewire.services.new-service');
    }
}
