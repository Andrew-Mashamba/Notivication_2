<?php

namespace App\Http\Livewire\Users;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewProcess extends Component
{
    public $process;
    public $process_role;
    public $process_stage_name;
    public $selectedPermissions = [];
    public $roles;
    public $permissions;
    public $processId;
    public $steps;

    public function set()
    {
        // Insert a new record into the `processes` table
        $this->processId = DB::table('processes')->insertGetId([
            'process_name' => $this->process,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function setProcess()
    {
        // Validate the form data
        $validatedData = $this->validate([
            'process_role' => 'required|exists:roles,id',
            'process_stage_name' => 'required|string|max:255',
            'selectedPermissions' => 'required|array',
        ]);

        // Get the role model instance
        $role = Role::find($validatedData['process_role']);

        if ($role) {
            // Update the role with the selected permissions


//            $role->update([
//                'permissions' => json_encode($this->selectedPermissions),
//                'modules' => json_encode($this->selectedPermissions),
//            ]);

            // Call the set method to insert the process
            //$this->set();

            // Retrieve the last step number for the current process and increment it by one
            $lastStep = DB::table('steps')
                ->where('process_id', $this->processId)
                ->orderBy('step_number', 'desc')
                ->first();

            $stepNumber = $lastStep ? $lastStep->step_number + 1 : 1;

            $stepId = DB::table('steps')->insertGetId([
                'process_id' => $this->processId,
                'role_id' => $validatedData['process_role'],
                'step_name' => $validatedData['process_stage_name'],
                'step_number' => $stepNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Loop through the selected permissions and insert them into the `step_permissions` table
            foreach ($this->selectedPermissions as $permissionId) {
                DB::table('step_permissions')->insert([
                    'step_id' => $stepId,
                    'permission_id' => $permissionId,
                    'process_id' => $this->processId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            session()->flash('message', 'Process and steps successfully set with Process ID: ' . $this->processId);

            // Reset the form fields
            $this->reset(['process_role', 'process_stage_name', 'selectedPermissions', 'process']);
        } else {
            session()->flash('error', 'Role not found.');
        }
    }

    public function edit($id){
        $this->fetchPermissions($id);
    }

    public function fetchPermissions($id)
    {
        $this->permissions = DB::table('permissions')
            ->leftJoin('step_permissions', function ($join) {
                $join->on('permissions.id', '=', 'step_permissions.permission_id')
                    ->where(function ($query) {
                        $query->whereNull('step_permissions.process_id')
                            //->where('step_permissions.step_id', '=', $this->processId)
                            ->orWhere('step_permissions.process_id', '=', $this->processId);
                    });
            })
            ->select('permissions.*')
            ->groupBy('permissions.id')
            ->havingRaw('count(step_permissions.id) = 0 or max(step_permissions.step_id) = ?', [$this->processId])
            ->get();
    }

    public function render()
    {
        $this->roles = DB::table('roles')->get();
        $this->steps = DB::table('steps')->where('process_id',$this->processId)->orderBy('step_number')->get();

        $this->permissions = DB::table('permissions')->get();
        return view('livewire.users.new-process');
    }
}
