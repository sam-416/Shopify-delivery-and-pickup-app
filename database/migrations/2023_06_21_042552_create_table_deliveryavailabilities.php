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
        Schema::create('tbl_delivery_availabilities', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');
            $table->enum('delivery_type', ['normal', 'express']);
            $table->integer('week_day_id')->nullable();
            $table->enum('is_all_day', ['true', 'false'])->default('false');
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
        Schema::dropIfExists('tbl_delivery_availabilities');
    }
};
