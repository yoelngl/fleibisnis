<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchiseDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchise_directories', function (Blueprint $table) {
            $table->id();

            // Brand
            $table->string('slug');
            $table->string('brand_name');
            $table->longText('brand_description');
            $table->string('bussiness_concept');
            $table->string('bussiness_category');
            $table->string('bussiness_type');
            $table->string('company_name');
            $table->longText('company_address');
            $table->string('company_year');
            $table->string('company_outlet');
            $table->string('brand_origin');
            $table->string('brand_country');
            $table->string('brand_logo');
            $table->string('brand_image');
            $table->string('brand_brochure');
            $table->string('tag');

            // investments
            $table->string('currency');
            $table->string('investment_value');
            $table->string('initial_cost');
            $table->string('royalty_fee');
            $table->string('license_time');
            $table->string('roi');
            $table->string('estimated_profit');

            // Informations
            $table->string('employees_number');
            $table->string('store_area');
            $table->enum('store_location_requirements',['Y','N']);
            $table->enum('store_services_requirements',['Y','N']);
            $table->enum('employees_training',['Y','N']);
            $table->enum('sop',['Y','N']);
            $table->enum('crm_system',['Y','N']);
            $table->enum('operational',['Y','N']);
            $table->enum('hki',['Y','N']);
            $table->enum('stpw',['Y','N']);
            $table->enum('nib',['Y','N']);
            $table->string('whatsapp_contact');
            $table->string('website');
            $table->string('instagram');
            $table->string('company_email');
            $table->string('store_images');
            $table->json('packet')->nullable();

            // User Contact
            $table->string('contact_name')->nullable();
            $table->string('contact_position')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();


            // $table->string('brand_name');
            // $table->string('brand_image');
            // $table->string('brand_logo');
            // $table->string('slug');
            // $table->string('location');
            // $table->text('brand_information');
            // $table->string('legal_entity');
            // $table->string('year_of_established');
            // $table->string('total_outlet');
            // $table->enum('origin',['Local','Overseas']);
            // $table->enum('investments',['Below IDR 100.000.000','IDR 100.000.001 - IDR 200.000.000','IDR 200.000.001 - IDR 500.000.000','IDR 500.000.001 - IDR 1.000.000.000','IDR 1.000.000.001 - IDR 2.000.000.000','Above IDR 2.000.000.000']);
            // $table->string('investment_duration');
            // $table->string('brand_brochure');
            // $table->string('brand_whatsapp');
            // $table->string('full_name')->nullable();
            // $table->string('email_address')->nullable();
            // $table->string('phone_numbers')->nullable();
            // $table->string('enquiries')->nullable();
            // $table->integer('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franchise_directories');
    }
}
