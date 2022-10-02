<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labtechnicians extends Model
{
    
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];

    public function bloodBank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
