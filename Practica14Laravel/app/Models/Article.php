<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'nom',
        'descripcio',
        'color',
        'preu_compra',
        'preu_venta',
        'enviament_domicili',
        'stock',
        'observacions'
    ];
    
    protected $hidden = [];
}
