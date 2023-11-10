<?php

spl_autoload_register(function ($class) {
    $ruta = '../' . str_replace("\\", "/", $class) . ".php";
    if(file_exists($ruta)) {
        require_once $ruta;
    } else {
        die ("No se puede cargar la clase $class");
    }
});