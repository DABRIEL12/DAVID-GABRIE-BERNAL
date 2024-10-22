<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    protected $table = 'infracciones';

    protected $fillable = [
        'dni',
        'fecha',
        'placa',
        'infraccion',
        'descripcion',
    ];
}
