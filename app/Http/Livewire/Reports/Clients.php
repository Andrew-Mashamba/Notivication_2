<?php

namespace App\Http\Livewire\Reports;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Clients extends Component
{


    public $filters = [
        'farmers' => false,
        'applications' => false,
        'collateral_managers' => false,
        'branches' => false,
        'warehouses' => false,
        'stocks' => false,
        'roles' => false,
    ];
    public $selectedColumns = [];
    public $results = [];


    public function generateReport()
    {
        // Determine which columns to select based on filters
        $this->selectedColumns = array_keys(array_filter($this->filters));

        if (empty($this->selectedColumns)) {
            $this->results = [];
            return;
        }

        // Build a query based on selected columns
        $query = DB::table('farmers')
            ->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'farmers.id', '=', 'stocks.client_id')
            ->select($this->generateSelectColumns());

        // Execute the query and get the results
        $this->results = $query->get()->toArray();
    }

    private function generateSelectColumns()
    {
        $columns = [];
        if ($this->filters['farmers']) {
            $columns[] = 'farmers.id as farmer_id';
            $columns[] = 'farmers.first_name';
            $columns[] = 'farmers.last_name';
        }
        if ($this->filters['applications']) {
            $columns[] = 'applications.application_status';
        }
        if ($this->filters['collateral_managers']) {
            $columns[] = 'collateral_managers.FirstName as cm_first_name';
            $columns[] = 'collateral_managers.LastName as cm_last_name';
        }
        if ($this->filters['branches']) {
            $columns[] = 'branches.name as branch_name';
        }
        if ($this->filters['stocks']) {
            $columns[] = 'stocks.kilos as stock_quantity';
        }

        return $columns;
    }



    public function render()
    {

        $query = DB::table('farmers')
            ->leftJoin('applications', 'farmers.id', '=', 'applications.client_id')
            ->leftJoin('collateral_managers', 'farmers.collateral_manager_id', '=', 'collateral_managers.id')
            ->leftJoin('branches', 'farmers.branch', '=', 'branches.id')
            ->leftJoin('stocks', 'farmers.id', '=', 'stocks.client_id')
            ->select(
                'farmers.id as farmer_id',
                'farmers.first_name',
                'farmers.last_name',
                'applications.application_status',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'branches.name as branch_name',
                'stocks.kilos',
            )
            ->get();
        //dd($query);

        //dd($query);
        return view('livewire.reports.clients');
    }
}
