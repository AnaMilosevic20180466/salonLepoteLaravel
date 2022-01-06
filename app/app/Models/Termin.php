<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;

    public function tretman()
    {
        return $this->belongsTo(Tretman::class);
    }
    public function kozmeticar()
    {
        return $this->belongsTo(Kozmeticar::class);
    }
}
