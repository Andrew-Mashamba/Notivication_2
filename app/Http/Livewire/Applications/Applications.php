<?php

namespace App\Http\Livewire\Applications;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;





class Applications extends Component
{

    public $viewLoaded = 'b';

    public $search = '';

    public $applications;


    public function boot()
    {
        Session::put('MainTitle','Loan Applications Dashboard');
        Session::put('MainSubTitle','An Overview Of Loan Applications');
    }

    public function loadView($id)
    {
        //dd($id);
        if($id == 'a' or $id == 'b'){
            if($id == 'b'){
                Session::put('MainTitle','Loan Applications Dashboard');
                Session::put('MainSubTitle','An Overview Of Loan Applications');
            }
            if($id == 'a'){
                //dd('sdsd');
                Session::put('MainTitle','Loan Application');
                Session::put('MainSubTitle','Enter Details');
            }

        }else{
            Session::put('MainTitle','Loan Application Details');
            Session::put('MainSubTitle','View And Edit Loan Application');
            Session::put('Application',$id);
            $this->emit('refreshComponent');
        }
        $this->viewLoaded = $id;

    }


    public function render()
    {

        if(trim($this->search == '')){
            $this->applications = DB::table('applications')
                ->get();
        }else{
            $this->applications = DB::table('applications')
                ->where('client_id', 'like', "%$this->search%")
                ->orWhere('application_status', 'like', "%$this->search%")
                ->orWhere('tenure', 'like', "%$this->search%")
                ->orWhere('loan_id', 'like', "%$this->search%")
                ->orWhere('loan_amount', 'like', "%$this->search%")
                ->orWhere('created_at', 'like', "%$this->search%")
                ->get();
        }




        return view('livewire.applications.applications');
    }
}
