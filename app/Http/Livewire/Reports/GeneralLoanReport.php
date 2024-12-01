<?php

namespace App\Http\Livewire\Reports;

use App\Models\BranchesModel;
use App\Models\CommoditiesModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GeneralLoanReport extends LivewireDatatable
{

    public $exportable=true;
    public $branchId;


    protected $listeners=['changeBranch'=>'updateBranch'];



    public function updateBranch($id){
        $this->branchId=$id;

    }





    public function builder()
    {
        $query=CommoditiesModel::query();





  return $query;
    }



    public function columns()
    {
        return [
            column::name('name')->label('commodity name')->searchable(),
            column::callback(['name','id'],
            function ($name,$id){
                $tatal_stock=DB::table('stocks')->where('commodity_id',$id)->where('status','ACTIVE')->sum('kilos');
                return $tatal_stock;
            }
            )->label('Total kilos'),

            column::callback(['id'],
            function ($id){
                $tatal_stock= DB::table('stocks')->where('commodity_id',$id)->where('status','ACTIVE')->sum(DB::raw('kilos * price_per_kilo'));
//                   $va1=  DB::table('stocks')->where('commodity_id',$id)->where('status','ACTIVE')->sum(DB::raw('kilos * price_per_kilo'));
//                    $var2=DB::table('stocks')->where('commodity_id',$id)->where('status','ACTIVE')->sum(DB::raw('kilos * price_per_kilo'));
//
                return number_format($tatal_stock,2);
            }
            )->label('Total Value (TZS)'),

            column::callback(['created_at','id'],
            function ($created_at,$id){

                //get district location
                $ward_location = DB::table('stocks')
                    ->where('commodity_id', $id)
                    ->where('status', 'ACTIVE')
                    ->select('ward_location','commodity_id')
                    ->distinct()->get()->toArray();;

               // dd($ward_location);
                $result = [];

// Iterate over the collection and extract the values
                foreach ($ward_location as $location) {
                    $result[] = [
                        'ward_location' => $location->ward_location,
                        'commodity_id' => $location->commodity_id,
                    ];
                     }

              //  dd($result);
                return view('livewire.reports.commodity-allocation',['values'=>$result]);

            }
            )->label('summary'),


        ];

        // TODO: Change the autogenerated stub
    }
}