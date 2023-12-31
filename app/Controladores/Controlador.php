<?php

namespace App\Controladores;

class Controlador
{
    public function view($route, $data = [])
    {
        extract($data);

        $route = str_replace('.', '/', $route);

        if (file_exists("../views/{$route}.php")) {

            ob_start();
            include "../views/{$route}.php";
            $content = ob_get_clean();

            return $content;
        } else {
            return "El archivo no existe";
        }
    }

    public function view_dashboard($route, $data = [])
    {
        extract($data);

        $route = str_replace('.', '/', $route);

        if (file_exists("../views/{$route}.html")) {

            ob_start();
            include "../views/{$route}.html";
            $content = ob_get_clean();

            return $content;
        } else {
            return "El archivo no existe";
        }
    }
    public function redirect($route, $id = null)
    {
        header("Location: {$route}/{$id}");
    }
}
