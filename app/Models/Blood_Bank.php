<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood_Bank extends Model
{
    use HasFactory;

    public function donations(){

        return $this->hasMany(Donation::class);
    }
}
