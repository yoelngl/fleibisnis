<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_directories', function (Blueprint $table) {
            $table->id();
            // Product Information
            $table->string('company_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('company_email')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_category')->nullable();
            $table->longText('product_description')->nullable();
            $table->longText('product_spesification')->nullable();
            $table->longText('product_features')->nullable();
            $table->string('product_country')->nullable();
            $table->string('product_images')->nullable();
            $table->enum('product_origin',['Local(Indonesia)','Overseas(International)'])->nullable();
            $table->string('tag')->nullable();
            $table->string('guarantee')->nullable();
            $table->enum('practices',['Y','N'])->nullable();
            $table->enum('services',['Y','N'])->nullable();
            $table->enum('books',['Y','N'])->nullable();
            $table->string('currency')->nullable();
            $table->longText('description_add')->nullable();
            $table->string('partner')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('brand_brochure')->nullable();

            // User Contact
            $table->string('contact_name')->nullable();
            $table->string('contact_position')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
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
        Schema::dropIfExists('retail_directories');
    }
}
