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
            $table->string('brand_name')->nullable();
            $table->longText('brand_description')->nullable();
            $table->string('bussiness_concept')->nullable();
            $table->string('bussiness_category')->nullable();
            $table->string('bussiness_type')->nullable();
            $table->string('company_name')->nullable();
            $table->longText('company_address')->nullable();
            $table->string('company_year')->nullable();
            $table->string('company_outlet')->nullable();
            $table->string('brand_origin')->nullable();
            $table->string('brand_country')->nullable();
            $table->string('brand_logo')->nullable();
            $table->string('brand_image')->nullable();
            $table->string('brand_brochure')->nullable();
            $table->string('tag')->nullable();

            // investments
            $table->string('currency')->nullable();
            $table->string('investment_value')->nullable();
            $table->string('initial_cost')->nullable();
            $table->string('royalty_fee')->nullable();
            $table->string('license_time')->nullable();
            $table->string('roi')->nullable();
            $table->string('estimated_profit')->nullable();

            // Informations
            $table->string('employees_number')->nullable();
            $table->string('store_area')->nullable();
            $table->enum('store_location_requirements',['Y','N'])->nullable();
            $table->enum('store_services_requirements',['Y','N'])->nullable();
            $table->enum('employees_training',['Y','N'])->nullable();
            $table->enum('sop',['Y','N'])->nullable();
            $table->enum('crm_system',['Y','N'])->nullable();
            $table->enum('operational',['Y','N'])->nullable();
            $table->enum('hki',['Y','N'])->nullable();
            $table->enum('stpw',['Y','N'])->nullable();
            $table->enum('nib',['Y','N'])->nullable();
            $table->string('whatsapp_contact')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('company_email')->nullable();
            $table->string('store_images')->nullable();
            $table->json('packet')->nullable()->nullable();

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
