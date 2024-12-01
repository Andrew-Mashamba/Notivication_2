<?php

namespace App\Http\Livewire\Reports;

use App\Models\Farmer;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class General extends LivewireDatatable
{
    public function builder()
    {
        return Farmer::query()
            ->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'farmers.id', '=', 'stocks.client_id')
            ->leftJoin('commodities', 'stocks.commodity_id', '=', 'commodities.id')
            ->leftJoin('releases', 'applications.id', '=', 'releases.application_id')
            ->select(
                'farmers.id as farmer_id',
                'farmers.first_name',
                'farmers.last_name',
                'applications.id as application_id',
                'applications.application_status',
                'applications.approval_status',
                'applications.tenure',
                'applications.loan_id',
                'applications.loan_amount',
                'applications.interest',
                'applications.created_at as application_created_at',
                'applications.updated_at as application_updated_at',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'branches.name as branch_name',
                'stocks.id as stock_id',
                'stocks.kilos as stock_quantity',
                'stocks.value as stock_value',
                'commodities.name as commodity_name',
                'releases.id as release_id',
                'releases.Status as release_status',
                'farmers.created_at as farmer_created_at',
                'farmers.updated_at as farmer_updated_at'
            );
    }

    public function columns()
    {
        return [
            Column::name('farmers.id')
                ->label('Farmer ID')
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
            Column::name('applications.id')
                ->label('Application ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.application_status')
                ->label('Application Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.approval_status')
                ->label('Approval Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.tenure')
                ->label('Tenure')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.loan_id')
                ->label('Loan ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.loan_amount')
                ->label('Loan Amount')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.interest')
                ->label('Interest')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.created_at')
                ->label('Application Created At')
                ->searchable()
                ->filterable()
                ->sortBy('applications.created_at'),
            Column::name('applications.updated_at')
                ->label('Application Updated At')
                ->searchable()
                ->filterable()
                ->sortBy('applications.updated_at'),
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
            Column::name('stocks.id')
                ->label('Stock ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.kilos')
                ->label('Stock Quantity')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.price_per_kilo')
                ->label('Price Per Kilo')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('commodities.name')
                ->label('Commodity Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('releases.id')
                ->label('Release ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('releases.Status')
                ->label('Release Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.created_at')
                ->label('Farmer Created At')
                ->searchable()
                ->filterable()
                ->sortBy('farmers.created_at'),
            Column::name('farmers.updated_at')
                ->label('Farmer Updated At')
                ->searchable()
                ->filterable()
                ->sortBy('farmers.updated_at'),
        ];
    }
}
