<?php

namespace App\Http\Livewire\Users;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ViewProcess extends Component
{

    public $roles;
    public $steps;
    public $processId = 12;
    public $permissions;
    public $isEdit = false;
    public $process_role;
    public $process_stage_name;
    public $selectedPermissions;
    public $step_id;

    protected $listeners = ['refreshPage', '$refresh'];

    public function refreshPage()
    {
        // Add your custom logic here if needed
        $this->render();
    }


    public function edit($id){
        $this->fetchPermissions($id);
    }

    public function fetchPermissions($id)
    {
        $this->permissions = DB::table('permissions')->get();

        $this->isEdit = true;
        $this->step_id = $id;

        $this->process_role = DB::table('steps')->where('id',$id)->value('role_id');
        $this->process_stage_name = DB::table('steps')->where('id',$id)->value('step_name');

        $role = Role::find($this->process_role);
        if ($role) {
            //$this->department_name = $role->department_name;
            //$this->description = $role->description;
            //$this->status = $role->status;
            $this->selectedPermissions = json_decode($role->permissions, true);
        }

        //dd($this->permissions);
    }


    public function render()
    {
        $this->roles = DB::table('roles')->get();
        $this->steps = DB::table('steps')->where('process_id',$this->processId)->orderBy('step_number')->get();
        return view('livewire.users.view-process');
    }
}
