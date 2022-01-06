<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tretman extends Model
{
    use HasFactory;

    public function termini()
    {
        return $this->hasMany(Termin::class);
    }
}
