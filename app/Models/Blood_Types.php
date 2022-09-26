<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood_Types extends Model
{
    use HasFactory;
    public function recipients(){

        return $this->hasMany(Recipients::class);
    }
    public function donation(){

        return $this->hasMany(Donation::class);
    }
}
