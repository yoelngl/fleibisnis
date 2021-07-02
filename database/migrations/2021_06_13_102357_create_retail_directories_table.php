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
            $table->string('company_name');
            $table->string('slug');
            $table->string('company_email');
            $table->text('company_address');
            $table->string('company_phone');
            $table->string('product_name');
            $table->string('product_type');
            $table->string('product_price');
            $table->string('product_category');
            $table->longText('product_description');
            $table->longText('product_spesification');
            $table->longText('product_features');
            $table->string('product_country');
            $table->string('product_images');
            $table->enum('product_origin',['Local(Indonesia)','Overseas(International)']);
            $table->string('tag');
            $table->string('guarantee');
            $table->enum('practices',['Y','N']);
            $table->enum('services',['Y','N']);
            $table->enum('books',['Y','N']);
            $table->string('currency');
            $table->longText('description_add')->nullabe();
            $table->string('partner');
            $table->string('website')->nullable();
            $table->string('instagram');
            $table->string('brand_brochure');

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
