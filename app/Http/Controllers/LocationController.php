<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function getDistricts($regionId)
    {
        $districts = DB::table('districts')
            ->where('region_id', $regionId)
            ->pluck('district_name', 'id');
        return response()->json($districts);
    }

    public function getWards($districtId)
    {
        $wards = DB::table('wards')
            ->where('district_id', $districtId)
            ->pluck('ward_name', 'id');
        return response()->json($wards);
    }
}
