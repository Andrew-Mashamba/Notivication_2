<?php

namespace App\Http\Livewire\Branches;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;






class Branches extends Component
{

    public $viewLoaded = 'b';

    public $search = '';

    public $branch;


    public function boot()
    {
        Session::put('MainTitle','Branches Dashboard');
        Session::put('MainSubTitle','An Overview Of Branches');
    }

    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Branches Dashboard');
                Session::put('MainSubTitle','An Overview Of Collateral Managers');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Branches Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Client Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Branch',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }



    public function render()
    {



        if(auth()->user()->collateral_manager_id==null){

        if(trim($this->search == '')){
            $this->branch = DB::table('branches')
                ->get();
        }else{
            $this->branch = DB::table('branches')
                ->where('first_name', 'like', "%$this->search%")
                ->orWhere('last_name', 'like', "%$this->search%")
                ->orWhere('date_of_birth', 'like', "%$this->search%")
                ->orWhere('gender', 'like', "%$this->search%")
                ->orWhere('contact_number', 'like', "%$this->search%")
                ->orWhere('email', 'like', "%$this->search%")
                ->orWhere('address', 'like', "%$this->search%")
                ->orWhere('occupation', 'like', "%$this->search%")
                ->orWhere('education_level', 'like', "%$this->search%")
                ->orWhere('marital_status', 'like', "%$this->search%")
                ->orWhere('created_at', 'like', "%$this->search%")
                ->get();
        }
        }else{

            if(trim($this->search == '')){
                $this->branch = DB::table('branches')->where('collateral_manager_id',auth()->user()->collateral_manager_id)
                    ->get();
            }else{
                $this->branch = DB::table('branches')->where('collateral_manager_id',auth()->user()->collateral_manager_id)
                    ->where('first_name', 'like', "%$this->search%")
                    ->orWhere('last_name', 'like', "%$this->search%")
                    ->orWhere('date_of_birth', 'like', "%$this->search%")
                    ->orWhere('gender', 'like', "%$this->search%")
                    ->orWhere('contact_number', 'like', "%$this->search%")
                    ->orWhere('email', 'like', "%$this->search%")
                    ->orWhere('address', 'like', "%$this->search%")
                    ->orWhere('occupation', 'like', "%$this->search%")
                    ->orWhere('education_level', 'like', "%$this->search%")
                    ->orWhere('marital_status', 'like', "%$this->search%")
                    ->orWhere('created_at', 'like', "%$this->search%")
                    ->get();
            }

        }

        return view('livewire.branches.branches');
    }
}
