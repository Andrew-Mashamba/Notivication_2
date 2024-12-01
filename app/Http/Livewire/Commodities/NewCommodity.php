<?php

namespace App\Http\Livewire\Commodities;

use App\Models\approvals;
use App\Models\StockPrice;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\CommoditiesModel;
class NewCommodity extends Component
{



    public $price_per_kilo;
    public $name;
    public $Status = '';
    public $message;



    protected $rules = [
        'price_per_kilo' => 'required|string|max:255',
        'name' => 'required|email|max:255',
    ];

    public function saveClientInfo()
    {

        $id=CommoditiesModel::create([
            'price_per_kilo' => $this->price_per_kilo,
            'name' => $this->name,
            'unit' => $this->unit,
            'Status' => 'PENDING',
        ])->id;

        StockPrice::create([
            'stock_id' => $id,
            'price' => $this->price_per_kilo,
            'recorded_at' => now(),
        ]);

        approvals::updateOrCreate(
            [
                'process_id' => $id,
                'user_id' => auth()->user()->id,
                'process_name' => 'addCommodity',

            ],
            [
                'institution' => ' ',
                'process_name' => 'addCommodity',
                'process_description' => auth()->user()->name.' has added a commodity named - '.$this->name,
                'approval_process_description' => auth()->user()->name.' has added a commodity named - '.$this->name,
                'process_code' => '24',
                'process_id' => $id,
                'process_status' => 'PENDING',
                'approval_status' => 'PENDING',
                'user_id'  => Auth::user()->id,
                'team_id'  => '',
                'edit_package'=> null
            ]
        );


        $this->reset();

        $this->message ="Done, awaiting approval";
    }



    public function render()
    {
        return view('livewire.commodities.new-commodity');
    }
}
