<?php

namespace App\Http\Livewire\Cm;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;






class Cm extends Component
{

    public $viewLoaded = 'b';

    public $search = '';

    public $collateralManagers;


    public function boot()
    {
        Session::put('MainTitle','Collateral Managers Dashboard');
        Session::put('MainSubTitle','An Overview Of Collateral Managers');
    }

    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Collateral Managers Dashboard');
                Session::put('MainSubTitle','An Overview Of Collateral Managers');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Collateral Managers Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Manager Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Manager',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }



    public function render()
    {



        if(trim($this->search == '')){
            $this->collateralManagers = DB::table('collateral_managers')
                ->get();
        }else{
            $this->collateralManagers = DB::table('collateral_managers')
                ->where('CMNumber', 'like', "%$this->search%")
                ->orWhere('EmailAddress', 'like', "%$this->search%")
                ->orWhere('FirstName', 'like', "%$this->search%")
                ->orWhere('LastName', 'like', "%$this->search%")
                ->orWhere('BusinessName', 'like', "%$this->search%")
                ->orWhere('BusinessLicenceNumber', 'like', "%$this->search%")
                ->orWhere('TINNumber', 'like', "%$this->search%")
                ->orWhere('BusinessPhoneNumber', 'like', "%$this->search%")
                ->get();
        }



        return view('livewire.cm.cm');
    }
}
