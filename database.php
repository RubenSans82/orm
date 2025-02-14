<?php

require 'vendor/autoload.php'; // Autocarga de Composer
require 'config.php'; // Configuración de la base de datos

use Illuminate\Database\Capsule\Manager as Capsule;

// Configurar Eloquent
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',               // Tipo de base de datos (mysql, sqlite, pgsql, sqlsrv)
    'host'      => HOST,           // Dirección del servidor
    'database'  => DB_DATABASE,   // Nombre de tu base de datos
    'username'  => DB_USER,             // Usuario de la base de datos
    'password'  => DB_PASS,          // Contraseña de la base de datos
    'charset'   => 'utf8',                // Juego de caracteres
    'collation' => 'utf8_unicode_ci',     // Collation
    'prefix'    => '',                    // Prefijo para tablas (opcional)
]);

// Hacer que Eloquent esté disponible globalmente
$capsule->setAsGlobal();

// Iniciar Eloquent
$capsule->bootEloquent();

?>