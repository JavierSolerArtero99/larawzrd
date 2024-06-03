<?php

namespace Wzrd\CalandraTexDomain\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtOrder extends Model
{
    use HasFactory;

    protected $table = 'ct_order';

    protected $fillable = [
        'albaran',
        'rollos',
        'piezas',
        'metros',
        'ancho_entrada',
        'ancho_final',
        'presentacion',
        'cortar_a',
        'cara_buena',
        'cinta',
        'tablilla',
        'num_bolo',
        'piezas_de',
        'observaciones_1',
        'observaciones_2',
        'observaciones_3',
        'observaciones_4',
    ];
}
