<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAvailabilitie extends Model
{
    use HasFactory;
    protected $table = "tbl_delivery_availabilities";
    protected $fillable = ['location_id','delivery_type','week_day_id','is_all_day'];
}
