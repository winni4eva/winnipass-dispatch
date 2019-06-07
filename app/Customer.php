<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomerLoad;

class Customer extends Model
{
    public function customerLoads() 
    {
        return $this->hasMany(CustomerLoad::class);
    }
}
