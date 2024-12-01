<?php

namespace App\Http\Livewire\Approvals;

use App\Http\Traits\MailSender;
use App\Models\AccountsModel;
use App\Models\approvals;
use App\Models\Branches;
use App\Models\BranchesModel;
use App\Models\ChannelsModel;
use App\Models\CommoditiesModel;
use App\Models\departmentsList;
use App\Models\Employee;
use App\Models\general_ledger;
use App\Models\Investment;
use App\Models\Loan_sub_products;
use App\Models\loans_schedules;
use App\Models\Clients;
use App\Models\Nodes;
use App\Models\NodesList;
use App\Models\Role;
use App\Models\servicesModel;
use App\Models\StockPrice;
use App\Models\Teller;
use App\Models\Transactions;
use App\Models\User;
use App\Models\UserSubMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\ServicesList;
use Livewire\WithFileUploads;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class ApprovalsTable extends LivewireDatatable
{


    use MailSender;
    public $exportable = true;
    public $searchable="process_name, process_description,process_status,process_type,process_status,approval_status";

    public function builder(): \Illuminate\Database\Eloquent\Builder
    {

        return approvals::query()->orderBy('id','DESC');


    }


    public function columns(): array
    {
        return [

            Column::name('created_at')
                ->label('Date Created')->defaultSort(),

            Column::name('process_name')
                ->label('Action Name'),

            Column::name('process_description')
                ->label('Details'),

            Column::callback(['user_id'], function ($id) {
                if($id){

                    return User::where('id',$id)->value('name');

                }else{
                    return '';
                }

            })->unsortable()->label('Initiator'),

            Column::callback(['approver_id'], function ($id) {
                $user = User::find($id);
                if($user){
                    return $user->name;
                } else {
                    return 'Pending';
                }
            })->unsortable()->label('Approver'),






            Column::callback(['approval_status'], function ($status) {
                return view('livewire.settings.table-status', ['status' => $status, 'move' => false]);
            })->label('Approval Status'),


            Column::callback(['id'], function ($id) {
                if(approvals::find($id)->approval_status =='PENDING'){
                    return view('livewire.approvals.action', ['id' => $id, 'move' => false]);
                }
                return null;
            })->unsortable()->label('Decision'),
        ];
    }




    public function approve($id): void
    {
        $approval = approvals::find($id);


        /////////////Roles ////////////////////

        if($approval->process_name =='addRole'){
            $this->approveAddRole($approval->process_id,$id);
        }

        if($approval->process_name =='editRole'){
            $this->approveEditRole($approval->process_id,$id,$approval->edit_package);
        }

        //////////////// Commodities /////////////////
        if($approval->process_name =='addCommodity'){
            $this->approveAddCommodity($approval->process_id,$id);
        }

        if($approval->process_name =='changePrice'){
            $this->approveChangePrice($approval->process_id,$id,$approval->edit_package);
        }


    }


    public function reject($id): void
    {

        $approval = approvals::find($id);



        if($approval->process_name =='addRole'){
            $this->rejectAddRole($approval->process_id,$id);
        }
        if($approval->process_name =='editRole'){
            $this->rejectEditRole($approval->process_id,$id);
        }

        //////////////// Commodities /////////////////
        if($approval->process_name =='addCommodity'){
            $this->rejectAddCommodity($approval->process_id,$id);
        }


        if($approval->process_name =='changePrice'){
            $this->rejectChangePrice($approval->process_id,$id);
        }
    }




    public function approveChangePrice($process_id,$id,$changes){

        $changes = json_decode($changes, true);
        foreach($changes as $key => $value){
            $dbValue = CommoditiesModel::where('id',$process_id)->value($key);
            if($dbValue != $value){
                CommoditiesModel::where('id', $process_id)->update([
                $key => $value
                ]);

                StockPrice::create([
                    'stock_id' => $process_id,
                    'price' => $value,
                    'recorded_at' => now(),
                ]);
            }

        }

        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'approval_status' => 'APPROVED',
            'approval_process_description' => 'Approved change of price',
        ]);

    }

    public function rejectChangePrice($process_id,$id){
        CommoditiesModel::where('id', $process_id)->update([
            'Status' => 'REJECTED' // Status changed to 'UPDATED'
        ]);
        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
            'approval_process_description' => ' has rejected change of price',
        ]);

    }

    public function approveAddCommodity($process_id,$id){
        CommoditiesModel::where('id', $process_id)->update([
            'Status' => 'ACTIVE'
        ]);
        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'APPROVED',
            'approval_status' => 'APPROVED',
            'approval_process_description' => ' has approved creation of a new role',
        ]);

    }

    public function rejectAddCommodity($process_id,$id){
        CommoditiesModel::where('id', $process_id)->update([
            'Status' => 'REJECTED'
        ]);
        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
            'approval_process_description' => ' has rejected creation of a new role',
        ]);

    }



    public function approveAddRole($process_id,$id){
        Role::where('id', $process_id)->update([
            'status' => 'ACTIVE' // Status changed to 'UPDATED'
        ]);
        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'APPROVED',
            'approval_status' => 'APPROVED',
            'approval_process_description' => ' has approved creation of a new role',
        ]);

    }

    public function rejectAddRole($process_id,$id){
        Role::where('id', $process_id)->update([
            'status' => 'REJECTED' // Status changed to 'UPDATED'
        ]);
        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
            'approval_process_description' => ' has rejected creation of a new role',
        ]);

    }


    public function approveEditRole($process_id,$id,$changes){

        $changes = json_decode($changes, true);
        foreach($changes as $key => $value){
            //$dbValue = Role::where('id',$process_id)->value($key);
            //if($dbValue != $value){
                Role::where('id', $process_id)->update([
                    $key => $value
                ]);
            //}

        }

        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'approval_status' => 'APPROVED',
            'approval_process_description' => 'Approved editing of the node',
        ]);

    }

    public function rejectEditRole($process_id,$id){
        Role::where('id', $process_id)->update([
            'status' => 'REJECTED' // Status changed to 'UPDATED'
        ]);
        approvals::where('id', $id)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
            'approval_process_description' => ' has rejected creation of a new role',
        ]);

    }


    /////////////////////////////role///////////////////////

    public function approveCreatedDepartment($process_id,$approvalsId){

        DB::table('roles')
            ->where('id',$process_id)->update(['status'=>"ACTIVE"]);

        approvals::where('id', $approvalsId)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'APPROVED',
            'approval_status' => 'APPROVED',
            'approval_process_description' => ' has Approved  to create new role',
        ]);

    }


    //////////////////////////////////////REJECT CREATE INVESTMENT////////////////////////////////////////////
    public function rejectCreateInvestment($process_id,$approvalsId): void
    {
      Investment::where('id',$process_id)->update(['status'=>"REJECTED"]);
        approvals::where('id', $approvalsId)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
            'approval_process_description' => 'Rejected the creation of new investment',


        ]);

    }



    public function rejectCreateLanProduct($process_id,$approvalsId){
        Loan_sub_products::where('id',$process_id)->update(['sub_product_status'=>"DECLINED"]);
        approvals::where('id', $approvalsId)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
            'approval_process_description' => 'Rejected the creation of new loan sub product',


        ]);

    }


    private function approveEditNode($process_id, $approvalsId,$changes): void
    {
        $changes = json_decode($changes, true);
        foreach($changes as $key => $value){
            $dbValue = NodesList::where('id',$process_id)->value($key);
            if($dbValue != $value){
                NodesList::where('id', $process_id)->update([
                    $key => $value
                ]);
            }

        }

        approvals::where('id', $approvalsId)->update([
            'approver_id' => Auth::user()->id,
            'approval_status' => 'APPROVED',
            'approval_process_description' => 'Approved editing of the node',
        ]);
    }


    ///////////////////////PASSWORD POLICY//////////////////////
    public function approvePasswordPolicy($process_id,$approvalsId){

        $value=approvals::where('id',$approvalsId)->value('approval_process_description');
        $values=json_decode($value);

        DB::table('password_policies')->where('id',$process_id)->update([
            'length'=>$values->length,
            'requireUppercase'=>$values->requireUppercase,
            'requireNumeric'=>$values->requireNumeric,
            'requireSpecialCharacter'=>$values->requireSpecialCharacter,
            'limiter'=>$values->limiter,
            'passwordExpire'=>$values->passwordExpire,
        ]);


        approvals::where('id', $approvalsId)->update([
            'approver_id' => Auth::user()->id,
            'process_status' => 'APPROVED',
            'approval_status' => 'APPROVED',
            'approval_process_description' => 'Approved  change  of password policy',
        ]);
    }

}
