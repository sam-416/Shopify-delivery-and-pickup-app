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
        Schema::create('tbl_options', function (Blueprint $table) {
            $table->id();
            $table->string('location_id');
            $table->enum('delivery_type', ['normal', 'exxpress']);
            $table->enum('delivery_every_day_of_week', ['yes', 'no']);
            $table->enum('delivery_specific_days_of_the_week', ['yes', 'no']);
            $table->enum('delivery_slot_same_every_day_of_week', ['yes', 'no']);
            $table->enum('delivery_slot_diffrent_each_days_of_the_week', ['yes', 'no']);
            $table->enum('delivery_preparation_time', ['yes', 'no']);
            $table->text('blackout_dates');
            $table->text('tags');
            $table->string('delivery_location_id');
            $table->string('delivery_slot_id');
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
        Schema::dropIfExists('tbl_options');
    }
};
