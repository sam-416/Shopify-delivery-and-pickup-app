<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InsertDeliveryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_delivery_types')->insert([
            [
                "location_id" => '241789',
                "delivery_type" => 'Normal',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "location_id" => '2457895',
                "delivery_type" => 'Express',
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
