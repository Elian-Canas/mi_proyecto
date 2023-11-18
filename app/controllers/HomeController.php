<?php

namespace App\Controllers;
use App\Models\Finance;
class HomeController extends Controller
{
    public function index()
        {
            $financeModel = new Finance();

            return $this->view("home", [
                "title"=> "Home",
                "description"=> "Esta es la pagina Home",
            ]);
        }
}