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
            $table->string('brand_name');
            $table->string('brand_image');
            $table->string('brand_logo');
            $table->string('slug');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->text('brand_information');
            $table->string('legal_entity');
            $table->string('year_of_established');
            $table->string('total_outlet');
            $table->enum('origin',['Local','Overseas']);
            $table->enum('investments',['Below IDR 100.000.000','IDR 100.000.001 - IDR 200.000.000','IDR 200.000.001 - IDR 500.000.000','IDR 500.000.001 - IDR 1.000.000.000','IDR 1.000.000.001 - IDR 2.000.000.000','Above IDR 2.000.000.000']);
            $table->string('investment_duration');
            $table->string('brand_brochure');
            $table->string('brand_whatsapp');
            $table->string('full_name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('phone_numbers')->nullable();
            $table->string('enquiries')->nullable();
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('franchise_directories');
    }
}
