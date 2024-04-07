<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent extends Model
{
    use HasFactory;

    public function tenant(): BelongsTo
    {
       //return $this->hasOne(Rent::class);
       return $this->belongsTo(Tenant::class);
    }

}
