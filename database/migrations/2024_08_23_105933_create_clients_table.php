<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('account_number')->nullable();
            $table->string('institution_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('branch')->nullable();
            $table->string('registering_officer')->nullable();
            $table->string('loan_officer')->nullable();
            $table->string('approving_officer')->nullable();
            $table->string('membership_type')->nullable();
            $table->string('incorporation_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mobile_phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('client_number')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('address')->nullable();
            $table->string('notes')->nullable();
            $table->string('current_team_id')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('client_status')->nullable();
            $table->string('next_of_kin_name')->nullable();
            $table->string('next_of_kin_phone')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('nida_number')->nullable();
            $table->string('ref_number')->nullable();
            $table->string('shares_ref_number')->nullable();
            $table->string('nationarity')->nullable();
            $table->string('member_exit_document')->nullable();
            $table->string('end_membership_description')->nullable();
            $table->string('full_name')->nullable();
            $table->string('amount')->nullable();
            $table->string('national_id')->nullable();
            $table->string('client_id')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('present_surname')->nullable();
            $table->string('birth_surname')->nullable();
            $table->string('number_of_spouse')->nullable();
            $table->string('number_of_children')->nullable();
            $table->string('classification_of_individual')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('fate_status')->nullable();
            $table->string('social_status')->nullable();
            $table->string('residency')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('nationality')->nullable();
            $table->string('employment')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('education')->nullable();
            $table->string('business_name')->nullable();
            $table->string('income_available')->nullable();
            $table->string('monthly_expenses')->nullable();
            $table->string('negative_status_of_individual')->nullable();
            $table->string('tax_identification_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issuer_country')->nullable();
            $table->string('driving_license_number')->nullable();
            $table->string('voters_id')->nullable();
            $table->string('foreign_unique_id')->nullable();
            $table->string('custom_id_number_1')->nullable();
            $table->string('custom_id_number_2')->nullable();
            $table->string('main_address')->nullable();
            $table->string('street')->nullable();
            $table->string('number_of_building')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('fixed_line')->nullable();
            $table->string('web_page')->nullable();
            $table->string('trade_name')->nullable();
            $table->string('legal_form')->nullable();
            $table->string('establishment_date')->nullable();
            $table->string('registration_country')->nullable();
            $table->string('industry_sector')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('middle_names')->nullable();
            $table->string('collateral_manager_id')->nullable();
            $table->string('identificationType')->nullable();
            $table->string('identificationNo')->nullable();
            $table->string('ward')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}