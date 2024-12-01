<?php

namespace App\Http\Livewire\Reports;

use App\Models\Stock;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Stocks extends LivewireDatatable
{
    public function builder()
    {
        //commodity_id
        return Stock::query()
            ->leftJoin('commodities', 'stocks.commodity_id', '=', 'commodities.id')
            ->leftJoin('farmers', 'stocks.client_id', '=', 'farmers.id')
            ->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->select(
                'commodities.name as name',
                'stocks.id as stock_id',
                'stocks.kilos',
                'stocks.value',
                'stocks.pledged_kilos',
                'stocks.available_kilos',
                'stocks.price_per_kilo',
                'stocks.status',
                'farmers.first_name as farmer_first_name',
                'farmers.last_name as farmer_last_name',
                'applications.application_status',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'branches.name as branch_name',
                'stocks.created_at'
            );
    }

    public function columns()
    {
        return [
            Column::name('commodities.name')
                ->label('Stock Type')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.kilos')
                ->label('Kilos')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.price_per_kilo')
                ->label('Price per Kilo')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.status')
                ->label('Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.first_name')
                ->label('Farmer First Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.last_name')
                ->label('Farmer Last Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.application_status')
                ->label('Application Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.FirstName')
                ->label('Collateral Manager First Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.LastName')
                ->label('Collateral Manager Last Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('branches.name')
                ->label('Branch Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.created_at')
                ->label('Date Created')
                ->searchable()
                ->filterable()
                ->sortBy('stocks.created_at')
        ];
    }
}
