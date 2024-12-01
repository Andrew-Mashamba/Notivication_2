<?php

namespace App\Http\Livewire\Clients;

use App\Models\Release;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class ClientsCollateral extends LivewireDatatable
{
    public function builder()
    {
        return Release::query()
            ->leftJoin('applications', 'releases.application_id', '=', 'applications.id')
            ->leftJoin('farmers', 'applications.client_id', '=', 'farmers.id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'farmers.id', '=', 'stocks.client_id')
            ->select(
                'releases.id as release_id',
                'releases.Status as release_status',
                'applications.application_status',
                'farmers.first_name as farmer_first_name',
                'farmers.last_name as farmer_last_name',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'branches.name as branch_name',
                'stocks.kilos as stock_quantity',
                'releases.created_at'
            );
    }

    public function columns()
    {
        return [
            Column::name('releases.Status')
                ->label('Release Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.application_status')
                ->label('Application Status')
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
            Column::name('stocks.kilos')
                ->label('Stock Quantity')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('releases.created_at')
                ->label('Date Created')
                ->searchable()
                ->filterable()
                ->sortBy('releases.created_at')
        ];
    }
}
