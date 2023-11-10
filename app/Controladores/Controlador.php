<?php

namespace App\Controladores;

class Controlador
{
    public function view($route, $data = []) 
    {
        extract($data);

        $route = str_replace('.', '/', $route);

        if(file_exists("../views/{$route}.php")) {

            ob_start();
            include "../views/{$route}.php";
            $content = ob_get_clean();

            return $content;

        } else {
            return "El archivo no existe";
        }
    }
}