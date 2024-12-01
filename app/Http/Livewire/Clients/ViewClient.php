<?php

namespace App\Http\Livewire\Clients;

use App\Models\Application;
use App\Models\SourcesModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\ClientsModel;
use App\Charts\commodities;


use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;




class ViewClient extends Component
{


    public $source_name;
    public $source_ip;
    public $source_id;
    public $search;
    public $clients;
    public $editKey;
    public $isOpen;
    public $source;
    public $data;
    public $newValue;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'source_name' => 'required|string|max:255',
        'source_ip' => 'required|email|max:255',
        'source_id' => 'required|string|max:255',

    ];

    public function boot()
    {

        $tableName = 'sources'; // Adjust the table name as per your requirement
        $this->data['columns'] = Schema::getColumnListing($tableName);
        $this->data['rows'] = DB::table($tableName)->get()->toArray(); // Fetch data from the specified table

    }

    public function updatedSearch($value)
    {
        // Handle search logic here
        // You can filter $this->data['rows'] based on the search value
        // and update the Livewire property accordingly
    }


    public function refreshComponent()
    {
        $this->render();
    }


    public function saveCollateralManagerInfo()
    {
        //dd('44');
        //$this->validate();

        SourcesModel::create([
            'source_name' => $this->source_name,
            'source_ip' => $this->source_ip,
            'source_id' => $this->source_id,
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
        SourcesModel::where('id', $this->source->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }

    public function approve(){



        $clientId = Session::get('Client');
        $this->source = SourcesModel::find($clientId);
        // Retrieve the current process and step from the source
        $processId = $this->source->process;
        $currentStep = $this->source->step;

        // Get the highest step for the current process
        $highestStep = DB::table('steps')
            ->where('process_id', $processId)
            ->max('step_number');

        // Check if the current step is the highest step
        if ($currentStep == $highestStep) {
            // Increment the process by one and set step to 1
            $nextProcessId = $processId + 1; // You may need to adjust this logic based on how you handle process IDs
            $nextStep = 1;


            if ($this->source) {


                $this->source->Status = "ACTIVE";
                $this->source->process = $nextProcessId;
                $this->source->step = $nextStep;

                $this->source->save();
            }

        } else {
            // Increment the current step by one
            $nextStep = $currentStep + 1;

            if ($this->source) {


                $this->source->Status = "ACTIVE";
                //$this->source->process = $nextProcessId;
                $this->source->step = $nextStep;

                $this->source->save();
            }
        }



    }

    public function reject(){
        $clientId = Session::get('Client');
        $this->source = ClientsModel::find($clientId);

        if ($this->source) {

            $this->source->Status = "SUSPENDED";

            $this->source->save();
        }
    }

    public function render()
    {

        $this->source = SourcesModel::find(Session::get('Client'));

        //dd($this->source);

        return view('livewire.clients.view-client');
    }
}
