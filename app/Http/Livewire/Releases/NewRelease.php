<?php

namespace App\Http\Livewire\Releases;

use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class NewRelease extends Component
{

    public $user;
    public  $isOpena;

    public $users;
    public $search = '';
    public $isOpen = false; // Add this property

    public $isOpen2 = false; // Add this property
    public $isOpen2a = false; // Add this property

    public $usera;
    public $clients;
    public $clients2;
    public $clientName;
    public $clientNamea;
    public $search2;
    public $commodities;
    public $commodity;
    public $stocks;
    public $isOpen3;
    public $kilos;
    public $price_per_kilo;

    public $region;

    public $user3;
    public $clientName3;

    public $commodityName;
    public $offer;
    public $applications;
    public $ward;
    public $district;
    public $description;
    public $warehouse;
    public $warehouses_temp;
    public $application;
    public $message;



    public function toggleDropdowna()
    {
        $this->isOpena = !$this->isOpena;
    }

    public function closeDropdowna($id)
    {
        //dd($id);
        $this->usera = $id;
        $this->clientNamea = DB::table('farmers')->where('id',$this->usera)->value('first_name').' '.
            DB::table('farmers')->where('id',$this->usera)->value('last_name');
        $this->isOpena = false;

        $this->applications = DB::table('stocks')
            ->where('status','ACTIVE')
            ->where('client_id', $this->usera)
            ->get();
    }

    public function toggleDropdown2a()
    {
        //dd();
        $this->isOpen2 = !$this->isOpen2;
    }

    public function closeDropdown2a($id)
    {
        $this->stocks = null;
        $this->offer = $id;
        $this->offerName = "Hold";
        $this->isOpen2 = false;

        dd($this->usera);


    }


    public function requestRelease($id)

    {

        DB::table('releases')->insert([
            'client_id' => $this->usera,
            'application_id' => $id,
            'Status' => 'PENDING',
        ]);



        DB::table('applications')
            ->where('client_id', $this->usera)
            ->where('id', $id)
            ->update([
                'application_status' => 'COLLATERAL RELEASE REQUESTED',
            ]);


        DB::table('approvals')->insert([
            'institution' => $id,
            'process_name' => 'stock Release',
            'process_description' => auth()->user()->name.' has registered stock release  for '.
                DB::table('farmers')->where('id',$this->usera)->value('first_name').' '.
                DB::table('farmers')->where('id',$this->usera)->value('first_name')
            ,
            'process_code' => '103',
            'process_id' => $id,
            'user_id'  => auth()->user()->id,
            'team_id'  => $id,
        ]);



        // Flash success message to session
        Session::flash('RequestRelease', 'Collateral release request successfully sent..');
        $this->usera = null;
        $this->applications = null;

    }

    public function render()
    {

        if(trim($this->search == '')){
            $this->clients = DB::table('farmers')->where('collateral_manager_id',auth()->user()->collateral_manager_id)
                ->get();
        }else{
            $this->clients = DB::table('farmers')->where('collateral_manager_id',auth()->user()->collateral_manager_id)
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


        if(trim($this->search2 == '')){
            $this->clients2 = DB::table('farmers')
                ->get();
        }else{
            $this->clients = DB::table('farmers')
                ->where('first_name', 'like', "%$this->search2%")
                ->orWhere('last_name', 'like', "%$this->search2%")
                ->orWhere('date_of_birth', 'like', "%$this->search2%")
                ->orWhere('gender', 'like', "%$this->search2%")
                ->orWhere('contact_number', 'like', "%$this->search2%")
                ->orWhere('email', 'like', "%$this->search2%")
                ->orWhere('address', 'like', "%$this->search2%")
                ->orWhere('occupation', 'like', "%$this->search2%")
                ->orWhere('education_level', 'like', "%$this->search2%")
                ->orWhere('marital_status', 'like', "%$this->search2%")
                ->orWhere('created_at', 'like', "%$this->search2%")
                ->get();
        }


        if(trim($this->search2 == '')){
            $this->commodities = DB::table('commodities')
                ->get();
        }else{
            $this->commodities = DB::table('commodities')
                ->where('name', 'like', "%$this->search%")
                ->orWhere('price_per_kilo', 'like', "%$this->search%")
                ->orWhere('total_kilos', 'like', "%$this->search%")
                ->orWhere('Status', 'like', "%$this->search%")
                ->get();
        }

        //$this->application = Application::find(Session::get('release_process_id'));

        return view('livewire.releases.new-release');
    }
}
