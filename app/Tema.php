<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    protected $fillable =['id', 'nombre', 'header-color', 'primary-color', 'secondary-color', 'detalles-color',
                        'destatitle-color', 'destacados-color'];
}
