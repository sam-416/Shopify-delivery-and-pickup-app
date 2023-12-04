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
        Schema::create('tbl_slots', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');
            $table->enum('delivery_type', ['normal', 'express']);
            $table->integer('week_day_id')->nullable();
            $table->string('from');
            $table->string('until');
            $table->enum('is_available_every_day', ['yes','no'])->default('no');
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
        Schema::dropIfExists('tbl_slots');
    }
};
