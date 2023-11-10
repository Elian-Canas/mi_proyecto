<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get("/transaction", function() {
    return "Hola desde la pagina de transacciones";
});

Route::get("/categories", function() {
    return "Hola desde la pagina de categorias";
});

Route::get("/dashboard", function() {
    return "Hola desde el tablero de transacciones";
});

Route::get('/transaction/:slug', function($slug) {
    return "Registra tu ultima transacción en $slug";
});

Route::dispatch();