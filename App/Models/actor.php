<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor'; // Nombre de la tabla
    protected $primaryKey = 'actor_id'; // Clave primaria
    public $timestamps = false; // defino si la tabla tiene timestamps

    public function films()
{
    return $this->belongsToMany(Film::class, 'film_actor', 'actor_id', 'film_id');
}

    
}

?>