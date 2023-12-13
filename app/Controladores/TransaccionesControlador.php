<?php

namespace App\Controladores;

use App\Models\Categorias;
use App\Models\Transacciones;
use App\Models\Usuarios;


class TransaccionesControlador extends Controlador
{

    public function index_login()
    {
        $modelo = new Usuarios;
        $usuario = $modelo->all();

        return $this->view('transacciones.login', compact('usuario'));
    }

    public function login()
    {
        $usuario = $_POST['usuario'];
        $clave = $_POST['contraseña'];

        $inicio = new Usuarios;

        $resultado = $inicio->login($usuario, $clave);

        if (isset($resultado)) {
            session_start();
            print_r($resultado);
            $id = $resultado['id'];
            $_SESSION['id'] = $id;
            $_SESSION['nombres'] = $resultado['nombres'];
            $_SESSION['apellidos'] = $resultado['apellidos'];

            print_r($_SESSION['nombres']);

            print_r($_SESSION['apellidos']);
            
            header("Location: /transacciones/{$id}");

        } else {
            echo "Datos de ingreso INCORRECTOS.";
            return;
        }
    }

    public function index($id)
    {
        $modelo = new Transacciones;
        $inicio = new Usuarios;
        $resultado = $inicio->find($id);
        $transacciones = $modelo->all_tr($id);
        session_start();
        $id = $_SESSION['id'];

        return $this->view('transacciones.index', compact('transacciones', 'resultado', 'id'));
    }

    public function create($id)
    {
        $modelo = new Categorias;

        $categorias = $modelo->all();
        $inicio = new Usuarios;
        $resultado = $inicio->find($id);



        return $this->view('transacciones.create', compact('categorias', 'resultado'));
    }

    public function store($id)
    {
        // retornar parametros del formulario
        if (($_POST['monto'] === "" || $_POST['fecha'] === "" || $_POST['descripcion'] === "" || $_POST['tipo'] === "")) {
            return $this->view('transacciones.create');
        } else {
            $inicio = new Usuarios;
            $resultado = $inicio->find($id);
            $datos = $_POST;

            $modelo = new Transacciones;
            $modelo->create($datos, $resultado['id']);

            return $this->redirect("/transacciones/{$id}");
        }
    }


    public function edit($id)
    {

        $modelo = new Transacciones;
        $modeloCategorias = new Categorias;
        $transacciones = $modelo->find($id);
        $categorias = $modeloCategorias->all();
        session_start();
        $id = $_SESSION['id'];


        return $this->view('transacciones.edit', compact('transacciones', 'categorias', 'id'));
    }

    public function create_category()
    {
        $modelo = new Categorias;

        $categorias = $modelo->all();
        return $this->view('transacciones.create_category', compact('categorias'));
    }



    public function index_category()
    {
        $modelo = new Categorias;
        session_start();
        $id = $_SESSION['id'];

        $categorias = $modelo->all();
        return $this->view('transacciones.index_category', compact('categorias', 'id'));
    }

    public function index_dashboard()
    {

        session_start();
        $id = $_SESSION['id'];
        $nombre = $_SESSION['nombres'];
        $apellido = $_SESSION['apellidos'];

        $modelo = new Transacciones;
        $ingresos = $modelo->ingreso($id);
        $gastos = $modelo->gasto($id);
        $grafica = $modelo->grafica($id);
        


        return $this->view('transacciones.index_dashboard', compact('grafica', 'ingresos', 'gastos', 'id', 'nombre', 'apellido'));
    }

    public function store_category()
    {
        //retornar parametros del formulario
        $datos = $_POST;
        if (($_POST['nombre'] === "")) {
            return $this->view('transacciones.create_category');
        } else {
            $datos = $_POST;
            $modelo = new Categorias;
            $modelo->create_category($datos);
            session_start();

            return $this->redirect("/categorias");
        }
    }


    public function update($id)
    {
        $datos = $_POST;

        $modelo = new Transacciones;

        $modelo->update($id, $datos);
        session_start();
        $id = $_SESSION['id'];

        return $this->redirect("/transacciones/{$id}");
    }

    public function destroy($id)
    {
        $modelo = new Transacciones;
        $transacciones = $modelo->find($id);

        $modelo->delete($id);
        session_start();
        $id = $_SESSION['id'];

        return $this->redirect("/transacciones/{$id}");
    }


    public function edit_category($id)
    {

        // $modelo = new Transacciones;
        $modeloCategorias = new Categorias;
        // $transacciones = $modelo->find($id);
        $categorias = $modeloCategorias->find($id);


        return $this->view('transacciones.edit_category', compact('categorias'));
    }

    public function update_category($id)
    {
        $datos = $_POST;

        $modelo = new Categorias;

        $modelo->update($id, $datos);
        return $this->redirect("/categorias");
    }

    public function destroy_category($id)
    {

        $modelo = new Categorias;
        $transacciones = $modelo->find($id);

        $modelo->delete($id);


        return $this->redirect("/categorias");
    }

}
