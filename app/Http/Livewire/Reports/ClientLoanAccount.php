<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;
use App\Models\general_ledger;
use App\Models\StockModel;
use App\Models\ClientsModel;
use App\Models\LoansModel;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Farmers;


class ClientLoanAccount extends Component
{

    public $stocks=[];
    public $tableData=[];
    public $tableHeader=[];

    public $current_page=1;
    public $list_number=5;

    public $start_date;
    private $farmers;
    public $currentPage=1;

    public $last_range=3;
    public $end_date;

    public $order="DESC";

    public $sort=false;
    public $value;

    public $key_number;
    public $search;

    public $table_summary=[];

    protected $listerner=[
      'refresh'=>'$refresh'
    ];
    public function sortingColumn($value)
    {

        $this->sort=true;
        $value=json_decode($value);
        $this->value=$value[1];
        $this->key_number=(int)$value[0]-1;



    }


    public  function render()
{
        $this->last_range=(count(DB::table('farmers')->get()))/$this->list_number;

        if($this->last_range>1){
         $this->last_range=  ceil($this->last_range);
        }else{
            $this->last_range=1;
        }






    if($this->sort){

        if($this->search){
            $this->sort=false;
        }

        if($this->order=='desc'){
            $this->order='asc';
        }else{
            $this->order='desc';
        }
        $this->tableData=$this->sortArrayByKey($this->tableData, $this->value,$this->order,$this->key_number);


    }else{




    if($this->end_date && $this->start_date){
        $this->farmers=  DB::table('farmers')->whereBetween('created_at',[$this->start_date,$this->end_date])
//            ->orderBy('created_at',$this->order)
            ->get();
    }elseif($this->end_date){
        $this->farmers=  DB::table('farmers')->where('created_at',"<=","$this->end_date")
//            ->orderBy('created_at',$this->order)
            ->get();
    }elseif($this->start_date){
        $this->farmers=  DB::table('farmers')->where('created_at',">=","$this->start_date")
//            ->orderBy('created_at',$this->order)
            ->get();
    }else{
        $this->farmers=DB::table('farmers')
//            ->orderBy('created_at',$this->order)
            ->get();


    }

        if($this->search){
            $this->farmers=DB::table('farmers')->where('first_name','like','%'.$this->search.'%')->
            orWhere('last_name','like','%'.$this->search.'%')->get();
        }



    $main_array = [];
        $summary=[];
    $header=[];
    $i=1;
    foreach ($this->farmers as $key=> $farmer) {
        $iv = [];
        $iv[] = ["name"=>$farmer->first_name . ' ' . $farmer->last_name];

        if($i==1){
            $header[]="Name";
            $summary[]="Total";
        }


        $commodities = DB::table('commodities')->get();
        foreach ($commodities as  $commodity) {
            $iv[]=[
              $commodity->name=>   DB::table('stocks')
                  ->where('status', "ACTIVE")
                  ->where('client_id', $farmer->id)
                  ->where('commodity_id', $commodity->id)
//                ->orderBy('kilos', $this->order)
                  ->sum('kilos'),
            ];

            if($i==1) {
                $header[] = $commodity->name;
                $summary[]= DB::table('stocks')
                    ->where('status', "ACTIVE")->where('commodity_id', $commodity->id)->sum('kilos');
            }

        }

        $iv[] =["total"=> DB::table('stocks')
            ->where('status', "ACTIVE")
            ->where('client_id', $farmer->id)
            ->sum('kilos')];
        if($i==1){
            $header[]="Total";
            $summary[]= DB::table('stocks')
                ->where('status', "ACTIVE")->sum('kilos');
        }


        $main_array[] = $iv;


   $i++;


    }

// $main_array now contains only the third level of the nested structure
   $this->tableData=$main_array;
        $this->tableHeader=$header;
        $this->table_summary=$summary;

    }


    $this->tableData= $this->paginateArray($this->tableData, $this->list_number, $this->current_page);



//    $this->tableData= array_chunk($this->tableData, 10);
    return view('livewire.reports.client-loan-account');
}

function refresh()
{
    $this->sort=false;
    $this->start_date=null;
    $this->end_date=null;
    $this->list_number=5;
    $this->last_range=3;
    $this->current_page=1;
    $this->emit('refresh');
    $this->render();

}



    function paginateArray($array, $perPage, $currentPage)
    {
        $offset = ($currentPage - 1) * $perPage;
        return array_slice($array, $offset, $perPage);



    }

// Example usage

    function page($number)
    {
     $this->current_page=$number;
    }


    function sortArrayByKey($array, $key, $method ,$int) {


        usort($array, function($a, $b) use ($key, $method,$int) {
            $valueA = isset($a[$int][$key]) ? $a[$int][$key]: 0;
            $valueB = isset($b[$int][$key]) ? $b[$int][$key] : 0;




            if ($method == 'asc') {
                return $valueA <=> $valueB;
            } else {
                return $valueB <=> $valueA;
            }
        });

        return $array;
    }

// Example usage


public function exportExcel()
{

    return Excel::download(new Farmers($this->tableHeader,$this->tableData), 'farmers.xlsx');

    //dd($this->tableData,$this->tableHeader);

}



}
