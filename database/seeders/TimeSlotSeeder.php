<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_time_slots')->insert([
            [
                "from" => "00:00",
                "until" => "11:00",
                "from_12hrs_format" => "12:00 AM",
                "until_12hrs_format" => "11:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "00:15",
                "until" => "11:15",
                "from_12hrs_format" => "12:15 AM",
                "until_12hrs_format" => "11:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "00:30",
                "until" => "11:30",
                "from_12hrs_format" => "12:30 AM",
                "until_12hrs_format" => "11:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "00:45",
                "until" => "11:45",
                "from_12hrs_format" => "12:45 AM",
                "until_12hrs_format" => "11:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "01:00",
                "until" => "12:00",
                "from_12hrs_format" => "1:00 AM",
                "until_12hrs_format" => "12:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "01:15",
                "until" => "12:15",
                "from_12hrs_format" => "1:15 AM",
                "until_12hrs_format" => "12:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "01:30",
                "until" => "12:30",
                "from_12hrs_format" => "1:30 AM",
                "until_12hrs_format" => "12:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "01:45",
                "until" => "12:45",
                "from_12hrs_format" => "1:45 AM",
                "until_12hrs_format" => "12:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "02:00",
                "until" => "13:00",
                "from_12hrs_format" => "2:00 AM",
                "until_12hrs_format" => "1:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "02:15",
                "until" => "13:15",
                "from_12hrs_format" => "2:15 AM",
                "until_12hrs_format" => "1:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "02:30",
                "until" => "13:30",
                "from_12hrs_format" => "2:30 AM",
                "until_12hrs_format" => "1:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "02:45",
                "until" => "13:45",
                "from_12hrs_format" => "2:45 AM",
                "until_12hrs_format" => "1:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "03:00",
                "until" => "14:00",
                "from_12hrs_format" => "3:00 AM",
                "until_12hrs_format" => "2:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "03:15",
                "until" => "14:15",
                "from_12hrs_format" => "3:15 AM",
                "until_12hrs_format" => "2:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "03:30",
                "until" => "14:30",
                "from_12hrs_format" => "3:30 AM",
                "until_12hrs_format" => "2:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "03:45",
                "until" => "14:45",
                "from_12hrs_format" => "3:45 AM",
                "until_12hrs_format" => "2:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "04:00",
                "until" => "15:00",
                "from_12hrs_format" => "4:00 AM",
                "until_12hrs_format" => "3:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "04:15",
                "until" => "15:15",
                "from_12hrs_format" => "4:15 AM",
                "until_12hrs_format" => "3:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "04:30",
                "until" => "15:30",
                "from_12hrs_format" => "4:30 AM",
                "until_12hrs_format" => "3:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "04:45",
                "until" => "15:45",
                "from_12hrs_format" => "4:45 AM",
                "until_12hrs_format" => "3:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "05:00",
                "until" => "16:00",
                "from_12hrs_format" => "5:00 AM",
                "until_12hrs_format" => "4:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "05:15",
                "until" => "16:15",
                "from_12hrs_format" => "5:15 AM",
                "until_12hrs_format" => "4:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "05:30",
                "until" => "16:30",
                "from_12hrs_format" => "5:30 AM",
                "until_12hrs_format" => "4:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "05:45",
                "until" => "16:45",
                "from_12hrs_format" => "5:45 AM",
                "until_12hrs_format" => "4:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "06:00",
                "until" => "17:00",
                "from_12hrs_format" => "6:00 AM",
                "until_12hrs_format" => "5:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "06:15",
                "until" => "17:15",
                "from_12hrs_format" => "6:15 AM",
                "until_12hrs_format" => "5:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "06:30",
                "until" => "17:30",
                "from_12hrs_format" => "6:30 AM",
                "until_12hrs_format" => "5:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "06:45",
                "until" => "17:45",
                "from_12hrs_format" => "6:45 AM",
                "until_12hrs_format" => "5:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "07:00",
                "until" => "18:00",
                "from_12hrs_format" => "7:00 AM",
                "until_12hrs_format" => "6:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "07:15",
                "until" => "18:15",
                "from_12hrs_format" => "7:15 AM",
                "until_12hrs_format" => "6:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "07:30",
                "until" => "18:30",
                "from_12hrs_format" => "7:30 AM",
                "until_12hrs_format" => "6:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "07:45",
                "until" => "18:45",
                "from_12hrs_format" => "7:45 AM",
                "until_12hrs_format" => "6:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "08:00",
                "until" => "19:00",
                "from_12hrs_format" => "8:00 AM",
                "until_12hrs_format" => "7:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "08:15",
                "until" => "19:15",
                "from_12hrs_format" => "8:15 AM",
                "until_12hrs_format" => "7:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "08:30",
                "until" => "19:30",
                "from_12hrs_format" => "8:30 AM",
                "until_12hrs_format" => "7:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "08:45",
                "until" => "19:45",
                "from_12hrs_format" => "8:45 AM",
                "until_12hrs_format" => "7:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "09:00",
                "until" => "20:00",
                "from_12hrs_format" => "9:00 AM",
                "until_12hrs_format" => "8:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "09:15",
                "until" => "20:15",
                "from_12hrs_format" => "9:15 AM",
                "until_12hrs_format" => "8:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "09:30",
                "until" => "20:30",
                "from_12hrs_format" => "9:30 AM",
                "until_12hrs_format" => "8:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "09:45",
                "until" => "20:45",
                "from_12hrs_format" => "9:45 AM",
                "until_12hrs_format" => "8:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "10:00",
                "until" => "21:00",
                "from_12hrs_format" => "10:00 AM",
                "until_12hrs_format" => "9:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "10:15",
                "until" => "21:15",
                "from_12hrs_format" => "10:15 AM",
                "until_12hrs_format" => "9:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "10:30",
                "until" => "21:30",
                "from_12hrs_format" => "10:30 AM",
                "until_12hrs_format" => "9:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "10:45",
                "until" => "21:45",
                "from_12hrs_format" => "10:45 AM",
                "until_12hrs_format" => "9:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "11:00",
                "until" => "22:00",
                "from_12hrs_format" => "11:00 AM",
                "until_12hrs_format" => "10:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "11:15",
                "until" => "22:15",
                "from_12hrs_format" => "11:15 AM",
                "until_12hrs_format" => "10:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "11:30",
                "until" => "22:30",
                "from_12hrs_format" => "11:30 AM",
                "until_12hrs_format" => "10:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "11:45",
                "until" => "22:45",
                "from_12hrs_format" => "11:45 AM",
                "until_12hrs_format" => "10:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "12:00",
                "until" => "23:00",
                "from_12hrs_format" => "12:00 PM",
                "until_12hrs_format" => "11:00 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "12:15",
                "until" => "23:15",
                "from_12hrs_format" => "12:15 PM",
                "until_12hrs_format" => "11:15 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "12:30",
                "until" => "23:30",
                "from_12hrs_format" => "12:30 PM",
                "until_12hrs_format" => "11:30 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "12:45",
                "until" => "23:45",
                "from_12hrs_format" => "12:45 PM",
                "until_12hrs_format" => "11:45 PM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "13:00",
                "until" => "00:00",
                "from_12hrs_format" => "1:00 PM",
                "until_12hrs_format" => "12:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "13:15",
                "until" => "00:15",
                "from_12hrs_format" => "1:15 PM",
                "until_12hrs_format" => "12:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "13:30",
                "until" => "00:30",
                "from_12hrs_format" => "1:30 PM",
                "until_12hrs_format" => "12:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "13:45",
                "until" => "00:45",
                "from_12hrs_format" => "1:45 PM",
                "until_12hrs_format" => "12:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "14:00",
                "until" => "01:00",
                "from_12hrs_format" => "2:00 PM",
                "until_12hrs_format" => "1:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "14:15",
                "until" => "01:15",
                "from_12hrs_format" => "2:15 PM",
                "until_12hrs_format" => "1:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "14:30",
                "until" => "01:30",
                "from_12hrs_format" => "2:30 PM",
                "until_12hrs_format" => "1:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "14:45",
                "until" => "01:45",
                "from_12hrs_format" => "2:45 PM",
                "until_12hrs_format" => "1:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "15:00",
                "until" => "02:00",
                "from_12hrs_format" => "3:00 PM",
                "until_12hrs_format" => "2:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "15:15",
                "until" => "02:15",
                "from_12hrs_format" => "3:15 PM",
                "until_12hrs_format" => "2:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "15:30",
                "until" => "02:30",
                "from_12hrs_format" => "3:30 PM",
                "until_12hrs_format" => "2:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "15:45",
                "until" => "02:45",
                "from_12hrs_format" => "3:45 PM",
                "until_12hrs_format" => "2:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "16:00",
                "until" => "03:00",
                "from_12hrs_format" => "4:00 PM",
                "until_12hrs_format" => "3:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "16:15",
                "until" => "03:15",
                "from_12hrs_format" => "4:15 PM",
                "until_12hrs_format" => "3:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "16:30",
                "until" => "03:30",
                "from_12hrs_format" => "4:30 PM",
                "until_12hrs_format" => "3:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "16:45",
                "until" => "03:45",
                "from_12hrs_format" => "4:45 PM",
                "until_12hrs_format" => "3:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "17:00",
                "until" => "04:00",
                "from_12hrs_format" => "5:00 PM",
                "until_12hrs_format" => "4:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "17:15",
                "until" => "04:15",
                "from_12hrs_format" => "5:15 PM",
                "until_12hrs_format" => "4:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "17:30",
                "until" => "04:30",
                "from_12hrs_format" => "5:30 PM",
                "until_12hrs_format" => "4:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "17:45",
                "until" => "04:45",
                "from_12hrs_format" => "5:45 PM",
                "until_12hrs_format" => "4:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "18:00",
                "until" => "05:00",
                "from_12hrs_format" => "6:00 PM",
                "until_12hrs_format" => "5:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "18:15",
                "until" => "05:15",
                "from_12hrs_format" => "6:15 PM",
                "until_12hrs_format" => "5:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "18:30",
                "until" => "05:30",
                "from_12hrs_format" => "6:30 PM",
                "until_12hrs_format" => "5:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "18:45",
                "until" => "05:45",
                "from_12hrs_format" => "6:45 PM",
                "until_12hrs_format" => "5:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "19:00",
                "until" => "06:00",
                "from_12hrs_format" => "7:00 PM",
                "until_12hrs_format" => "6:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "19:15",
                "until" => "06:15",
                "from_12hrs_format" => "7:15 PM",
                "until_12hrs_format" => "6:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "19:30",
                "until" => "06:30",
                "from_12hrs_format" => "7:30 PM",
                "until_12hrs_format" => "6:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "19:45",
                "until" => "06:45",
                "from_12hrs_format" => "7:45 PM",
                "until_12hrs_format" => "6:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "20:00",
                "until" => "07:00",
                "from_12hrs_format" => "8:00 PM",
                "until_12hrs_format" => "7:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "20:15",
                "until" => "07:15",
                "from_12hrs_format" => "8:15 PM",
                "until_12hrs_format" => "7:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "20:30",
                "until" => "07:30",
                "from_12hrs_format" => "8:30 PM",
                "until_12hrs_format" => "7:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "20:45",
                "until" => "07:45",
                "from_12hrs_format" => "8:45 PM",
                "until_12hrs_format" => "7:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "21:00",
                "until" => "08:00",
                "from_12hrs_format" => "9:00 PM",
                "until_12hrs_format" => "8:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "21:15",
                "until" => "08:15",
                "from_12hrs_format" => "9:15 PM",
                "until_12hrs_format" => "8:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "21:30",
                "until" => "08:30",
                "from_12hrs_format" => "9:30 PM",
                "until_12hrs_format" => "8:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "21:45",
                "until" => "08:45",
                "from_12hrs_format" => "9:45 PM",
                "until_12hrs_format" => "8:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "22:00",
                "until" => "09:00",
                "from_12hrs_format" => "10:00 PM",
                "until_12hrs_format" => "9:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "22:15",
                "until" => "09:15",
                "from_12hrs_format" => "10:15 PM",
                "until_12hrs_format" => "9:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "22:30",
                "until" => "09:30",
                "from_12hrs_format" => "10:30 PM",
                "until_12hrs_format" => "9:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "22:45",
                "until" => "09:45",
                "from_12hrs_format" => "10:45 PM",
                "until_12hrs_format" => "9:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "23:00",
                "until" => "10:00",
                "from_12hrs_format" => "11:00 PM",
                "until_12hrs_format" => "10:00 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "23:15",
                "until" => "10:15",
                "from_12hrs_format" => "11:15 PM",
                "until_12hrs_format" => "10:15 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "23:30",
                "until" => "10:30",
                "from_12hrs_format" => "11:30 PM",
                "until_12hrs_format" => "10:30 AM",
                "created_at" => now(),
                "updated_at" => now()

            ],
            [
                "from" => "23:45",
                "until" => "10:45",
                "from_12hrs_format" => "11:45 PM",
                "until_12hrs_format" => "10:45 AM",
                "created_at" => now(),
                "updated_at" => now()

            ]
        ]);
    }
}
