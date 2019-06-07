<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function trailerDestination()
    {
        return $this->hasOne(TrailerDestination::class);
    }
}
