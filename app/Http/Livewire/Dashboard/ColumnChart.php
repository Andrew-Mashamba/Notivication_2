<?php

namespace App\Http\Livewire\Dashboard;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class ColumnChart extends Component
{
    public $changeChat=false;

    protected $listeners=[
      'changeGraph'=>'changeGraphContent'
    ];


  public  function changeGraphContent()
    {
        dd('pass');
    }
    public function render()
    {

        $commoditiesChartModel = (new ColumnChartModel())
            ->setTitle('Kilograms')
            ->withOnColumnClickEventName('onColumnClick');

        $commodities = DB::table('commodities')->get();

        foreach ($commodities as $commodity) {

            if($this->changeChat){

                $pledgedKilos=  DB::table('stocks')->where('commodity_id', $commodity->id)->where('status', 'ACTIVE')->selectRaw('SUM(kilos * price_per_kilo) as total_value')->value('total_value');

            }else{
                $pledgedKilos = DB::table('stocks')->where('commodity_id', $commodity->id)->sum('kilos');

            }

            if($commodity->id == 7){
                //dd($commodity->name,$pledgedKilos);
            }

            if($this->changeChat) {
                $commoditiesChartModel->addColumn( " Total Value of".$commodity->name, $pledgedKilos, '#4682B4'); // Use a color based on the commodity name


            }else{
                $commoditiesChartModel->addColumn($commodity->name, $pledgedKilos, '#005AA9'); // Use a color based on the commodity name

            }

        }


        return view('livewire.dashboard.column-chart')->with([ 'commoditiesChartModel' => $commoditiesChartModel]);
    }
}
