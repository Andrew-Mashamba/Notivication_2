<?php

namespace App\Http\Livewire\Clients;

use App\Models\Farmer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;



class GeneralReport extends LivewireDatatable
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
            ->leftJoin('releases', 'applications.id', '=', 'releases.application_id')
            ->leftJoin('warehouses_temp', 'farmers.id', '=', 'warehouses_temp.unique_id') // Updated join condition
            ->select(
            // Farmers Table Columns
                'farmers.id as farmer_id',
                'farmers.first_name',
                'farmers.last_name',
                'farmers.date_of_birth',
                'farmers.gender',
                'farmers.contact_number',
                'farmers.email',
                'farmers.address',
                'farmers.occupation',
                'farmers.education_level',
                'farmers.marital_status',
                'farmers.dependent_count',
                'farmers.annual_income',
                'farmers.City',
                'farmers.phone_number',
                'farmers.Status',
                'farmers.created_at',
                'farmers.updated_at',
                'farmers.collateral_manager_id',
                'farmers.identificationType',
                'farmers.identificationNo',
                'farmers.region',
                'farmers.district',
                'farmers.ward',
                'farmers.branch',

                // Applications Table Columns
                'applications.id as application_id',
                'applications.application_status',
                'applications.approval_status',
                'applications.tenure',
                'applications.loan_id',
                'applications.loan_amount',
                'applications.interest',
                'applications.created_at as application_created_at',
                'applications.updated_at as application_updated_at',

                // Collateral Managers Table Columns
                'collateral_managers.id as cm_id',
                'collateral_managers.CMNumber',
                'collateral_managers.EmailAddress',
                'collateral_managers.FirstName as cm_first_name',
                'collateral_managers.LastName as cm_last_name',
                'collateral_managers.Address as cm_address',
                'collateral_managers.City as cm_city',
                'collateral_managers.Country as cm_country',
                'collateral_managers.PostalCode as cm_postal_code',
                'collateral_managers.WarehouseLocation as cm_warehouse_location',
                'collateral_managers.canAddFarmers',
                'collateral_managers.canInitiateLoan',
                'collateral_managers.canSetPrices',
                'collateral_managers.BusinessName',
                'collateral_managers.BusinessLicenceNumber',
                'collateral_managers.TINNumber',
                'collateral_managers.BusinessPhoneNumber',
                'collateral_managers.Status as cm_status',
                'collateral_managers.photo as cm_photo',
                'collateral_managers.created_at as cm_created_at',
                'collateral_managers.updated_at as cm_updated_at',
                'collateral_managers.ward as cm_ward',
                'collateral_managers.description as cm_description',
                'collateral_managers.District as cm_district',
                'collateral_managers.PhoneNumber as cm_phone_number',

                // Branches Table Columns
                'branches.id as branch_id',
                'branches.institution_id',
                'branches.name as branch_name',
                'branches.region as branch_region',
                'branches.ward as branch_ward',
                'branches.district as branch_district',
                'branches.branchNumber as branch_number',
                'branches.parentBranch as branch_parent',
                'branches.monthly_disbursement_amount',
                'branches.amount_owed',
                'branches.phone_number as branch_phone_number',
                'branches.email as branch_email',
                'branches.automatic_payments as branch_automatic_payments',
                'branches.branch_status as branch_status',
                'branches.Status as branch_status',
                'branches.selected as branch_selected',
                'branches.created_at as branch_created_at',
                'branches.updated_at as branch_updated_at',

                // Releases Table Columns
                'releases.id as release_id',
                'releases.application_id as release_application_id',
                'releases.client_id as release_client_id',
                'releases.Status as release_status',
                'releases.created_at as release_created_at',
                'releases.updated_at as release_updated_at',

                // Warehouses Temp Table Columns
                'warehouses_temp.id as warehouse_id',
                'warehouses_temp.unique_id as warehouse_unique_id',
                'warehouses_temp.warehouse_name',
                'warehouses_temp.warehouse_description',
                'warehouses_temp.location_address',
                'warehouses_temp.location_coordinates',
                'warehouses_temp.iso3166',
                'warehouses_temp.amenity',
                'warehouses_temp.city as warehouse_city',
                'warehouses_temp.country as warehouse_country',
                'warehouses_temp.country_code as warehouse_country_code',
                'warehouses_temp.postcode as warehouse_postcode',
                'warehouses_temp.region as warehouse_region',
                'warehouses_temp.road as warehouse_road',
                'warehouses_temp.suburb as warehouse_suburb',
                'warehouses_temp.ward as warehouse_ward',
                'warehouses_temp.name as warehouse_name',
                'warehouses_temp.type as warehouse_type',
                'warehouses_temp.created_at as warehouse_created_at',
                'warehouses_temp.updated_at as warehouse_updated_at'
            );
    }


    public function columns()
    {
        $columns = [
            // Farmers Table
            Column::name('farmers.id')
                ->label('Client ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.first_name')
                ->label('Client First Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.last_name')
                ->label('Client Last Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.date_of_birth')
                ->label('Date of Birth')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.gender')
                ->label('Client Gender')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.contact_number')
                ->label('Client Contact Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.email')
                ->label('Client Email')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.address')
                ->label('Client Address')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.occupation')
                ->label('Client Occupation')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.education_level')
                ->label('Client Education Level')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.marital_status')
                ->label('Client Marital Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.phone_number')
                ->label('Client Phone Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.Status')
                ->label('Client Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.created_at')
                ->label('Client Reg Date')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.collateral_manager_id')
                ->label('Collateral Manager ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.identificationType')
                ->label('Identification Type')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('farmers.identificationNo')
                ->label('Identification Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['farmers.region'], function ($x)  {
                // Check if the commodity_id matches and return the relevant value
                return DB::table('regions')->where('id',$x)->value('region_name');
            })
            //Column::name('farmers.region')
                ->label('Client Region')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['farmers.district'], function ($x)  {
                // Check if the commodity_id matches and return the relevant value
                return DB::table('districts')->where('id',$x)->value('district_name');
            })
            //Column::name('farmers.district')
                ->label('Client District')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['farmers.ward'], function ($x)  {
                // Check if the commodity_id matches and return the relevant value
                return DB::table('wards')->where('id',$x)->value('ward_name');
            })
            //Column::name('farmers.ward')
                ->label('Client Ward')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::callback(['farmers.branch'], function ($x)  {
                // Check if the commodity_id matches and return the relevant value
                return DB::table('branches')->where('id',$x)->value('name');
            })
            //Column::name('farmers.branch')
                ->label('Branch')
                ->searchable()
                ->hideable()
                ->filterable(),


            // Collateral Managers Table
            Column::name('collateral_managers.id')
                ->label('Collateral Manager ID')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.EmailAddress')
                ->label('Collateral Manager Email Address')
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
            Column::name('collateral_managers.Address')
                ->label('Collateral Manager Address')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.BusinessName')
                ->label('Business Name')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.BusinessLicenceNumber')
                ->label('Business Licence Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.TINNumber')
                ->label('TIN Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.BusinessPhoneNumber')
                ->label('Collateral Manager Phone Number')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.Status')
                ->label('Status')
                ->searchable()
                ->hideable()
                ->filterable(),
            Column::name('collateral_managers.created_at')
                ->label('Collateral Manager Reg Date At')
                ->searchable()
                ->hideable()
                ->filterable(),

        ];

        return $columns;
    }

}

