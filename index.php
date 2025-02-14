<?php

require 'vendor/autoload.php';
require 'database.php';

use App\Models\Actor;

// Obtener todos los actores
$actors = Actor::all();
foreach ($actors as $actor) {
    echo "ID: {$actor->actor_id}, Nombre: {$actor->first_name} {$actor->last_name}\n<br>";
}

// Encontrar un actor por ID
$actor = Actor::find(1);
echo "Actor encontrado: {$actor->first_name} {$actor->last_name}\n<br>";

// Buscar actores con un apellido específico
$actors = Actor::where('last_name', 'LIKE', 'J%')->get();
foreach ($actors as $actor) {
    echo "Nombre: {$actor->first_name} {$actor->last_name}\n<br>";
}

// Crear un nuevo actor
$newActor = new Actor();
$newActor->first_name = 'John';
$newActor->last_name = 'Doe';
$newActor->last_update = date('Y-m-d H:i:s');
$newActor->save();
echo "Nuevo actor creado: {$newActor->first_name} {$newActor->last_name}\n<br>";

// Actualizar un actor existente
$actor = Actor::find(1);
$actor->last_name = 'UpdatedName';
$actor->save();
echo "Actor actualizado: {$actor->first_name} {$actor->last_name}\n<br>";

// Eliminar un actor
$actor = Actor::find(201); // Cambia el ID a uno existente
if ($actor) {
    $actor->delete();
    echo "Actor eliminado: ID {$actor->actor_id}\n<br>";
} else {
    echo "Actor no encontrado para eliminar.\n<br>";
}
