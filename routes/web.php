<?php

use Lib\Route;
use App\Controladores\TransaccionesControlador;

Route::get('/', [TransaccionesControlador::class, 'index_login']);
Route::post('/', [TransaccionesControlador::class, 'login']);

Route::get("/transacciones/:id", [TransaccionesControlador::class, 'index']);
Route::get("/transacciones/:id/create", [TransaccionesControlador::class, 'create']);
Route::post("/transacciones/:id/create", [TransaccionesControlador::class, 'store']);

Route::get("/dashboard/:id", [TransaccionesControlador::class, 'index_dashboard']);

Route::get("/categorias", [TransaccionesControlador::class, 'index_category']);
Route::post("/categorias", [TransaccionesControlador::class, 'store_category']);

Route::get("/transacciones/create_category", [TransaccionesControlador::class, 'create_category']);
Route::post("/categorias/:id/delete", [TransaccionesControlador::class, 'destroy_category']);
Route::get("/categorias/:id/edit", [TransaccionesControlador::class, 'edit_category']);
Route::post("/categorias/:id", [TransaccionesControlador::class, 'update_category']);




Route::get("/transacciones/:id/edit", [TransaccionesControlador::class, 'edit']);
Route::post("/transacciones/:id/edit", [TransaccionesControlador::class, 'update']);
Route::post("/transacciones/:id/delete", [TransaccionesControlador::class, 'destroy']);

Route::dispatch();
