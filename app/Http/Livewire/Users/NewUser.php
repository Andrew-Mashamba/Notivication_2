<?php

namespace App\Http\Livewire\Users;

use App\Models\bladeUsers;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NewUser extends Component
{

    public $name;
    public $email;
    public $phone_number;
    public $role;
    public $branch;

    protected $listeners = ['refreshPage', '$refresh'];

    public function refreshPage(){

    }
    public function saveUser()
    {

        $emailExists = bladeUsers::where('email', $this->email)->exists();

        if ($emailExists) {
            // Email already exists, handle the situation accordingly
        } else {
            // Create a new user
            $user = bladeUsers::create([
                'name' => $this->name,
                'email' => $this->email, // Replace with the email address
                'phone_number' => $this->phone_number, // Replace with the NIDA number
                'password' => Hash::make('123456'), // Replace 'password' with the actual password
//                'branch' => $this->branch, // Replace with the user's role
                'role' => $this->role, // Replace with the user's role
                'status' => 'ACTIVE', // Replace with the user's status

            ]);

            //$this->emit('refreshPage');

            $this->reset();
        }


    }
    public function render()
    {
        return view('livewire.users.new-user');
    }
}
