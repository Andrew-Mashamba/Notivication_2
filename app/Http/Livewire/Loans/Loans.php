<?php

namespace App\Http\Livewire\Loans;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Illuminate\Support\Facades\Session;




use App\Models\LoansModel;
use App\Models\approvals;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;


use App\Models\AccountsModel;
use App\Models\Clients;
use App\Models\TeamUser;


use Livewire\WithFileUploads;
use App\Models\issured_loans;



use App\Models\general_ledger;


class Loans extends Component
{

    public $data;

    public $viewLoaded=1;

    public function boot()
    {
        // Initialization for ES Users
        //$this->data = DB::table('applications')->get();

        // Initialization for ES Users
        $tableName = 'approvals'; // Adjust the table name as per your requirement
        $this->data['columns'] = Schema::getColumnListing($tableName);
        $this->data['rows'] = DB::table($tableName)->get()->toArray(); // Fetch data from the specified table

    }

    function loadView($id){
        $this->viewLoaded=$id;
    }

    public function render()
    {
        return view('livewire.loans.loans');
    }

}
