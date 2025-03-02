<?php

namespace App\Http\Livewire\Services;

use App\Models\servicesModel;
use App\Models\SubscribersModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ViewService extends Component
{
    public $search;
    public $clients;
    public $editKey;
    public $isOpen;
    public $source;
    public $data;
    public $newValue;

    public $service_name;
    public $service_type;



    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];


    public function boot()
    {

        $tableName = 'services'; // Adjust the table name as per your requirement
        $this->data['columns'] = Schema::getColumnListing($tableName);
        $this->data['rows'] = DB::table($tableName)->get()->toArray(); // Fetch data from the specified table

    }


    public function refreshComponent()
    {
        $this->render();
    }


    public function saveCollateralManagerInfo()
    {

        ServicesModel::create([
            'service_name' => $this->service_name,
            'service_type' => $this->service_type,
            'Status' => 'ACTIVE',
        ]);

        session()->flash('message', 'Service created successfully.');

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
        ServicesModel::where('id', $this->source->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }



    public function render()
    {

        $this->source = ServicesModel::find(Session::get('Client'));

        //dd($this->source);


        return view('livewire.services.view-service');
    }
}
