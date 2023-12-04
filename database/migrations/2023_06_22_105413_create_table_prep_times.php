<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_prep_times', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');
            $table->enum('delivery_type', ['normal', 'express']);
            $table->integer('week_day_id');
            $table->integer('preparation_time');
            $table->enum("preparation_time_type",['minutes','hours','days']);
            $table->enum('cutoff_enable',['true','false']);
            $table->text('cuttoff_time');
            $table->integer('cuttoff_preparation_day');
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
        Schema::dropIfExists('tbl_prep_times');
    }
};
