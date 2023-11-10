<?php

namespace App\Controladores;
use App\Models\Transacciones;
// use App\Models\Categorias;
class HomeController extends Controlador
{
    public function index()
        {
            $financeModel = new Transacciones();

            $financeModel->delete(5);

            return "ELIMINADO";
            //   $this->view('home', [
            //     '' => ''
            //   ]);

             

        }
}