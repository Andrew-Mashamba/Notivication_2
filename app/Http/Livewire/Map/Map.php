<?php

namespace App\Http\Livewire\Map;

use App\Models\Warehouse;
use App\Models\WarehouseTemp;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Map extends Component
{

    public $warehouseName;
    public $warehouseDescription;
    public $locationAddress;
    public $locationCoordinates;
    public $unique_id;
    public $warehouses;
    public $latitude;
    public $longitude;
    public $initialMarkers;
    public $locationUpdated;

    public $iso3166;
    public $amenity;
    public $city;
    public $country;
    public $country_code;
    public $postcode;
    public $region;
    public $road;
    public $suburb;
    public $ward;
    public $name;
    public $type;


    //protected $listeners = ['refreshComponent' => '$refresh'];

    public function updateLocation($lat, $lng)
    {
        $this->latitude = $lat;
        $this->longitude = $lng;
    }

    public function boot()
    {
        $this->unique_id = session('unique_id');
    }

    public function updated($warehouseName)
    {
        $this->emit('reinitializeMap');
    }


    public function setAddress($address)
    {
        $this->locationAddress = $address;
    }

    public function setCoordinates($coordinates)
    {
        $this->locationCoordinates = $coordinates;
    }





    protected $rules = [
        'warehouseName' => 'required|string|max:255',
        'warehouseDescription' => 'required|string|max:255',
        'locationAddress' => 'required|string|max:255',
        'locationCoordinates' => 'required|string|max:255',
        // Add other validation rules for fields
        'iso3166' => 'nullable|string|max:255',
        'amenity' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'country_code' => 'nullable|string|max:255',
        'postcode' => 'nullable|string|max:255',
        'region' => 'nullable|string|max:255',
        'road' => 'nullable|string|max:255',
        'suburb' => 'nullable|string|max:255',
        'ward' => 'nullable|string|max:255',
        'name' => 'nullable|string|max:255',
        'type' => 'nullable|string|max:255',
    ];

    public function registerWarehouse()
    {
        //$this->validate();
        //dd("gooz");
        WarehouseTemp::create([
            'unique_id' => Session::get("unique_id"),
            'warehouse_name' => $this->warehouseName,
            'warehouse_description' => $this->warehouseDescription,
            'location_address' => $this->locationAddress,
            'location_coordinates' => $this->locationCoordinates,
            // Add other fields here
            'iso3166' => $this->iso3166,
            'amenity' => $this->amenity,
            'city' => $this->city,
            'country' => $this->country,
            'country_code' => $this->country_code,
            'postcode' => $this->postcode,
            'region' => $this->region,
            'road' => $this->road,
            'suburb' => $this->suburb,
            'ward' => $this->ward,
            'name' => $this->name,
            'type' => $this->type,
        ]);

        // Optionally, reset the form fields after successful registration
        $this->reset();
        //$this->emit('refreshNewCm');
        //session()->flash('message', 'Warehouse registered successfully!');
    }






    public function render()
    {
        return view('livewire.map.map');
    }
}
