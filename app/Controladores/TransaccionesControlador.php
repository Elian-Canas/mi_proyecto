<?php

namespace App\Controladores;

use App\Models\Categorias;
use App\Models\Transacciones;


class TransaccionesControlador extends Controlador
{
    public function index()
    {
        $modelo = new Categorias;
        $nombres = $modelo->all();

        return $this->view('transacciones.index', compact('nombres'));
    }

    public function create_user()
    {
        return $this->view('transacciones.create_user');
    }

    public function store()
    {
        // retornar parametros del formulario
        if (($_POST['monto'] === "" || $_POST['fecha'] === "" || $_POST['descripcion'] === "" || $_POST['tipo'] === "")) {
            return $this->view('transacciones.create_transaction');
        } else {
            $datos = $_POST;
            $modelo = new Transacciones;
            $modelo->create($datos);

            return $this->redirect("/transacciones");
        }
    }
        // print_r($datos);
        // return;
        // if (empty($_POST['crear'])) {
        //     if (empty($datos)) {
        //         echo "UNO DE LOS CAMPOS ESTÁ VACIO";
        //     } else {
        //     }

        // return $this->redirect('/transacciones');
    


    public function show()
    {
        $modelo = new Transacciones;
        $modeloCategorias = new Categorias;
        $id = 10;
        $categorias = $modeloCategorias->find($id);

        $transacciones = $modelo->find_transaccion($id);

        return  $this->view('transacciones.show', compact('transacciones', 'categorias'));
    }

    public function create_transaction()
    {
        $id = 10;
        $modeloCategorias = new Categorias;

        $categorias = $modeloCategorias->find($id);


        return $this->view('transacciones.create_transaction', compact('categorias'));
    }

    public function store_transaction($id)
    {
        //retornar parametros del formulario
        $datos = $_POST;
        if (empty($_POST['crear'])) {
            if (empty($datos)) {
                echo "UNO DE LOS CAMPOS ESTÁ VACIO";
            }

            // $modelo = new Transacciones;
            // $modelo->create($datos);

            // return $this->redirect("/transacciones/{$id}");
        }
    }
    public function edit($id)
    {

        $modelo = new Transacciones;
        $modeloCategorias = new Categorias;


        $transacciones = $modelo->find($id);

        // $categorias = $modeloCategorias->find($id);
        return  $this->view('transacciones.edit', compact('transacciones'));
    }

    public function update($id)
    {
        $datos = $_POST;

        $modelo = new Transacciones;

        $modelo->update($id, $datos);

        return $this->redirect("/transacciones/{$datos['categoria_id']}");
    }

    public function destroy($id)
    {
        $modelo = new Transacciones;
        $transacciones = $modelo->find($id);

        $modelo->delete($id);

        return $this->redirect("/transacciones/{$transacciones['categoria_id']}");
    }
}
