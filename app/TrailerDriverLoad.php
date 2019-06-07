<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TrailerDestination;

class TrailerDriverLoad extends Model
{
    public function trailerDestination()
    {
        return $this->hasOne(TrailerDestination::class);
    }
}
