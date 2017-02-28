<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function reservation(){
    	return $this->hasMany('App\Reservation');
    }
}
