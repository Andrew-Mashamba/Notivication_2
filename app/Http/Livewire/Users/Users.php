<?php

namespace App\Http\Livewire\Users;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Users extends Component
{

    public $viewLoaded = 'users';
    public $innerView = 'b';

    public $search;

    public function boot()
    {
        Session::put('MainTitle','Users Dashboard');
        Session::put('MainSubTitle','An Overview Of Users');
    }
    public function loadView($xy)
    {

        if($this->viewLoaded == 'users'){
            $this->viewLoaded = $xy;
            $this->innerView = 'b';
        }


        if($this->viewLoaded == 'roles'){
            $this->viewLoaded = $xy;
            $this->innerView = 'b';
            //dd($this->viewLoaded,$this->innerView);
        }




    }

    public function setInnerView($cx){
        $this->innerView = $cx;

        Session::put('ItemOnView',$cx);

        if($this->viewLoaded  == 'users'){
            if($this->innerView == 'b'){
                Session::put('MainTitle','Users Dashboard');
                Session::put('MainSubTitle','An Overview Of Users');
            }
            if($this->innerView == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Users Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }

        if($this->viewLoaded  == 'roles'){

            if($this->innerView == 'b'){
                Session::put('MainTitle','Roles Dashboard');
                Session::put('MainSubTitle','An Overview Of Users');
            }
            if($this->innerView == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Roles Registration');
                Session::put('MainSubTitle','Enter Details');
            }
            //dd($this->viewLoaded,$this->innerView);
        }

        if($this->viewLoaded  == 'processes'){

            if($this->innerView == 'b'){
                Session::put('MainTitle','Processes Dashboard');
                Session::put('MainSubTitle','An Overview Of Processes');
            }
            if($this->innerView == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Processes Registration');
                Session::put('MainSubTitle','Enter Details');
            }
            //dd($this->viewLoaded,$this->innerView);
        }

        if($this->viewLoaded  == 'profile'){
            if($this->innerView == 'b'){
                Session::put('MainTitle','Profile');
                Session::put('MainSubTitle','An Overview Of Current User');
            }

        }

        $this->emit('refreshPage');


    }
    public function render()
    {

        return view('livewire.users.users');
    }
}
