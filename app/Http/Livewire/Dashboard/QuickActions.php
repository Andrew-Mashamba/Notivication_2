<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\approvals;
use App\Models\User;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeRegisterMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use mysql_xdevapi\Exception;
//use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

class QuickActions extends Component
{
    public $users;
    public $search = '';
    public $isOpen = false; // Add this property
    public $isOpena;
    public $isOpen2 = false; // Add this property
    public $isOpen2a = false; // Add this property
    public $user;
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
    public $ok = false;

    public $qrCodeUrl;







    public function acknowledge($id)
    {

        DB::table('releases')
            ->where('id', $id)
            ->update([
                'Status' => 'COLLATERAL RELEASED',
            ]);
        $application_id = DB::table('releases')->where('id',$id)->value('application_id');

        // closed status means  stock has been released and contract  terminated
        DB::table('stocks')->where('id',$application_id)->update([
           'status'=>"RELEASED"
        ]);



        // Flash success message to session
        Session::flash('AcknowledgeRelease', 'Collateral released successfully..');
        $this->render();
    }

    public function loadView($var)
    {


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

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function closeDropdown($id)
    {
        //dd($id);
        $this->user = $id;
        $this->clientName = DB::table('farmers')->where('id',$this->user)->value('first_name').' '.
            DB::table('farmers')->where('id',$this->user)->value('last_name');
        $this->isOpen = false;
    }


    public function toggleDropdown2()
    {
        //dd();
        $this->isOpen2 = !$this->isOpen2;
    }

    public function closeDropdown2($id)
    {
        $this->stocks = null;
        $this->commodity = $id;
        $this->commodityName = DB::table('commodities')->where('id',$this->commodity)->value('name');
        $this->isOpen2 = false;

        $this->stocks = DB::table('stocks')
            ->select('id', 'commodity_id', 'client_id', 'kilos', 'value', 'pledged_kilos', 'available_kilos')
            ->where('client_id', $this->user)
            ->where('commodity_id', $this->commodity)
            ->get();
    }

    public function Register()
    {
        //dd('xx');
        // validate if is collateral manager
        $collateral_manager_id=auth()->user()->collateral_manager_id;// after validatn you will have the collateral id to check


        //insert data
     $id = DB::table('stocks')->insertGetId([
            'commodity_id'=>$this->commodity,
             'client_id'=>$this->user,
             'kilos'=>$this->kilos,
             'price_per_kilo'=> DB::table('commodities')->where('id',$this->commodity)->value('price_per_kilo'),
             'collateral_manager_id'=>$collateral_manager_id,
             'warehouse'=>$this->warehouses_temp,
             'status'=>'PENDING',
             'ward_location'=>$this->ward,
             'warehouses_temp'=>$this->warehouses_temp,
             'unit'=> DB::table('commodities')->where('id',$this->commodity)->value('unit'),
        ]);

     if($id){


         approvals::updateOrCreate(
             [
                 'process_id' => $id,
                 'user_id' => auth()->user()->id,
                 'process_name' => 'registerStock',

             ],
             [
                 'institution' => ' ',
                 'process_name' => 'registerStock',
                 'process_description' => 'Collateral Manager - '.auth()->user()->name.' has registered new stock of '.
                     DB::table('commodities')->where('id',$this->commodity)->value('name'),
                 'approval_process_description' => 'has approved this action',
                 'process_code' => '24',
                 'process_id' => $id,
                 'process_status' => 'PENDING',
                 'approval_status' => 'PENDING',
                 'user_id'  => Auth::user()->id,
                 'team_id'  => '',
                 'edit_package'=> null
             ]
         );

//
//         DB::table('stock_flows')->insert([
//             'inn_kilos'=>$this->kilos,
//             'out_kilos'=>0,
//             'commodit_id'=>$this->commodity,
//             'ward_id'=>$this->ward,
//             'stock_id'=>$id,
//             'farmer_id'=>$this->user,
//             'desriptions'=>'register new stocks',
//             'action_name'=>'stock storage',
//             'collateral_manager_id'=>$collateral_manager_id,
//         ]);



         // Flash success message to session
         Session::flash('RegisterStockSuccess', 'Stock was successfully registered.');
         // Clear input variables

         // email to collateral manager and customer

//         Mail::to($this->email)->send(
//             new EmployeeRegisterMail($user_email,$name,$password,$message));



         $this->user = null;
         $this->price_per_kilo = null;
         $this->collateral_manager_id = null;
         $this->status = null;
         $this->ward = null;
         $this->warehouses_temp = null;
         $this->commodity = null;
         $this->kilos = null;
     }

     else{


         Session::flash('RegisterStockError', 'An error occurred while registering the stock.');

     }


    }




    public function toggleDropdowna()
    {
        $this->isOpena = !$this->isOpena;
    }

   public function toggleDropdown3()
    {
        $this->isOpen3 = !$this->isOpen3;
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

    public function closeDropdown3($id)
    {
        //dd($id);
        $this->user3 = $id;
        $this->clientName3 = DB::table('farmers')->where('id',$this->user3)->value('first_name').' '.
            DB::table('farmers')->where('id',$this->user3)->value('last_name');
        $this->isOpen3 = false;

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


        return view('livewire.dashboard.quick-actions');
    }
}
