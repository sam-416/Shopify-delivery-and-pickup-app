<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;
    protected $table = "tbl_time_slots";
    protected $fillable = ['from', 'until', 'from_12hrs_format', 'until_12hrs_format'];
}
