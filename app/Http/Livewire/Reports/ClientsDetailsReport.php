<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;
use App\Models\approvals;
use App\Exports\CollateralReport;
use App\Models\ClientsModel;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MainReport;
use App\Exports\LoanSchedule;
use App\Exports\ContractData;
use Illuminate\Support\Facades\DB;



class ClientsDetailsReport extends Component
{



    public $client_type="ALL";
    public $custome_client_number;

    public $collateral_managers;
    public $selected=[];
    public $farmers;
    public $search;
    public $start_date;
    public $end_date;
    //public $collateralManagers;
    public $commodities;
    public $collateralManagers;





    public function downloadExcelFile()
    {
        if ($this->client_type == "MULTIPLE") {

            $input = $this->custome_client_number;
            // Remove the trailing comma if it exists
            $input = rtrim($input, ',');

            // Split the input string into an array of numbers using comma as the delimiter
            $numbers = explode(',', $input);

            // Iterate through the array and process each number
            foreach ($numbers as $number) {
                // Trim any whitespace from the number
                $number = trim($number);

                // Convert the number to an integer (optional, depending on your use case)
                $number = intval($number);


                // Do something with the individual number, for example, print it
                if (LoansModel::where('client_number', $number)->exists()) {
                    $array[] = ['number' => str_pad($number, 4, 0, STR_PAD_LEFT)];
                } else {

                }


            }

           // $LoanId = LoansModel::whereBetween('created_at', [$this->reportStartDate, $this->reportEndDate])->whereIn('client_number', $array)->pluck('id');

            $LoanId = LoansModel::whereIn('client_number', $array)->pluck('id');

            return Excel::download(new MainReport($LoanId), 'generalReport.xlsx');

        } else {


            $loanId=LoansModel::get()->pluck('id')->toArray();


            return Excel::download(new MainReport($loanId), 'generalReport.xlsx');

              }

    }

    public function export()
    {
        $array=null;
        if($this->selected){
          $array=   $this->selected;
          $this->selected=null;
        }
     return Excel::download( new  CollateralReport($array), 'collateralReport.xlsx');
    }


    public function render()
    {
        $collateral_manager_id=DB::table('stocks')->where('status','ACTIVE')->distinct('collateral_manager_id')->pluck('collateral_manager_id')->toArray();


        $this->collateral_managers=DB::table('collateral_managers')->whereIn('id',$collateral_manager_id)->get();


        if($this->end_date && $this->start_date) {
            $this->collateral_managers=DB::table('collateral_managers')->whereIn('id',$collateral_manager_id)->whereBetween('created_at',[$this->start_date,$this->end_date])->get();

        }elseif($this->start_date){
            $this->collateral_managers=DB::table('collateral_managers')->whereIn('id',$collateral_manager_id)->where('created_at','>=',$this->start_date)->get();

        }else if($this->end_date){
            $this->collateral_managers=DB::table('collateral_managers')->whereIn('id',$collateral_manager_id)->where('created_at','<=',$this->end_date)->get();

        }


        if($this->search){

        $this->collateral_managers=DB::table('collateral_managers')->where('FirstName','like','%'.$this->search.'%')
            ->orWhere('LastName','like','%'.$this->search.'%')
            ->get();

        }


        //$this->collateralManagers = DB::table('collateral_managers')->paginate(10);
       // dd($this->collateralManagers);
        $this->commodities = DB::table('commodities')->get();



        return view('livewire.reports.clients-details-report');
    }
}
