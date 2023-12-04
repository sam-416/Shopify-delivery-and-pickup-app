<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $table = "tbl_slots";
    protected $fillable = ['location_id','delivery_type','week_day_id','from', 'until', 'is_available_every_day'];
}
