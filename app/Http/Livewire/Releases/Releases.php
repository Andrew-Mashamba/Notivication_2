<?php

namespace App\Http\Livewire\Releases;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Releases extends Component
{


    public $viewLoaded = 'b';

    public $search = '';

    public $client;

    public $commodities;

    public $release;

    public function boot()
    {
        Session::put('MainTitle','Releases Dashboard');
        Session::put('MainSubTitle','An Overview Of Releases');
    }

    public function loadView($id)
    {
        //dd($id);

        session()->put('release_process_id',$id);

        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Releases Dashboard');
                Session::put('MainSubTitle','An Overview Of Releases');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Releases Registration');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Release Details');
            Session::put('MainSubTitle','View And Edit Details');
            Session::put('Release',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }



    public function render()
    {

        if(trim($this->search == '')){
            $this->releases = DB::table('releases')
                ->get();
        }else{
            $this->releases = DB::table('releases')
                ->where('Status', 'like', "%$this->search%")
                ->where('client_id', 'like', "%$this->search%")
                ->where('created_at', 'like', "%$this->search%")
                ->get();
        }

        return view('livewire.releases.releases');
    }
}
