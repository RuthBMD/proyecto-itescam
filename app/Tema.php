<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    /**
     * Los atributos de la tabla Tema que son asignables (o volátiles)
     */
    protected $fillable =[
        'nombre',
        'header-color',
        'primary-color',
        'secondary-color',
        'detalles-color',
        'destatitle-color',
        'destacados-color'
    ];

    /**
     * Los atributos de la tabla que NO deben aparecer en el Array o Json al momento
     * de hacer 
     * ```
     * <?php  Model->toArray()  ?>
     * ``` 
     * o 
     * ```
     * <?php  Model->toJson() ?>
     * ```
     * **Ejemplo:**
     * ```
     * <?php
     *    $temas = App\Tema::all();
     *    return View('vista', [ 'json' => $temas->toJson() ]);
     * ?>
     * ```
     * *veáse*: [Serializing to JSON](https://laravel.com/docs/5.3/eloquent-serialization#serializing-to-json), 
     * [Hidding Atributtes](https://laravel.com/docs/5.3/eloquent-serialization#hiding-attributes-from-json)
     */
    protected $hidden = [];
}
