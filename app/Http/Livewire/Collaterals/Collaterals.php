<?php

namespace App\Http\Livewire\Collaterals;

use App\Models\ClientsModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Collaterals extends Component
{


    public $firstRun = true;

    public $showDataLabels = false;

    public $data;

    public $applicationSummary;
    public $commodityValues1 = [];

    public $commodity_id;
    public $client_id;
    public $kilos;
    public $price_per_kilo;
    public $collateral_manager_id;
    public $status;

    public $ward_location;
    public $warehouses_temp;
    public $unit;
    public $commodityValues2;




    public function mount()
    {
        $this->applicationSummary = [
            'Total' => DB::table('stocks')->count(),
            'Pending' => DB::table('stocks')->where('status', 'PENDING')->count(),
            'Active' => DB::table('stocks')->where('status', 'ACTIVE')->count(),
            'Released' => DB::table('stocks')->where('status', 'RELEASED')->count(),
        ];

        // Fetch all commodities
        $commodities = DB::table('collateral_managers')->get();

        // Initialize an array to store commodity values


        // Loop through each commodity and calculate the total value
        foreach ($commodities as $commodity) {
            $totalValue = DB::table('stocks')
                ->where('collateral_manager_id', $commodity->id)
                ->select(DB::raw('SUM(kilos * price_per_kilo) as total'))
                ->value('total');
                //->count();

            // Add the commodity name and total value to the array
            $this->commodityValues2[] = [
                'name' => $commodity->BusinessName,
                'value' => $totalValue
            ];
        }
    }



    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = DB::table('stocks')->get();

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'commodity_id' => $client->commodity_id,
                'client_id' => $client->client_id,
                'kilos' => $client->kilos,
                'price_per_kilo' => $client->price_per_kilo,
                'collateral_manager_id' => $client->collateral_manager_id,
                'status' => $client->status,

                'ward_location' => $client->ward_location,
                'warehouses_temp' => $client->warehouses_temp,
                'unit' => $client->unit,

            ];
        }


    }



    public function render()
    {
        return view('livewire.collaterals.collaterals');
    }
}
