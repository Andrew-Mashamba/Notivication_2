<?php

namespace App\Http\Livewire\Offers;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class Offers extends Component
{


    public $viewLoaded = 'b';

    public $search = '';

    public $client;

    public $commodities;


    public function boot()
    {
        Session::put('MainTitle','Offers Dashboard');
        Session::put('MainSubTitle','An Overview Of Offers');
    }

    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Offers Dashboard');
                Session::put('MainSubTitle','An Overview Of Offers');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Offers Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Offer Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Offer',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }







    public function render()
    {
        if(trim($this->search == '')){
            $this->offers = DB::table('offers')
                ->get();
        }else{
            $this->offers = DB::table('offers')
                ->where('principle', 'like', "%$this->search%")
                ->where('interest', 'like', "%$this->search%")
                ->where('offer_status', 'like', "%$this->search%")
                ->orWhere('tenure', 'like', "%$this->search%")
                ->get();
        }

        return view('livewire.offers.offers');
    }
}
