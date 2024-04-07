<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
protected $table='posts';  
protected $primaryKey='id';  
protected $fillable = ['title','name','hello'];


}
