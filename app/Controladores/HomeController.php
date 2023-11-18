<?php

namespace App\Controladores;
use App\Models\Transacciones;
// use App\Models\Categorias;
class HomeController extends Controlador
{
    public function index()
        {

            return $this->view('home');

            // $financeModel = new Transacciones();

            // $financeModel->delete(5);

            // return "ELIMINADO";
             

        }
}