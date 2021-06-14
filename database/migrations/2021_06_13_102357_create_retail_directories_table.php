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
            $table->string('product_name');
            $table->string('slug')->unique();
            $table->string('product_type');
            $table->integer('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->text('product_information');
            $table->text('product_spesification');
            $table->text('product_images');
            $table->text('product_features');
            $table->string('price');
            $table->string('guarantee');
            $table->string('company_name');
            $table->string('legal_entity');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_country');
            $table->enum('company_type',['Manufacture','Distributors/Agents','Retailers']);
            $table->enum('looking_for',['Distributors/Agents','Retailers','Business Owners']);
            $table->text('brand_brochure');
            $table->string('brand_whatsapp')->nullable();
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
        Schema::dropIfExists('retail_directories');
    }
}
