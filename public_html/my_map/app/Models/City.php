<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function disticts()
    {
        return $this->hasMany(Distict::class);
    }

    public function toilets()
    {
        return $this->hasMany(Toilet::class);
    }
}
