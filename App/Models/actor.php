<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor'; // Nombre de la tabla
    protected $primaryKey = 'actor_id'; // Clave primaria
    public $timestamps = false; // defino si la tabla tiene timestamps

    protected $fillable = ['first_name', 'last_name', 'last_update']; // Defino los campos que puedo modificar
    
}

?>