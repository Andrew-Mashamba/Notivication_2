<?php

namespace App\Http\Livewire\Reports;

use App\Models\general_ledger;
use App\Models\ClientsModel;
use App\Models\StockFlows;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GeneralReport extends LivewireDatatable
{
    public $exportable = true;
    public $start_date_value;
    public $title;
    public $value;

    public $listeners=[
        'category'=>'reportCategory',
        'get-start-date'=>'builder',
        'sortByBranchChanged'=>'sortByBranchChanged'
    ];

//    public function startDate($startDate){
//      $this->start_date_value= $startDate;
//    }
    public $sortByBranch;


    public function sortByBranchChanged($value)
    {
        $this->sortByBranch = $value;
        session()->put('sortingBranch', $this->sortByBranch);

    }


  public function reportCategory($selectedNumber){
    $this->value=$selectedNumber;
  }

    public function builder()
    {

       $query=array();


                $query= StockFlows::query();


        return $query;

    }


    public function columns(): array
    {

        $table_data=[
            Column::name('created_at')
                ->label('Date')->searchable(),

            Column::callback(['collateral_manager_id'],function ($id){

              $name=  DB::table('collateral_managers')->where('id',$id)->selectRaw("CONCAT(FirstName, ' ', LastName) as name ")->value('name');
            return $name;

            })
                ->label('collateral Manager')->searchable(),
            Column::callback('ward_id',function ($location){
                $wards=DB::table('Wards')->where('id',$location)->first();
                if($wards){
                    $ward_name=$wards->ward_name;
                    $districts=DB::table('districts')->where('id',$wards->district_id)->first();
                    $district_name=$districts->district_name;
                    $region_name=DB::table('regions')->where('id',$districts->region_id)->value('region_name');
                    return $region_name.'('.$district_name.' ,'.$ward_name.')';
                }else{
                    return null;
                }


            })->label('location')->searchable(),

            Column::callback('farmer_id',function ($farmer_id){
             $farmer_name=   DB::table('farmers')->where('id',$farmer_id)->selectRaw("CONCAT(first_name,' ',last_name) as name")->value('name');
              return $farmer_name;
            })->label('Farmer')->searchable(),

            Column::name('inn_kilos')
                ->label('Stock Received'),
            Column::name('out_kilos')
                ->label('Released  Stocks'),

            Column::callback(['commodit_id'],function ($id){
                $commodity_name=DB::table('commodities')->where('id',$id)->value('name');

                return $commodity_name;
            })->label('commodity'),

            Column::callback(['stock_id','id'],function ($stock_id,$id){
                $total_value = DB::table('stocks')
                    ->where('id', $stock_id)
                    ->sum(DB::raw('kilos * price_per_kilo'));
            })
                ->label('total value '),

             Column::name('desriptions')
                ->label('desriptions '),



        ];

        return $table_data;



    }

}
