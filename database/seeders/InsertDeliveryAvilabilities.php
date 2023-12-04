<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InsertDeliveryAvilabilities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tbl_delivery_availabilities")->insert([
            [
                "location_id" => '241789',
                "delivery_type" => 'normal',
                "week_day_id" => NULL,
                "is_all_day" => 'true',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'normal',
                "week_day_id" => NULL,
                "is_all_day" => 'true',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '241789',
                "delivery_type" => 'express',
                "week_day_id" => NULL,
                "is_all_day" => 'true',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895', 
                "delivery_type" => 'express',
                "week_day_id" => NULL,
                "is_all_day" => 'true',
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
