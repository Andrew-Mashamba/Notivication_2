<?php

namespace App\Http\Livewire\Branches;

use App\Models\Branch;
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




class ViewBranch extends Component
{


    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $gender;
    public $Address;
    public $City;
    public $email;
    public $address;
    public $occupation;
    public $education_level;
    public $marital_status ;
    public $Status = '';
    public $phone_number;


    public $photo;

    public $client;

    public $isOpen;
    public $editKey;

    public $newValue;



    public $types = ['PENDING', 'ACTIVE'];

    public $colors = [
        'PENDING' => '#f6ad55',
        'ACTIVE' => '#fc8181',
    ];
    public $firstRun = true;

    public $showDataLabels = false;

    public $data;

    public $branch;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|email|max:255',
        'date_of_birth' => 'required|string|max:255',
        'gender' => 'required|string|max:255',

        'Address' => 'required|string|max:255',
        'City' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',

        'occupation' => 'required|string|max:255',
        'marital_status' => 'required|string|max:255',
    ];

    public function boot()
    {

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
        Branch::where('id', $this->branch->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }

    public function render()
    {

        $this->branch = Branch::find(Session::get('Branch'));

        return view('livewire.branches.view-branch');
    }
}
