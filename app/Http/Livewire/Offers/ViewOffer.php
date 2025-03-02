<?php

namespace App\Http\Livewire\Offers;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\OffersModel;
use App\Charts\commodities;


use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;




class ViewOffer extends Component
{


    public $principle;
    public $interest;
    public $offer_status = '';


    public $tenure;

    public $client;

    public $isOpen;
    public $editKey;

    public $newValue;

    public $table;


    public $types = ['APPROVED', 'REJECTED','DECLINED','ACCEPTED'];

    public $colors = [
        'APPROVED' => '#f6ad55',
        'REJECTED' => '#fc8181',
        'DECLINED' => '#f6ad55',
        'ACCEPTED' => '#fc8181',
    ];
    public $firstRun = true;

    public $showDataLabels = false;

    public $data;

    public $offer;
    public $interest_method;


    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
        'refreshComponent',
    ];



    protected $rules = [
        'price_per_kilo' => 'required|string|max:255',
        'name' => 'required|email|max:255',
    ];

    public function boot()
    {
        // Initialization for ES Users
        $this->data = [
            'columns' => [
                ['label' => 'Name', 'field' => 'name'],
                'Position',
                'Office',
                'Age',
                'Start date',
                'Salary',
            ],
            'rows' => [
                ["Tiger Nixon", "System Architect", "Edinburgh", "61", "2011/04/25", "$320,800"],
                ["Garrett Winters", "Accountant", "Tokyo", "63", "2011/07/25", "$170,750"],
                ["Ashton Cox", "Junior Technical Author", "San Francisco", "66", "2009/01/12", "$86,000"],
                ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "22", "2012/03/29", "$433,060"],
                // ... (remaining rows)
            ],
        ];
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
        OffersModel::where('id', $this->offer->id) // Replace $collateralManagerId with the actual ID of the record you want to update
        ->update([
            $this->editKey => $this->newValue,
        ]);

        $this->closeModal();
    }

    public function render()
    {
        $columnChartModel =
            (new ColumnChartModel())
                ->setTitle('Expenses by Type')
                ->addColumn('Food', 100, '#f6ad55')
                ->addColumn('Shopping', 200, '#fc8181')
                ->addColumn('Travel', 300, '#90cdf4')
        ;


        $expenses = OffersModel::get();
        $pieChartModel = $expenses->groupBy('offer_status')
            ->reduce(function ($pieChartModel, $data) {
                $type = $data->first()->offer_status;
                $value = $data->sum('id');

                return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
            }, LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->setType('donut')
                ->withOnSliceClickEvent('onSliceClick')
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
            );


        $this->offer = OffersModel::find(Session::get('Offer'));

        $interest = $this->offer->interest;
        $this->principle = $this->offer->principle;
        $this->tenure = $this->offer->tenure;
        $this->interest_method = $this->offer->interest_method;

        $payment = $this->calc_payment($this->principle, $this->tenure, $interest, 2);
        $this->print_schedule($this->principle, $interest, $payment);



        return view('livewire.offers.view-offer')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel,
            ]);
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


    public function acceptOffer()
    {

        // Retrieve the existing record based on some condition, for example, by its ID
        $offer = OffersModel::where('id', $this->offer->id)->first();

// Check if the offer exists
        if ($offer) {

            $offer->offer_status = 'ACCEPTED';

            // Save the changes
            $offer->save();
        }

        session()->flash('message', 'Process Completed');
        //$this->tenure = null;
        //$this->application->loan_amount = null;
        //$this->client_id = null;
        //$this->interest_value = null;

    }

    public function declineApplication()
    {

        // Retrieve the existing record based on some condition, for example, by its ID
        $offer = OffersModel::where('id', $this->offer->id)->first();

// Check if the offer exists
        if ($offer) {

            $offer->offer_status = 'DECLINED';

            // Save the changes
            $offer->save();
        }


        //$this->tenure = null;
        //$this->application->loan_amount = null;
        //$this->client_id = null;
        //$this->interest_value = null;


    }


}
