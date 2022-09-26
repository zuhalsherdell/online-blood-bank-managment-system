<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    public function  user(){

        return $this->belongsTo(User::class);  
      }

 public function recipients(){

    return $this->belongsTo(Recipients::class);
 }
 public function donors(){

    return $this->belongsTo(Donors::class);

 }
 public function bloodbank(){
    return $this->belongsTo(Blood_Bank::class);
 }

}
