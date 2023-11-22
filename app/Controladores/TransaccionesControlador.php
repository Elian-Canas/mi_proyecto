<?php

namespace App\Controladores;

use App\Models\Categorias;
use App\Models\Transacciones;


class TransaccionesControlador extends Controlador
{
    public function index()
    {
        $modelo = new Transacciones;
        //$modeloCategorias = new Categorias;

        $transacciones = $modelo->all();
        // $categorias = $modeloCategorias->find_category("categoria_id");


        return  $this->view('transacciones.index', compact('transacciones'));
    }
    public function create()
    {
        $modelo = new Categorias;

        $categorias = $modelo->all();


        return $this->view('transacciones.create', compact('categorias'));
    }


    public function edit($id)
    {

        $modelo = new Transacciones;
        $modeloCategorias = new Categorias;
        $transacciones = $modelo->find($id);
        $categorias = $modeloCategorias->all();


        return  $this->view('transacciones.edit', compact('transacciones', 'categorias'));
    }

    public function create_category()
    {
        $modelo = new Categorias;

        $categorias = $modelo->all();
        return $this->view('transacciones.create_category', compact('categorias'));
    }

    public function store()
    {
        // retornar parametros del formulario
        if (($_POST['monto'] === "" || $_POST['fecha'] === "" || $_POST['descripcion'] === "" || $_POST['tipo'] === "")) {
            return $this->view('transacciones.create');
        } else {
            $datos = $_POST;
            $modelo = new Transacciones;
            $modelo->create($datos);

            return $this->redirect("/transacciones");
        }
    }

    public function index_category()
    {
        $modelo = new Categorias;

        $categorias = $modelo->all();
        return $this->view('transacciones.index_category', compact('categorias'));
    }

    public function index_dashboard()
    {
        $modelo = new Categorias;

        $categorias = $modelo->all();
        return $this->view('transacciones.dashboard', compact('categorias'));
    }

    // public function show()
    // {
    //     $modelo = new Transacciones;
    //     // $modeloCategorias = new Categorias;
    //     // $categorias = $modeloCategorias->all();

    //     $transacciones = $modelo->all();

    //     return  $this->view('transacciones.show', compact('transacciones'));
    // }



    public function store_category()
    {
        //retornar parametros del formulario
        $datos = $_POST;
        if (($_POST['nombre'] === "")) {
            return $this->view('transacciones.create_category');
        } else {
            $datos = $_POST;
            $modelo = new Categorias;
            $modelo->create($datos);

            return $this->redirect("/transacciones");
        }
    }


    public function update($id)
    {
        $datos = $_POST;

        $modelo = new Transacciones;

        $modelo->update($id, $datos);
        print_r($modelo);
        return $this->redirect("/transacciones");
    }

    public function destroy($id)
    {
        $modelo = new Transacciones;
        $transacciones = $modelo->find($id);

        $modelo->delete($id);

        return $this->redirect("/transacciones");
    }
}
