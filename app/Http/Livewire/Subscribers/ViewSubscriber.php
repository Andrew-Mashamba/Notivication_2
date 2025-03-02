<?php

namespace App\Http\Livewire\Subscribers;

use App\Models\ClientsModel;
use App\Models\SourcesModel;
use App\Models\SubscribersModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ViewSubscriber extends Component
{

    public $search;
    public $clients;
    public $editKey;
    public $isOpen;
    public $source;
    public $data;
    public $newValue;

    public $source_name;
    public $subscriber_name;
    public $subscriber_phone_number;
    public $subscriber_email;



    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];


    public function boot()
    {

        $tableName = 'subscribers'; // Adjust the table name as per your requirement
        $this->data['columns'] = Schema::getColumnListing($tableName);
        $this->data['rows'] = DB::table($tableName)->get()->toArray(); // Fetch data from the specified table

    }


    public function refreshComponent()
    {
        $this->render();
    }


    public function saveCollateralManagerInfo()
    {

        SubscribersModel::create([
            'source_id' => $this->source_name,
            'subscriber_name' => $this->subscriber_name,
            'subscriber_phone_number' => $this->subscriber_phone_number,
            'subscriber_email' => $this->subscriber_email,
            'Status' => 'ACTIVE',
        ]);

        session()->flash('message', 'Collateral Manager created successfully.');

        $this->reset(); // Clear form fields after successful save
    }

    public function doubleClick($key)
    {
        $this->editKey = $key;
        $this->isOpen = true;
    }
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function saveChanges()
    {
        SubscribersModel::where('id', $this->source->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }



    public function render()
    {

        $this->source = SubscribersModel::find(Session::get('Client'));

        //dd($this->source);

        return view('livewire.subscribers.view-subscriber');
    }
}
