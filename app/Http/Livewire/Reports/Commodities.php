<?php

namespace App\Http\Livewire\Reports;

use App\Models\Commodity;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Commodities extends LivewireDatatable
{
    public function builder()
    {
        return Commodity::query()
            //->leftJoin('farmers', 'commodities.farmer_id', '=', 'farmers.id')
            //->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            //->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            //->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'commodities.id', '=', 'stocks.commodity_id')
            ->select(
                'commodities.id as commodity_id',
                'commodities.name as commodity_name',
                'commodities.unit',
                'stocks.kilos as stock_quantity',
                'stocks.price_per_kilo as stock_price_per_kilo'
            );
    }

    public function columns()
    {
        return [
            Column::name('commodities.name')
                ->label('Commodity Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('commodities.unit')
                ->label('Unit')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.kilos')
                ->label('Stock Quantity')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.price_per_kilo ')
                ->label('Price Per Unity')
                ->searchable()
                ->hideable()
                ->filterable(),
        ];
    }
}
