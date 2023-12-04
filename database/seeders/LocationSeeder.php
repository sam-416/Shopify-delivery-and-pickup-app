<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_locations')->insert(
            [
                [
                    "location_id" => '241789',
                    "location_name" => 'ZRH',
                    "address" => 'Test',
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "location_id" => '2457895',
                    "location_name" => 'CH',
                    "address" => 'Test',
                    "created_at" => now(),
                    "updated_at" => now()
                ]
            ]
        );
    }
}
