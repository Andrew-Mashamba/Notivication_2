<?php

namespace App\Http\Livewire\HR;

use App\Http\Livewire\Payments\Approvals;
use App\Http\Livewire\Settings\DepartmentList;
use App\Models\Role;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RegisterDepartment extends Component
{
    public $department_name;
    public $description ;
    protected $rules=['department_name'=>'required|min:3','description'=>'required|min:3'];



    public function resetDepartmentData(){

        $this->department_name=null;
        $this->description=null;
    }


    public function addDepartment(){
        $this->validate();
        // insert data
        DB::table('roles')->insert(['department_name'=>$this->department_name,
            'status'=>'PENDING',
            'description'=>$this->description,
            'permissions'=>'["1","2","3","4","5","6","7","8","9","10","11","12"]'

        ]);
        $id=DB::table('roles')->where('department_name',$this->department_name)->value('id');
        // approval instances
        $approvals=new \App\Models\approvals();
        $approvals->sendApproval($id,'createdDepartment',' create new role','Has created new role','102','');
        // session
        session()->flash('message','New role has created successfully');
        $this->resetDepartmentData();
        $this->closeModal();

    }
    public function closeModal(){
        $this->emit('departmentModalClose');
    }
    public function render()
    {
        return view('livewire.h-r.register-role');
    }
}
