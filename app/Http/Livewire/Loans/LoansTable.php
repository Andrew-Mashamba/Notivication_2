<?php

namespace App\Http\Livewire\Loans;

use App\Models\ClientsModel;
use App\Models\loans_schedules;
use Carbon\Carbon;
use Livewire\Component;


use App\Models\issured_shares;
use App\Models\LoansModel;
use App\Models\BranchesModel;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use App\Models\Clients;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\Session;
use App\Models\search;

class LoansTable extends LivewireDatatable
{

    protected $listeners = [
        'refreshSavingsComponent' => '$refresh',
        'sortByBranchChanged' => 'updateSortByBranch',
        'filterLoanOfficerChanged' => 'updateFilterLoanOfficer'
    ];
    public $exportable = true;
    public $receivedSortByBranch;
    public $receivedFilterLoanOfficer;

    public function updateSortByBranch($value)
    {
        $this->receivedSortByBranch = $value;
    }

    public function updateFilterLoanOfficer($value)
    {
        $this->receivedFilterLoanOfficer = $value;
    }





    public function builder()
    {
        return LoansModel::query();
    }

    public function viewClient($memberId)
    {

        Session::put('memberToViewId', $memberId);
        $this->emit('refreshClientsListComponent');
    }

    public function editClient($memberId, $name)
    {
        Session::put('memberToEditId', $memberId);
        Session::put('memberToEditName', $name);
        $this->emit('refreshClientsListComponent');
    }

    /**
     * Write code on Method
     *
     * @return array()
     */
    public function columns(): array
    {

        $html =null;
            return [

                Column::name('created_at')->label(' date')->searchable(),

                Column::callback(['action_name'], function ($member_number) {
                    return 'Stock Flow';
                   })->label('Process ')->searchable(),
                Column::name('inn_kilos')->label('stock submission(KG)')->searchable(),
                Column::name('out_kilos')->label('stock Release(KG)')->searchable(),
                Column::callback('commodit_id',function ($id){

                 return    DB::table('commodities')->where('id',$id)->value('name');

                })->label('commodity name')->searchable(),

                Column::callback('collateral_manager_id',function ($id){

                 return   $name = DB::table('collateral_managers')
                     ->where('id', $id)
                     ->selectRaw('CONCAT(FirstName, " ", LastName) as name')
                     ->value('name');
                })->label('collateral manager'),
                Column::callback(['ward_id'], function ($ward_id) {
                     $ward=DB::table('Wards')->where('id',$ward_id)->first();
                     $ward_name=$ward->ward_name;
                     // district
                    $district=DB::table('districts')->where('id',$ward->district_id)->first();
                    $district_name=$district->district_name;
                    // region
                    $region_name=DB::table('regions')->where('id',$district->region_id)->value('region_name');
                    return $ward_name.' at '.$district_name.' in '.$region_name;
                })->label('location '),

                Column::name('desriptions')->label('desriptions'),


            ];


    }





    public function viewloan($id,$member_number,$status){

        $member_number = LoansModel::where('id',$id)->value('client_number');
        $loanType = LoansModel::where('id',$id)->value('loan_type');
//

        Session::forget('currentloanClient');
        Session::forget('currentloanID');

        if($status == 1){
            Session::put('loanStatus','ONPROGRESS');
        }elseif ($status == 2){
            Session::put('loanStatus','AWAITING APPROVAL');
        }
        elseif ($status == 9){
            Session::put('loanStatus','AWAITING DISBURSEMENT');
        }elseif($status ==10){
            Session::put('loanStatus','CLOSED');
        }
        elseif ($status == 3){
            Session::put('loanStatus','APPROVED');
        }
        elseif ($status == 4){
            Session::put('loanStatus','RESTRUCTURED');
        }
        elseif ($status == 5){
            Session::put('loanStatus','TOP UP');
        }
        elseif ($status == 6){
            Session::put('loanStatus','ACTIVE');
        }
        elseif ($status == 7){
            Session::put('loanStatus','REJECTED');
        }
        elseif ($status == 8){
            Session::put('loanStatus','RECOVERY');
        }else{
            Session::put('loanStatus','PENDING');
        }
        if ($status == 1){
            Session::put('disableInputs',false);
        }else{
            Session::put('disableInputs',true);
        }

        Session::put('currentloanClient',$member_number);
        Session::put('currentloanID',$id);

        $this->emit('currentloanID');
        session()->put('loan_type',$loanType);
        $this->emit('viewClientDetails');
    }


    public function deleteLoanModal($id,$member_number){
        $member_number = LoansModel::where('id',$id)->value('client_number');
        session::forget('loanAccountID');
        session::forget('currentloanClientDeleteModal');
        session::put('loanAccountID',$id);
        session::put('currentloanClientDeleteModal',$member_number);
        $this->emit('deleteLoan');

    }




}
