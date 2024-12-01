<?php

namespace App\Http\Controllers;

use App\Models\WarehouseTemp;
use Illuminate\Http\Request;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Session;

class WarehouseController extends Controller
{
    public function store(Request $request)
    {
//        $request->validate([
//            'warehouseName' => 'required|string|max:255',
//            'warehouseDescription' => 'required|string',
//            'locationAddress' => 'required|string',
//            'locationCoordinates' => 'required|string',
//            'iso3166' => 'required|string',
//            'amenity' => 'nullable|string',
//            'city' => 'required|string',
//            'country' => 'required|string',
//            'country_code' => 'required|string',
//            'postcode' => 'required|string',
//            'region' => 'required|string',
//            'road' => 'nullable|string',
//            'suburb' => 'nullable|string',
//            'ward' => 'nullable|string',
//            'name' => 'required|string',
//            'type' => 'required|string',
//        ]);

        WarehouseTemp::create([
            'unique_id' => $request->unique_id,
            'warehouse_name' => $request->warehouseName,
            'warehouse_description' => $request->warehouseDescription,
            'location_address' => $request->locationAddress,
            'location_coordinates' => $request->locationCoordinates,
            'iso3166' => $request->iso3166,
            'amenity' => $request->amenity,
            'city' => $request->city,
            'country' => $request->country,
            'country_code' => $request->country_code,
            'postcode' => $request->postcode,
            'region' => $request->region,
            'road' => $request->road,
            'suburb' => $request->suburb,
            'ward' => $request->ward,
            'name' => $request->name,
            'type' => $request->type,
        ]);

        return response()->json(['message' => 'Warehouse registered successfully.'], 200);
    }


    public function getWarehouses()
    {
        $warehouses = WarehouseTemp::where('unique_id',Session::get("unique_id"))->get(); // Adjust as needed
        return response()->json($warehouses);
    }
}
