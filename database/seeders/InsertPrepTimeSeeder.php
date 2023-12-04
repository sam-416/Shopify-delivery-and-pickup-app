<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InsertPrepTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_prep_times')->insert([
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 1,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 2,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 3,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 4,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 5,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 6,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => 7,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 1,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 2,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 3,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 4,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 5,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 6,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => 7,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],

            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 1,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 2,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 3,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 4,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 5,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 6,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => 7,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 1,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 2,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 3,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 4,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 5,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 6,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "week_day_id" => 7,
                "preparation_time" => 0,
                "preparation_time_type" => 'days',
                "cutoff_enable" => 'false',
                "cuttoff_time" => '00:00',
                "cuttoff_preparation_day" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
