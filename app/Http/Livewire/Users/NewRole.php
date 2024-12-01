<?php

namespace App\Http\Livewire\Users;

use App\Models\approvals;
use App\Models\bladeUsers;
use App\Models\Role;
use App\Models\departmentsList;
use App\Models\menu_list;
use App\Models\menus;
use App\Models\Permission;
use App\Models\sub_menus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NewRole extends Component
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

    //public $selectedPermissions = [];

    public $message;


    protected $listeners = ['refreshPage', '$refresh'];


    public function refreshPage()
    {
        // Add your custom logic here if needed
        $this->mount();
    }




    public function mount()
    {
        // Assuming $id and $data are provided
        $existingRecord = DB::table('temp_permissions')->where('user_id', Auth::user()->id)->first();

        if (!$existingRecord) {
            DB::table('temp_permissions')->insert(['user_id'=>Auth::user()->id]);
        }
        $this->permissions = DB::table('permissions')->get();
    }


    public function saveRole()
    {

        $user_id = Role::create([
            'department_name' => $this->department_name,
            'description' => $this->description, // Replace with the email address
            'permissions' => json_encode($this->selectedPermissions), // Replace 'password' with the actual password
            'modules' => json_encode($this->selectedPermissions),
            'status' => 'PENDING',
        ])->id;


        approvals::updateOrCreate(
            [
                'process_id' => $user_id,
                'user_id' => auth()->user()->id,
                'process_name' => 'addRole',

            ],
            [
                'institution' => ' ',
                'process_name' => 'addRole',
                'process_description' => auth()->user()->name.' has added a role named - '.$this->department_name,
                'approval_process_description' => auth()->user()->name.' has added a role named - '.$this->department_name,
                'process_code' => '24',
                'process_id' => $user_id,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> null
            ]
        );


        $this->reset();

        $this->message ="Done, awaiting approval";

    }


    public function render()
    {

        $this->permissions = DB::table('permissions')->get();
        return view('livewire.users.new-role');
    }
}
