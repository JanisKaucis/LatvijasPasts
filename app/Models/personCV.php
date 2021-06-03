<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personCV extends Model
{
    use HasFactory;
    protected $fillable = [
      'vards',
      'uzvards',
      'talrunis',
      'epasts',
        'valsts',
        'indekss',
        'pilseta',
        'iela',
        'izglitiba',
        'fakultate',
        'izglitibas_limenis',
        'statuss',
        'par_izglitibu',
        'darbs',
        'amats',
        'slodze',
        'stazs',
        'par_darbu',
        'prasmes',
        'valoda',
        'valodas_limenis',
        'citas_prasmes',
        'intereses',
        'papildus_info'
    ];
}
