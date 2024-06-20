<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    use HasFactory;

    // Especifica la tabla que este modelo utilizará
    protected $table = 'base';

    protected $fillable = [
        'autorizacionPFuncionar',
        'planesNacion',
        'registro',
        'cierre',
        'denominacionUsual',
        'denominacionRegistro',
        'domicilioLegal',
        'telefono',
        'mail',
        'sede',
        'cuit',
        'ejerciciosAdeudados',
        'mora',
        'retiroAutorizacionPFuncionar',
        'emplazamiento',
        'ultimaAgo',
        'expediente',
        'ultBalance',
        'observaciones',
        'contitucion',
        'canceladas',

    ];
}
