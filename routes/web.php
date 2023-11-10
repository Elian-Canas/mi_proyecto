<?php

use Lib\Route;

Route::get('/', function() {
    echo "Hola desde la pagina principal";
});

Route::get("/transaction", function() {
    echo "Hola desde la pagina de transacciones";
});

Route::get("/categories", function() {
    echo "Hola desde la pagina de categorias";
});

Route::get("/dashboard", function() {
    echo "Hola desde el tablero de transacciones";
});

Route::dispatch();