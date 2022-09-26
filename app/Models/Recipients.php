<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipients extends Model
{
    use HasFactory;

    public function bloodtypes(){

        return $this->belongsTo(Blood_Types::class);
    }

    public function donations(){

        return $this->hasMany(Donation::class);
    }
}
