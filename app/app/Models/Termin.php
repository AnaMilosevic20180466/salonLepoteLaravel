<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresaLokala', 
        'vreme',
        'kozmeticar_id',
        'tretman_id'



    ];


    public function tretman()
    {
        return $this->belongsTo(Tretman::class);
    }
    public function kozmeticar()
    {
        return $this->belongsTo(Kozmeticar::class);
    }
}
