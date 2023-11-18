<?php

namespace App\Controladores;

use App\Models\Usuarios;
class LoginControlador extends Controlador
{

    public function login()
    {
        if (!empty($_POST["btningresar"])) {

            if (empty($_POST["usuario"]) and empty($_POST["password"])) {
                echo '<div class= "alert alert-danger"> LOS CAMPOS ESTAN VACIOS </div>';
            } else {
                $usuario = $_POST["usuario"];
                $clave = $_POST["password"];

                $loginModel = new Usuarios;

                $sql = " SELECT * FROM usuarios WHERE usuario ='$usuario' AND clave ='$clave'";

                // $loginModel->query($sql);

                // $datos = mysqli_num_rows($loginModel);
               

                // if (condition) {
                //     # code...
                // } else {
                //     # code...
                // }
                
                
                // if ($datos=$loginModel->fetch_object()) {
                //    return $datos;
                // } else {
                //     echo '<div class= "alert alert-danger"> ACCESO DENEGADO </div>';
                // }
            }
        }
    }
}
