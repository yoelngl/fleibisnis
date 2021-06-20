<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_experts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expert_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('question');
            $table->text('answer');
            $table->string('slug');
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
        Schema::dropIfExists('ask_experts');
    }
}
