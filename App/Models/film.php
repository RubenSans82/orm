<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film'; // Nombre de la tabla
    protected $primaryKey = 'film_id'; // Clave primaria
    public $timestamps = false; // defino si la tabla tiene timestamps

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actor', 'film_id', 'actor_id');
    }

}

?>