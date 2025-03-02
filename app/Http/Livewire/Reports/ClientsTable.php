<?php

namespace App\Http\Livewire\Reports;

use App\Models\Farmer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ClientsTable extends LivewireDatatable
{

    public $commodities;
    public $columnNames;

    public function boot()
    {
        // Fetch commodity data
        $this->commodities = DB::table('commodities')->get();

        // Fetch column names
        $this->columnNames = Schema::getColumnListing('commodities');
    }
    public function builder()
    {
        return Farmer::query()
            ->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'farmers.id', '=', 'stocks.client_id')
            ->leftJoin('commodities', 'stocks.commodity_id', '=', 'commodities.id')
            ->leftJoin('warehouses_temp', 'farmers.id', '=', 'warehouses_temp.unique_id')
            ->select(
                'farmers.id as farmer_id',
                'farmers.first_name',
                'farmers.last_name',
                'applications.application_status',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'branches.name as branch_name',
                'stocks.kilos',
                'stocks.value',
                'stocks.price_per_kilo',
                'stocks.warehouse',
                'stocks.unit',
                'commodities.id as commodity_id',
                'commodities.name as commodity_name',
                'commodities.price_per_kilo as commodity_price_per_kilo',
                'farmers.created_at'
            );
    }

    public function columns()
    {
        $columns = [
            Column::name('farmers.first_name')
                ->label('First Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.last_name')->label('Last Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('applications.application_status')->label('Application Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.FirstName')->label('Collateral Manager First Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.LastName')->label('Collateral Manager Last Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('branches.name')->label('Branch Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('commodities.name')->label('commodities Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('commodities.unit')->label('Unit')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['stocks.price_per_kilo','commodities.unit'], function ($x,$p)  {
                // Check if the commodity_id matches and return the relevant value
                return number_format((double)$x,2);
            })
            //Column::name('stocks.price_per_kilo')
                ->label('Unit Price (TZS)')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['commodities.unit','stocks.kilos'], function ($x,$y)  {
                // Check if the commodity_id matches and return the relevant value
                return number_format((double)$y,2);
            })
            ->label('Amount (L/Kg)')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['stocks.price_per_kilo','stocks.kilos'], function ($x,$y)  {
                // Check if the commodity_id matches and return the relevant value
                return number_format((double)$x*(double)$y,2);
            })
                ->label('value (TZS)')
                ->searchable()
                ->hideable()
                ->filterable(),

            Column::callback(['stocks.warehouses_temp','stocks.kilos'], function ($x,$y)  {
                // Check if the commodity_id matches and return the relevant value
                return DB::table('warehouses_temp')->where('id',$x)->value('warehouse_name');
            })
            //Column::name('stocks.warehouses_temp')
                ->label('Warehouse Name')
                ->searchable()
                ->hideable()
                ->filterable(),

            Column::callback(['stocks.warehouses_temp','commodities.unit'], function ($x,$y)  {
                // Check if the commodity_id matches and return the relevant value
                return DB::table('warehouses_temp')->where('id',$x)->value('location_address');
            })
            //Column::name('warehouses_temp.location_address')
                ->label('Warehouse Location')
                ->searchable()
                ->hideable()
                ->filterable()
        ];

        return $columns;

    }
}
