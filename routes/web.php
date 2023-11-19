<?php

use Lib\Route;
use App\Controladores\HomeController;
use App\Controladores\LoginControlador;
use App\Controladores\TransaccionesControlador;

Route::get('/', [HomeController::class, 'index']);
// Route::post('/', [LoginControlador::class, 'login']);

Route::get("/transacciones", [TransaccionesControlador::class, 'show']);
Route::get("/transacciones/create_transaction", [TransaccionesControlador::class, 'create_transaction']);
Route::post("/transacciones", [TransaccionesControlador::class, 'store']);

// Route::get("/transacciones/create_user", [TransaccionesControlador::class, 'create_user']);

// Route::get('/transacciones/:id', [TransaccionesControlador::class, 'show']);
Route::post("/transacciones/:id", [TransaccionesControlador::class, 'store_transaction']);
Route::get("/transacciones/:id/edit", [TransaccionesControlador::class, 'edit']);
Route::post("/transacciones/:id/", [TransaccionesControlador::class, 'update']);
Route::post("/transacciones/:id/delete", [TransaccionesControlador::class, 'destroy']);

Route::dispatch();
