<?php

namespace App\Http\Livewire\Clients;

use App\Models\SourcesModel;
use GPBMetadata\Google\Api\Auth;
use Livewire\Component;
use App\Models\ClientsModel;
use Illuminate\Support\Facades\DB;
class NewClient extends Component
{



    public $source_name;
    public $source_ip;
    public $source_id;
    public $search;
    public $clients;




    protected $rules = [
        'source_name' => 'required|string|max:255',
        'source_ip' => 'required|email|max:255',
        'source_id' => 'required|string|max:255',
    ];




    public function saveClientInfo()
    {
        //dd('44');
        //$this->validate();

        SourcesModel::create([
            'source_name' => $this->source_name,
            'source_ip' => $this->source_ip,
            'source_id' => $this->source_id,
            'Status' => 'ACTIVE',
        ]);

        session()->flash('message', 'Source created successfully.');

        $this->resetProperties(); // Clear form fields after successful save
    }

    function resetProperties()
    {

        $this->source_name=null;
        $this->source_ip=null;
        $this->source_id=null;

    }


    public function render()
    {




        if(trim($this->search == '')){
            $this->clients = DB::table('sources')
                ->get();
        }else {
            $this->clients = DB::table('sources')
                ->where('source_name', 'like', "%$this->search%")
                ->orWhere('source_ip', 'like', "%$this->search%")
                ->orWhere('source_id', 'like', "%$this->search%")
                ->get();

        }

        return view('livewire.clients.new-client');

    }

}
