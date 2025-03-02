<?php

namespace App\Http\Livewire\Releases;

use App\Models\Application;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\ReleasesModel;
use App\Charts\commodities;
use Illuminate\Support\Facades\DB;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;




class ViewRelease extends Component
{


    public $principle;
    public $interest;
    public $release_status = '';


    public $tenure;

    public $client;

    public $isOpen;
    public $editKey;

    public $newValue;

    public $table;


    public $types = ['APPROVED', 'REJECTED','PENDING','ACCEPTED','RELEASED','DECLINED','COLLATERAL RELEASED'];

    public $colors = [
        'APPROVED' => '#f6ad55',
        'REJECTED' => '#fc8181',
        'PENDING' => '#f6ad55',
        'ACCEPTED' => '#fc8181',
        'RELEASED' => '#fc8181',
        'DECLINED' => '#f6ad55',
        'COLLATERAL RELEASED' => '#fc8181',
    ];
    public $firstRun = true;

    public $showDataLabels = false;

    public $data;

    public $release;
    public $interest_method;
    public $message;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'price_per_kilo' => 'required|string|max:255',
        'name' => 'required|email|max:255',
    ];

    public function boot()
    {
        // Initialization for ES Users
        $this->data = [
            'columns' => [
                ['label' => 'Name', 'field' => 'name'],
                'Position',
                'Office',
                'Age',
                'Start date',
                'Salary',
            ],
            'rows' => [
                ["Tiger Nixon", "System Architect", "Edinburgh", "61", "2011/04/25", "$320,800"],
                ["Garrett Winters", "Accountant", "Tokyo", "63", "2011/07/25", "$170,750"],
                ["Ashton Cox", "Junior Technical Author", "San Francisco", "66", "2009/01/12", "$86,000"],
                ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "22", "2012/03/29", "$433,060"],
                // ... (remaining rows)
            ],
        ];
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





    public function render()
    {




        $this->release = ReleasesModel::where('id',(Session::get('Release')))->get();



        return view('livewire.releases.view-release');
    }



    public function release($id)

    {

        DB::table('releases')
            ->where('id', Session::get('Release'))
            ->update([
                'Status' => 'COLLATERAL RELEASED',
            ]);

        Application::where('id', $id)->update([
            'application_status' => 'COLLATERAL RELEASED',
            'approval_status' => 'COMPLETED',
        ]);
        // Flash success message to session
        Session::flash('RequestRelease', 'Collateral released');
        $this->boot();
    }

    public function reject($id)
    {

        DB::table('releases')
            ->where('id', Session::get('Release'))
            ->update([
                'Status' => 'COLLATERAL RELEASE REQUESTED',
            ]);

        Application::where('id', $id)->update([
            'application_status' => 'REJECTED',
            'approval_status' => 'COMPLETED',
        ]);

        $this->boot();
        // Flash success message to session
        Session::flash('RequestRelease', 'Collateral not released');

    }



    public function review($id)
    {


        DB::table('releases')
            ->where('id', Session::get('Release'))
            ->update([
                'Status' => 'COLLATERAL RELEASE REQUESTED',
            ]);

        Application::where('id', $id)->update([
            'application_status' => 'COLLATERAL RELEASE REQUESTED',
            'approval_status' => 'PENDING',
        ]);

        // Flash success message to session
        Session::flash('RequestRelease', 'Collateral not released');

        $this->boot();

    }


}
