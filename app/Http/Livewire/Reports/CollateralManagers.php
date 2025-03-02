<?php

namespace App\Http\Livewire\Reports;

use App\Models\CollateralManager;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CollateralManagers extends LivewireDatatable
{
    public function builder()
    {
        return CollateralManager::query()
            ->leftJoin('farmers', 'collateral_managers.id', '=', 'farmers.collateral_manager_id')
            ->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'farmers.id', '=', 'stocks.client_id')
            ->select(
                'collateral_managers.id as cm_id',
                'collateral_managers.CMNumber',
                'collateral_managers.EmailAddress',
                'collateral_managers.FirstName',
                'collateral_managers.LastName',
                'collateral_managers.Address',
                'collateral_managers.City',
                'collateral_managers.Country',
                'collateral_managers.PostalCode',
                'collateral_managers.WarehouseLocation',
                'collateral_managers.BusinessName',
                'collateral_managers.TINNumber',
                'collateral_managers.PhoneNumber',
                'collateral_managers.Status as cm_status',
                'farmers.first_name as farmer_first_name',
                'farmers.last_name as farmer_last_name',
                'applications.application_status',
                'branches.name as branch_name',
                'stocks.kilos as stock_quantity',
                'collateral_managers.created_at'
            );
    }

    public function columns()
    {
        return [
            Column::name('collateral_managers.CMNumber')
                ->label('CM Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.EmailAddress')
                ->label('Email Address')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.FirstName')
                ->label('First Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.LastName')
                ->label('Last Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.Address')
                ->label('Address')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.City')
                ->label('City')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.Country')
                ->label('Country')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.PostalCode')
                ->label('Postal Code')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.WarehouseLocation')
                ->label('Warehouse Location')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.BusinessName')
                ->label('Business Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.TINNumber')
                ->label('TIN Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.PhoneNumber')
                ->label('Phone Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.Status')
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
            Column::name('branches.name')
                ->label('Branch Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('stocks.kilos')
                ->label('Stock Quantity')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.created_at')
                ->label('Date Created')
                ->searchable()
                ->filterable()
                ->sortBy('collateral_managers.created_at')
        ];
    }
}
