<?php

namespace App\Http\Livewire\Offers;

use Livewire\Component;


use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\MultiLineChartModel;
use Asantibanez\LivewireCharts\Models\MultiColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use App\Models\OffersModel;


class Dashboard extends Component
{


    public $types = ['PLEDGED','AVAILABLE','COLLATERAL RELEASE REQUESTED','ACTIVE', 'NEW CLIENT','APPROVED', 'REJECTED','PENDING','ACCEPTED','RELEASED','DECLINED','COLLATERAL RELEASED'];

    public $colors = [
        'APPROVED' => '#003300',
        'REJECTED' => '#004c00',
        'PENDING' => '#006600',
        'ACCEPTED' => '#005AA9',
        'RELEASED' => '#33cc33',
        'DECLINED' => '#66ff66',
        'COLLATERAL RELEASED' => '#99ff99',
        'ACTIVE' => '#003300',
        'NEW CLIENT' => '#004c00',
        'COLLATERAL RELEASE REQUESTED' => '#006600',
        'PLEDGED' => '#005AA9',
        'AVAILABLE' => '#004c00',
    ];

    public $firstRun = true;

    public $showDataLabels = false;

    public $data;


    public function boot()
    {
        // Retrieve data from the CollateralManager table
        $clients = OffersModel::all();

        // Initialize data array
        $this->data = [
            'columns' => [
                ['label' => 'principle', 'field' => 'principle'],
                ['label' => 'interest', 'field' => 'interest'],
                ['label' => 'offer_status', 'field' => 'offer_status'],
                ['label' => 'tenure', 'field' => 'tenure'],
            ],
            'rows' => [],
        ];

        // Populate rows array with data from CollateralManager model
        foreach ($clients as $client) {
            $this->data['rows'][] = [
                'principle' => $client->principle,
                'interest' => $client->interest,
                'offer_status' => $client->offer_status,
                'tenure' => $client->tenure,
            ];
        }
    }



    public function render()
    {


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
                ->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setColors(['#DD0035', '#005AA9', '#DD0035', '#005AA9']) // Additional customization using Apex chart properties
            );





        return view('livewire.offers.dashboard')
            ->with([
                'pieChartModel' => $pieChartModel,
            ]);
    }
}
