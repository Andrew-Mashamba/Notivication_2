<?php

namespace App\Http\Livewire\BudgetManagement;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\BudgetManagement;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class BudgetItemTable extends LivewireDatatable
{

    public $exportable=true;



    public function builder()
    {
        return BudgetManagement::query();
        // TODO: Change the autogenerated stub
    }


    public function Columns(){

        return [
            Column::name('id')->label('id'),
            Column::name('revenue')->label('revenue')->searchable()->editable(),
            Column::name('budget_name')->label('budget name')->sortable(),
            Column::name('capital_expenditure')->label('capital expenditure '),
            Column::name('status')->label('status')->additionalSelects('id'),

            Column::callback(['status','id'], function ($status,$id){
                return "$status".$id;
            })->label('ACTION'),

            ];
    }

}