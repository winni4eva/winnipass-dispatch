<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TrailerDriverLoad;

class Driver extends Model
{
    public function trailerDriverLoad()
    {
        return $this->hasMany(TrailerDriverLoad::class);
    }
}
