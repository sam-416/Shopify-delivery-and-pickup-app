<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InsertOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tbl_options")->insert([
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "delivery_every_day_of_week" => 'yes',
                "delivery_specific_days_of_the_week" => 'no',
                "delivery_slot_same_every_day_of_week" => 'yes',
                "delivery_slot_diffrent_each_days_of_the_week" => 'no',
                "delivery_preparation_time" => 'yes',
                "delivery_cuttoff_time" => 'no',
                "tags" => '{"tags":["test1"]}',
                "postal_codes" => '123',
                "blackout_dates" => '{"blackout":["2023-06-20"]}',
                "delivery_location_id" => '12155',
                "delivery_slot_id" => '424',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "delivery_every_day_of_week" => 'yes',
                "delivery_specific_days_of_the_week" => 'no',
                "delivery_slot_same_every_day_of_week" => 'yes',
                "delivery_slot_diffrent_each_days_of_the_week" => 'no',
                "delivery_preparation_time" => 'yes',
                "delivery_cuttoff_time" => 'no',
                "tags" => '{"tags":["test1"]}',
                "postal_codes" => '123',
                "blackout_dates" => '{"blackout":["2023-06-20"]}',
                "delivery_location_id" => '1215512',
                "delivery_slot_id" => '42423',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "delivery_every_day_of_week" => 'yes',
                "delivery_specific_days_of_the_week" => 'no',
                "delivery_slot_same_every_day_of_week" => 'yes',
                "delivery_slot_diffrent_each_days_of_the_week" => 'no',
                "delivery_preparation_time" => 'yes',
                "delivery_cuttoff_time" => 'no',
                "tags" => '{"tags":["test1"]}',
                "postal_codes" => '123',
                "blackout_dates" => '{"blackout":["2023-06-20"]}',
                "delivery_location_id" => '12155',
                "delivery_slot_id" => '424',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'express',
                "delivery_every_day_of_week" => 'yes',
                "delivery_specific_days_of_the_week" => 'no',
                "delivery_slot_same_every_day_of_week" => 'yes',
                "delivery_slot_diffrent_each_days_of_the_week" => 'no',
                "delivery_preparation_time" => 'yes',
                "delivery_cuttoff_time" => 'no',
                "tags" => '{"tags":["test1"]}',
                "postal_codes" => '123',
                "blackout_dates" => '{"blackout":["2023-06-20"]}',
                "delivery_location_id" => '1215512',
                "delivery_slot_id" => '42423',
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
