<?php

use Lib\Route;
use App\Controladores\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get("/transaction", function() {
    return "Hola desde la pagina de transacciones";
});

Route::get("/dashboard", function() {
    return "Hola desde el tablero de transacciones";
});

Route::get('/transaction/:slug', function($slug) {
    return "Registra tu ultima transacción en $slug";
});

Route::dispatch();