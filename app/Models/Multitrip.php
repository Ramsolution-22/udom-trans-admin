<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multitrip extends Model
{
    use HasFactory;
    public function rider(){
        return $this->belongsTo(Rider::class,'rider_id');
    }
    public function driver(){
        return $this->belongsTo(Driver::class, 'driver_id');
    }
    public function start_location(){
        return $this->belongsTo(Location::class, 'start_loc_id');
    }
    public function end_location(){
        return $this->belongsTo(Location::class, 'end_loc_id');
    }
    public function cab(){
        return $this->belongsTo(Cab::class, 'cab_id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
