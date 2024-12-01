<?php

namespace App\Http\Livewire\Users;

use App\Models\approvals;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ViewRole extends Component
{


    public $institution_id;
    public $status;
    public $department_name;
    public $description;
    public $modules;

    public $departments = [];
    public $existingDepartments;
    public $departmentsList;

    public $department;

    public $moduleList;
    public $menusArray = [];
    public $sub_menus;

    public $role_name;

    public $permissions;
    public $selectedPermissions = [];
    public $edit = true;
    public $ItemOnView;
    public $message;

    //public $selectedPermissions = [];


    protected $listeners = ['refreshPage', '$refresh'];

    public function refreshPage()
    {
        // Add your custom logic here if needed
        $this->mount();
    }



    public function mount()
    {

        $this->ItemOnView = Session::get('ItemOnView');
        // Assuming $id and $data are provided
        $role = Role::find($this->ItemOnView);
        if ($role) {
            $this->department_name = $role->department_name;
            $this->description = $role->description;
            $this->status = $role->status;
            $this->selectedPermissions = json_decode($role->permissions, true);
        }
        $this->permissions = DB::table('permissions')->get();

    }


    public function saveRole()
    {

        $role = Role::find($this->ItemOnView);

//        if ($role) {
//            $role->update([
//                'department_name' => $this->department_name,
//                'description' => $this->description,
//                'permissions' => json_encode($this->selectedPermissions),
//                'modules' => json_encode($this->selectedPermissions),
//                'status' => 'ACTIVE',
//            ]);
//
//        } else {
//
//        }

        $updateData = [
            'department_name' => $this->department_name,
            'description' => $this->description,
            'permissions' => json_encode($this->selectedPermissions),
            'modules' => json_encode($this->selectedPermissions),
            'status' => 'ACTIVE',
            ];


        $updateData = json_encode($updateData);


        approvals::updateOrCreate(
            [
                'process_id' => $this->ItemOnView,
                'user_id' => auth()->user()->id,
                'process_name' => 'editRole',

            ],
            [
                'institution' => ' ',
                'process_name' => 'editRole',
                'process_description' => auth()->user()->name.' has edited role named - '.$this->department_name,
                'approval_process_description' => auth()->user()->name.' has edited role named - '.$this->department_name,
                'process_code' => '24',
                'process_id' => $this->ItemOnView,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> $updateData
            ]
        );

        //$this->reset();
        $this->edit = true;
        $this->message ="Done, Awaiting Approval";
        $this->mount();

    }

    public function activate(){

        $updateData = [
            'status' => 'ACTIVE',
        ];


        $updateData = json_encode($updateData);


        approvals::updateOrCreate(
            [
                'process_id' => $this->ItemOnView,
                'user_id' => auth()->user()->id,
                'process_name' => 'editRole',

            ],
            [
                'institution' => ' ',
                'process_name' => 'editRole',
                'process_description' => auth()->user()->name.' has changed the status of  role named  - '.$this->department_name,
                'approval_process_description' => auth()->user()->name.' has edited role named - '.$this->department_name,
                'process_code' => '24',
                'process_id' => $this->ItemOnView,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> $updateData
            ]
        );

        $this->message ="Done, Awaiting Approval";

    }

    public function delete(){
        $updateData = [
            'status' => 'DELETED',
        ];


        $updateData = json_encode($updateData);


        approvals::updateOrCreate(
            [
                'process_id' => $this->ItemOnView,
                'user_id' => auth()->user()->id,
                'process_name' => 'editRole',

            ],
            [
                'institution' => ' ',
                'process_name' => 'editRole',
                'process_description' => auth()->user()->name.' has changed the status of  role named  - '.$this->department_name,
                'approval_process_description' => auth()->user()->name.' has edited role named - '.$this->department_name,
                'process_code' => '24',
                'process_id' => $this->ItemOnView,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> $updateData
            ]
        );

        $this->message ="Done, Awaiting Approval";
    }

    public function block(){

        $updateData = [
            'status' => 'BLOCKED',
        ];


        $updateData = json_encode($updateData);


        approvals::updateOrCreate(
            [
                'process_id' => $this->ItemOnView,
                'user_id' => auth()->user()->id,
                'process_name' => 'editRole',

            ],
            [
                'institution' => ' ',
                'process_name' => 'editRole',
                'process_description' => auth()->user()->name.' has changed the status of  role named - '.$this->department_name,
                'approval_process_description' => auth()->user()->name.' has edited role named - '.$this->department_name,
                'process_code' => '24',
                'process_id' => $this->ItemOnView,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> $updateData
            ]
        );

        $this->message ="Done, Awaiting Approval";

    }

    public function setEdit($num){

        if($num == 1){
            $this->edit = false;
        }
        if($num == 2){
            $this->edit = true;
        }

    }



    public function render()
    {
//        $this->ItemOnView = Session::get('ItemOnView');
//        // Assuming $id and $data are provided
//        $role = Role::find($this->ItemOnView);
//        if ($role) {
//            $this->department_name = $role->department_name;
//            $this->description = $role->description;
//            $this->selectedPermissions = json_decode($role->permissions);
//        }
        $this->permissions = DB::table('permissions')->get();

        return view('livewire.users.view-Role');
    }
}
