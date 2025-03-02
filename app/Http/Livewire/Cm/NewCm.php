<?php

namespace App\Http\Livewire\Cm;

use App\Mail\BulkMail;
use App\Models\WarehouseTemp;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeRegisterMail;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\CollateralManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewCm extends Component
{

    public $CMNumber;
    public $EmailAddress;
    public $FirstName;
    public $LastName;
    public $region;
    public $ward;
    public $district;
    public $Address;
    public $City;
    public $Country;
    public $PostalCode;
    public $canAddFarmers = false;
    public $canInitiateLoan = false;
    public $canSetPrices = false;
    public $WarehouseLocation = '';
    public $BusinessName;
    public $BusinessLicenceNumber;
    public $TINNumber;
    public $BusinessPhoneNumber;
    public $description;

    public $photo;
    public $warehouses;
    public $District;
    public $Ward;
    public $unique_id;
    public $PhoneNumber;



    protected $listeners = ['refreshComponent' => '$refresh'];
    //protected $listeners = ['refreshNewCm' => 'refreshComponent'];

    public function refreshComponent()
    {

    }



    protected $rules = [
        'CMNumber' => 'required|string|max:255',
        'EmailAddress' => 'required|email|max:255',
        'FirstName' => 'required|string|max:255',
        'LastName' => 'required|string|max:255',
        'Address' => 'required|string|max:255',
        'City' => 'required|string|max:255',
        'Country' => 'required|string|max:255',
        'PostalCode' => 'required|string|max:255',
        'WarehouseLocation' => 'url|nullable',
        'canAddFarmers' => 'boolean',
        'canInitiateLoan' => 'boolean',
        'canSetPrices' => 'boolean',
        'BusinessName' => 'required|string|max:255',
        'BusinessLicenceNumber' => 'required|string|max:255',
        'TINNumber' => 'required|string|max:255',
        'BusinessPhoneNumber' => 'required|string|max:255',
    ];

    public function mount(){
        $this->unique_id =  str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        Session::put("unique_id",$this->unique_id);
        $this->CMNumber = Session::get("unique_id");
    }

    public function saveCollateralManagerInfo()
    {
        //dd('44');
        //$this->validate();

     $id=   CollateralManager::create([
            'CMNumber' => $this->CMNumber,
            'EmailAddress' => $this->EmailAddress,
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName,
            'Address' => $this->Address,
            'City' => $this->City,
            'Country' => "Tanzania",
            'District' => $this->District,
            'Status' => 'PENDING',
            'WarehouseLocation' => $this->WarehouseLocation,
            'canAddFarmers' => $this->canAddFarmers,
            'canInitiateLoan' => $this->canInitiateLoan,
            'canSetPrices' => $this->canSetPrices,
            'ward'=>$this->ward,
            'description'=>$this->description,
            //'photo' => $this->photo->store('photos', 'public'), // Store the photo and save the path
            'BusinessName' => $this->BusinessName,
            'BusinessLicenceNumber' => $this->BusinessLicenceNumber,
            'TINNumber' => $this->TINNumber,
            'BusinessPhoneNumber' => $this->BusinessPhoneNumber,
            'PhoneNumber' => $this->PhoneNumber,
        ])->id;


        // Define the new unique_id or any other attributes to update
        $newUniqueId = $id; // Replace with the actual value you want to use
        $currentUniqueId = Session::get("unique_id");



        $updatedRows = WarehouseTemp::where('unique_id', $currentUniqueId)
            ->update(['unique_id' => $newUniqueId]);

        //dd($updatedRows);

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = substr(str_shuffle($characters), 0, 8);

        // create user (collateral manager)
        DB::table('users')->insert([
            'name'=>$this->FirstName,
            'email'=>$this->EmailAddress,
            'status'=>'ACTIVE',
             'password'=>Hash::make($password),
             'collateral_manager_id'=>$id,
            'role'=>11,
            'department'=>1,
            'branch'=>Auth::user()->branch,
        ]);

       // Mail::to($this->EmailAddress)->send( );
        $user_email=$this->EmailAddress;
        $name=$this->FirstName;




        Mail::to($this->EmailAddress)->send(new EmployeeRegisterMail($user_email,$name,$password ));



        session()->flash('message', 'Collateral Manager created successfully.');


        $this->reset(); // Clear form fields after successful save
    }


    public function registerWarehouse()
    {
        $this->validate([
            'warehouseName' => 'required|string|max:255',
            'warehouseDescription' => 'required|string|max:1000',
            'locationAddress' => 'required|string|max:255',
            'locationCoordinates' => 'required|string',
        ]);

        $inserted = DB::table('warehouses_temp')->insert([
            'unique_id' => $this->unique_id,
            'warehouse_name' => $this->warehouseName,
            'warehouse_description' => $this->warehouseDescription,
            'location_address' => $this->locationAddress,
            'location_coordinates' => $this->locationCoordinates,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Save the warehouse data to the database or perform other actions

        $this->warehouses = DB::table('warehouses_temp')->where('unique_id',$this->unique_id)->get();

        session()->flash('message', 'Warehouse registered successfully.');
    }


    public function triggerJavascript()
    {
        $this->dispatchBrowserEvent('custom-event', ['message' => 'Hello from Livewire!']);
    }

    public function render()
    {
        $this->triggerJavascript();
        return view('livewire.cm.new-cm');
    }
}
