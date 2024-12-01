<?php

namespace App\Http\Livewire\Reports;

use App\Models\Application;
use Livewire\Component;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Applications extends LivewireDatatable
{
    public function builder()
    {
        return Application::query()
            ->leftJoin('farmers', 'applications.client_id', '=', 'farmers.id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'applications.client_id', '=', 'stocks.client_id')
            ->select(
                'applications.id as application_id',
                'applications.client_id',
                'applications.application_status',
                'applications.approval_status',
                'applications.tenure',
                'applications.loan_id',
                'applications.loan_amount',
                'applications.interest',
                'applications.created_at',
                'applications.updated_at',
                'farmers.first_name as farmer_first_name',
                'farmers.last_name as farmer_last_name',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'branches.name as branch_name',
                'stocks.kilos as stock_quantity'
            );
    }

    public function columns()
    {
        return [
            Column::name('applications.id')
                ->label('Application ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.client_id')
                ->label('Client ID')
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
            Column::name('applications.created_at')
                ->label('Date Created')
                ->searchable()
                ->filterable()
                ->sortBy('applications.created_at'),
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
                ->filterable()
        ];
    }
}
