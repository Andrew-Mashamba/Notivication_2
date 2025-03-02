<?php

namespace App\Http\Livewire\Branches;

use App\Models\approvals;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\ClientsModel;
use Illuminate\Support\Facades\DB;
class NewBranch extends Component
{



    public $institution_id;
    public $branch_name;
    public $region = null;
    public $wilaya;
    public $branchNumber;
    public $parentBranch;
    public $monthly_disbursement_amount;
    public $amount_owed;
    public $phone_number;
    public $email;
    public $automatic_payments;
    public $branch_status;
    public $Status;
    public $selected;
    public $created_at;
    public $updated_at;
    public $district;
    public $ward;
    public $search;
    public $message;



    protected $rules = [

        'branch_name' => 'required|string|max:255',
        'region' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'ward' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ];


    public function saveBranchInfo()
    {


        $id = Branch::create([
            'name' => $this->branch_name,
            'region' => $this->region,
            'district' => $this->district,
            'ward' => $this->ward,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'Status' => 'PENDING'
        ])->id;


        approvals::updateOrCreate(
            [
                'process_id' => $id,
                'user_id' => auth()->user()->id,
                'process_name' => 'addBranch',

            ],
            [
                'institution' => ' ',
                'process_name' => 'addBranch',
                'process_description' => auth()->user()->name.' has added a branch named - '.$this->branch_name,
                'approval_process_description' => auth()->user()->name.' has added a branch named - '.$this->branch_name,
                'process_code' => '24',
                'process_id' => $id,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> null
            ]
        );


        //$this->reset();

        $this->message ="Done, awaiting approval";

        $this->resetClientInfo(); // Clear form fields after successful save
    }

    function resetClientInfo()
    {

        $this->branch_name=null;
        $this->region=null;
        $this->district=null;
        $this->ward=null;
        $this->phone_number=null;
        $this->email=null;

    }



    public function render()
    {

        return view('livewire.branches.new-branch');

    }

}
