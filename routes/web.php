<?php

use Lib\Route;
use App\Controladores\HomeController;
use App\Controladores\LoginControlador;
use App\Controladores\DashboardControlador;

// Route::get('/', [HomeController::class, 'index']);
// Route::post('/', [LoginControlador::class, 'login']);

Route::get("/dashboard", [DashboardControlador::class, 'index']);
Route::get("/dashboard/create_user", [DashboardControlador::class, 'create_user']);
Route::post("/dashboard", [DashboardControlador::class, 'store']);

Route::get('/dashboard/:id', [DashboardControlador::class, 'show']);
Route::get("/dashboard/:id/create_transaction", [DashboardControlador::class, 'create_transaction']);
Route::post("/dashboard/:id", [DashboardControlador::class, 'store_transaction']);
Route::get("/dashboard/:id/edit", [DashboardControlador::class, 'edit']);
Route::post("/dashboard/:id/", [DashboardControlador::class, 'update']);
Route::post("/dashboard/:id/delete", [DashboardControlador::class, 'destroy']);

Route::dispatch();
