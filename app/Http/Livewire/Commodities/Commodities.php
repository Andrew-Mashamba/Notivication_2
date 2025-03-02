<?php

namespace App\Http\Livewire\Commodities;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




class Commodities extends Component
{

    public $viewLoaded = 'b';

    public $search = '';

    public $client;

    public $commodities;


    public function boot()
    {
        Session::put('MainTitle','Commodities Dashboard');
        Session::put('MainSubTitle','An Overview Of Commodities');
    }

    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Commodities Dashboard');
                Session::put('MainSubTitle','An Overview Of Commodities');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Commodities Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Commodity Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Commodity',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }





    public function render()
    {

        if(trim($this->search == '')){
            $this->commodities = DB::table('commodities')
                ->get();
        }else{
            $this->commodities = DB::table('commodities')
                ->where('name', 'like', "%$this->search%")
                ->orWhere('price_per_kilo', 'like', "%$this->search%")
                ->get();
        }

        return view('livewire.commodities.commodities');
    }
}
