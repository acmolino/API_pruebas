<?php

namespace App\Models;

class Persona extends Model{
    /**
     * Configura la tabla a usar
     * 
     */
    protected $table = 'persona';

    /**
     * Que campos no moostrar
     * 
     * 
     */
    protected $hidden = [
        'updated_at',
        'created_at',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;



}