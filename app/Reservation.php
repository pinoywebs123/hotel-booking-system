<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
    public function room_type(){
    	return $this->belongsTo('App\Room', 'type', 'id');
    }
}
