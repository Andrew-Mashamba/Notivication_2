<?php

namespace App\Http\Livewire\Applications;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Application;
use App\Models\OffersModel;
;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;




class ViewApplication extends Component
{



    public $client_id;
    public $application_status;
    public $tenure = 1;
    public $loan_id;
    public $loan_amount;
    public $created_at;
    public $application;


    public $photo;

    public $client;

    public $isOpen;
    public $editKey;

    public $newValue;


    ////////////////////
    public $showDialog;

    public $currentStep = 1;
    public $userInfo;
    public $companyInfo;
    public $paymentInfo;

    public $futureInterest=false;

    public $collateral_type;
    public $collateral_description;
    public $daily_sales;
    public $loan;
    public $collateral_value;
    public $loan_sub_product;

    public $principle;
    public $member;


    public $guarantor;
    public $disbursement_account;
    public $collection_account_loan_interest;
    public $collection_account_loan_principle;
    public $collection_account_loan_charges;
    public $collection_account_loan_penalties;
    public $principle_min_value;
    public $principle_max_value;
    public $min_term;
    public $max_term;
    public $interest_value;
    public $principle_grace_period;
    public $interest_grace_period;
    public $amortization_method;
    public $days_in_a_month = 30;

    public $loan_account_number;

    public $member_number;
    public $topUpBoolena;
    public $new_principle;


    public $interest;
    public $business_licence_number;
    public $business_tin_number;
    public $business_inventory;
    public $cash_at_hand;

    public $cost_of_goods_sold;
    public $operating_expenses;
    public $monthly_taxes;
    public $other_expenses;
    public $monthly_sales;
    public $gross_profit;
    public $table;
    public $tablefooter;
    public $recommended_tenure;
    public $recommended_installment;
    public $recommended = false;
    public $business_age;
    public $bank1=123456;
    public  $available_funds;

    public $interest_method;
    public $future_interests;
    public $futureInsteresAmount;
    public $valueAmmount;

    public $make_and_model;
    public $purchase_price;
    ///////////////////////
    /// //////////////////

    public $message;



    public $firstRun = true;

    public $showDataLabels = false;

    public $data;
    public $comment;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'tenure' => 'required|string|max:255',
        'loan_amount' => 'required|email|max:255',
        'client_id' => 'required|string|max:255',
    ];

    public function boot()
    {



    }

    public function updatedSearch($value)
    {
        // Handle search logic here
        // You can filter $this->data['rows'] based on the search value
        // and update the Livewire property accordingly
    }


    public function refreshComponent()
    {
        $this->render();
    }


    public function saveCollateralManagerInfo()
    {
        //dd('44');
        //$this->validate();

        Application::create([
            'tenure' => $this->tenure,
            'loan_amount' => $this->EmailAddress,
            'client_id' => $this->client_id,
            'Status' => 'PENDING',
        ]);

        session()->flash('message', 'Collateral Manager created successfully.');

        $this->reset(); // Clear form fields after successful save
    }

    public function doubleClick($key)
    {
        $this->editKey = $key;
        $this->isOpen = true;
    }
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function saveChanges()
    {
        Application::where('id', $this->application->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }

    public function render()
    {


        $this->application = Application::find(Session::get('Application'));

        return view('livewire.applications.view-application');
    }



    function calc_payment($pv, $payno, $int, $accuracy)
    {
        if($pv){

        }else{
            $pv = 0;
        }

        if($int == 0){
            $int = 1;
        }

        //dd($pv, $payno, $int, $accuracy);

// now do the calculation using this formula:

//******************************************
//            INT * ((1 + INT) ** PAYNO)
// PMT = PV * --------------------------
//             ((1 + INT) ** PAYNO) - 1
//******************************************

        $int = $int / 100;    // convert to a percentage
        $value1 = $int * pow((1 + $int), $payno);
        $value2 = pow((1 + $int), $payno) - 1;
        $pmt = $pv * ($value1 / $value2);
// $accuracy specifies the number of decimal places required in the result
        $pmt = number_format($pmt, $accuracy, ".", "");

        return $pmt;

    } // calc_payment ====================================================================

    function print_schedule($balance, $rate, $payment)
    {


        $totPayment =0;
        $totInterest =0;
        $totPrincipal =0;
        $datalist = array();
        $count = 0;


        if($rate <=0){
            $rate=12;
        }

        if($balance){

        }else{
            $balance = 0;
        }
        if($payment > 0){

        }else{
            $payment = 0;
        }



        if($this->interest_method=="decline_balance"){
            while($balance > 0) {
                $count++;

                // calculate interest on outstanding balance
                $interest = $balance * $rate / 100;

                // what portion of payment applies to principal?
                $principal = $payment - $interest;

                // watch out for balance < payment
                if ($balance < $payment) {
                    $principal = $balance;
                    $payment = $interest + $principal;
                } // if

                // reduce balance by principal paid
                if($principal < 0 ){
                    $balance = 0;
                }else{
                    $balance = $balance - $principal;
                }


                // watch for rounding error that leaves a tiny balance
                if ($balance < 0) {
                    $principal = $principal + $balance;
                    $interest = $interest - $balance;
                    $balance = 0;
                } // if


//   dd($payment,$interest,$principal,$balance);

                $datalist[] = array(
                    "Payment" => $payment,
                    "Interest" => $interest,
                    "Principle" => $principal,
                    "balance" => $balance
                );




                @$totPayment = $totPayment + $payment;

                @$totInterest = $totInterest + $interest;

                @$totPrincipal = $totPrincipal + $principal;



                if ($payment < $interest) {

                } // if

            }

        }



        elseif($this->interest_method=="flat"){

            // calculate interest on outstanding balance
            $interest = $balance * $rate / 100;
            while($balance > 0) {

                $count++ ;

                // what portion of payment applies to principal?
                $principal = $payment - $interest;

                // watch out for balance < payment
                if ($balance < $payment) {
                    $principal = $balance;
                    $payment = $interest + $principal;
                } // if

                // reduce balance by principal paid
                if($principal < 0 ){
                    $balance = 0;
                }else{
                    $balance = $balance - $principal;
                }


                // watch for rounding error that leaves a tiny balance
                if ($balance < 0) {
                    $principal = $principal + $balance;
                    $interest = $interest - $balance;
                    $balance = 0;
                } // if


//   dd($payment,$interest,$principal,$balance);

                $datalist[] = array(
                    "Payment" => $payment,
                    "Interest" => $interest,
                    "Principle" => $principal,
                    "balance" => $balance
                );




                @$totPayment = $totPayment + $payment;

                @$totInterest = $totInterest + $interest;

                @$totPrincipal = $totPrincipal + $principal;



                if ($payment < $interest) {

                } // if

            }

        }



        $datalistfooter[] = array(
            "Payment" => $totPayment,
            "Interest" => $totInterest,
            "Principle" => $totPrincipal,
            "balance" => $balance
        );




        $this->table = $datalist;
        $this->tablefooter = $datalistfooter;
        $this->recommended_tenure = $count;
        $this->recommended_installment = $payment;


    } // print_schedule ==================================================================


    public function sendOffer()
    {

        $id= OffersModel::create([
            'application_id' => $this->application->id,
            'tenure' => $this->tenure,
            'principle' => $this->application->loan_amount,
            'client_id' => $this->client_id,
            'interest' => $this->interest_value,
            'interest_method' => $this->interest_method,
            'offer_status' => 'APPROVED',
        ])->id;

        session()->flash('message', 'Offer has  sent successfully.');

        //$this->tenure = null;
        //$this->application->loan_amount = null;
        //$this->client_id = null;
        //$this->interest_value = null;

    }

    public function rejectApplication()
    {

        $id= OffersModel::create([
            'application_id' => $this->application->id,
            'tenure' => $this->tenure,
            'principle' => $this->application->loan_amount,
            'client_id' => $this->client_id,
            'interest' => $this->interest_value,
            'interest_method' => $this->interest_method,
            'offer_status' => 'REJECTED',
        ])->id;

        //$this->tenure = null;
        //$this->application->loan_amount = null;
        //$this->client_id = null;
        //$this->interest_value = null;


    }




    public function approve()
    {

        Application::where('id', Session::get('Application'))->update([
            'application_status' => 'PENDING DISBURSEMENT',
            'approval_status' => 'APPROVED',
        ]);
        $this->moveForward();
        $this->message = "Action recorded";

    }

    public function return()
    {
        $application_status = Application::where('id', Session::get('Application'))->value('application_status');
        if($application_status ==  'UNDER REVIEW'){
            $status = "PENDING";
        }

        if($application_status ==  'PENDING'){
            $status = "PENDING";
        }

        if($application_status ==  'DISBURSED'){
            $status = "UNDER REVIEW";
        }

        if($application_status ==  'REJECTED'){
            $status = "PENDING";
        }
        if($application_status ==  'ARCHIVED'){
            $status = "PENDING";
        }
        if($application_status ==  'PENDING DISBURSEMENT'){
            $status = "UNDER REVIEW";
        }



        Application::where('id', Session::get('Application'))->update([
            'application_status' => $status,
            'approval_status' => 'PENDING',
        ]);
        $this->moveBackward();
        $this->message = "Action recorded";
    }

    public function reject()
    {
        Application::where('id', Session::get('Application'))->update([
            'application_status' => 'REJECTED',
            'approval_status' => 'REJECTED',
        ]);
        $this->moveBackward();
        $this->message = "Action recorded";
    }

    public function review()
    {
        Application::where('id', Session::get('Application'))->update([
            'application_status' => 'UNDER REVIEW',
            'approval_status' => 'PENDING',
        ]);

        $this->moveForward();

        $this->message = "Action recorded";
    }

    public function archive()
    {
        Application::where('id', Session::get('Application'))->update([
            'application_status' => 'ARCHIVED',
            'approval_status' => 'PENDING',
        ]);

        $this->message = "Action recorded";
    }

    public function disburse()
    {
        Application::where('id', Session::get('Application'))->update([
            'application_status' => 'DISBURSED',
            'approval_status' => 'COMPLETED',
        ]);

        //$this->moveForward();
        $this->message = "Action recorded";
    }


    public function moveForward(){
        $clientId = Session::get('Application');
        $this->client = Application::find($clientId);
        // Retrieve the current process and step from the client
        $processId = $this->client->process;
        $currentStep = $this->client->step;

        // Get the highest step for the current process
        $highestStep = DB::table('steps')
            ->where('process_id', $processId)
            ->max('step_number');

        // Check if the current step is the highest step
        if ($currentStep == $highestStep) {
            // Increment the process by one and set step to 1
            $nextProcessId = $processId + 1; // You may need to adjust this logic based on how you handle process IDs
            $nextStep = 1;


            if ($this->client) {

                $this->client->process = $nextProcessId;
                $this->client->step = $nextStep;

                $this->client->save();
            }

        } else {
            // Increment the current step by one
            $nextStep = $currentStep + 1;

            if ($this->client) {

                $this->client->step = $nextStep;

                $this->client->save();
            }
        }
    }


    public function moveBackward(){
        $clientId = Session::get('Application');
        $this->client = Application::find($clientId);
        // Retrieve the current process and step from the client
        $processId = $this->client->process;
        $currentStep = $this->client->step;

        // Get the lowest step for the current process
        $lowestStep = DB::table('steps')
            ->where('process_id', $processId)
            ->min('step_number');

        // Check if the current step is the lowest step
        if ($currentStep == $lowestStep) {
            // Decrement the process by one and set step to the highest step of the previous process
            $previousProcessId = $processId - 1; // You may need to adjust this logic based on how you handle process IDs

            // Check if there is a previous process
            $previousProcessExists = DB::table('steps')
                ->where('process_id', $previousProcessId)
                ->exists();

            if ($previousProcessExists) {
                $previousHighestStep = DB::table('steps')
                    ->where('process_id', $previousProcessId)
                    ->max('step_number');

                if ($this->client) {
                    $this->client->process = $previousProcessId;
                    $this->client->step = $previousHighestStep;

                    $this->client->save();
                }
            } else {
                // Handle the case where there is no previous process (optional)
            }
        } else {
            // Decrement the current step by one
            $previousStep = $currentStep - 1;

            if ($this->client) {
                $this->client->step = $previousStep;

                $this->client->save();
            }
        }
    }


    public function saveComment()
    {
        // Validate the input
        $this->validate([
            'comment' => 'required|string|max:1000',
        ]);

        // Save the comment to the database
        DB::table('comments')->insert([
            'application_id' => Session::get('Application'),
            'user_id' => Auth::user()->id,
            'comment_text' => $this->comment,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->comment = '';


    }


}
