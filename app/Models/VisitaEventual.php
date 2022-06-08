<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaEventual extends Model
{
    use HasFactory;

    public function tipovisita(){
        return $this->belongsTo(TipoVisita::class, "tipo_visita_id", "id");
    }
}
