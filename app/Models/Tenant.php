<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;


    public function rent() 
    {
       //return $this->hasOne(Rent::class);
       return $this->hasMany(Rent::class);
    }

    public function rent_latest() 
    {
    return $this->hasOne(Rent::class)->ofMany('rent', 'min');
    }
}
