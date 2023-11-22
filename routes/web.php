<?php

use Lib\Route;
use App\Controladores\HomeController;
use App\Controladores\LoginControlador;
use App\Controladores\TransaccionesControlador;

Route::get('/', [HomeController::class, 'index']);
// Route::post('/', [LoginControlador::class, 'login']);

Route::get("/transacciones", [TransaccionesControlador::class, 'index']);
Route::get("/transacciones/create", [TransaccionesControlador::class, 'create']);
Route::post("/transacciones/create", [TransaccionesControlador::class, 'store']);

Route::get("/dashboard", [TransaccionesControlador::class, 'index_dashboard']);

Route::get("/categorias", [TransaccionesControlador::class, 'index_category']);
Route::post("/categorias", [TransaccionesControlador::class, 'store_category']);

Route::get("/transacciones/create_category", [TransaccionesControlador::class, 'create_category']);

Route::get("/transacciones/:id/edit", [TransaccionesControlador::class, 'edit']);
Route::post("/transacciones/:id/", [TransaccionesControlador::class, 'update']);
Route::post("/transacciones/:id/delete", [TransaccionesControlador::class, 'destroy']);

Route::dispatch();
