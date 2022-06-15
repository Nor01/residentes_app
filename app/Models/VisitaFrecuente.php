<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaFrecuente extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "notas",
        "tipo_visita_id"
    ];

    public function tipovisita(){
        return $this->belongsTo(TipoVisita::class, "tipo_visita_id", "id");
    }



}
