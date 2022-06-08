<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVisita extends Model
{
    use HasFactory;

    public function visitafrecuente(){
        return $this->hasMany(VisitaFrecuente::class);
    }

    public function visitaeventual(){
        return $this->hasMany(VisitaEventual::class);
    }
}
