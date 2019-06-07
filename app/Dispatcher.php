<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trailer;
use App\Driver;
use App\Customer;

class Dispatcher extends Model
{
    public function trailers() 
    {
        return $this->hasMany(Trailer::class);
    }

    public function drivers() 
    {
        return $this->hasMany(Driver::class);
    }

    public function customers() 
    {
        return $this->hasMany(Customer::class);
    }
}
