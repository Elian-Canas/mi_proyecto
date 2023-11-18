<?php

namespace App\Controladores;

use App\Models\Categorias;
use App\Models\Transacciones;


class DashboardControlador extends Controlador
{
    public function index()
    {
        $modelo = new Categorias;
        $nombres = $modelo->all();

        return $this->view('dashboard.index', compact('nombres'));
    }

    public function create_user()
    {
        return $this->view('dashboard.create_user');
    }

    public function store()
    {
        //retornar parametros del formulario
        $datos = $_POST;

        $modelo = new Categorias;
        $modelo->create($datos);

        return $this->redirect('/dashboard');
    }

    public function show($id)
    {
        $modelo = new Transacciones;
        $modeloCategorias = new Categorias;

        $categorias = $modeloCategorias->find($id);

        $transacciones = $modelo->find_transaccion($id);

        return  $this->view('dashboard.show', compact('transacciones', 'categorias'));
    }

    public function create_transaction($id)
    {

        $modeloCategorias = new Categorias;

        $categorias = $modeloCategorias->find($id);


        return $this->view('dashboard.create_transaction', compact('categorias'));
    }

    public function store_transaction($id)
    {
        //retornar parametros del formulario
        $datos = $_POST;

        $modelo = new Transacciones;
        $modelo->create($datos);

        return $this->redirect("/dashboard/{$id}");
    }
    public function edit($id)
    {

        $modelo = new Transacciones;
        $modeloCategorias = new Categorias;


        $transacciones = $modelo->find($id);

        // $categorias = $modeloCategorias->find($id);
        return  $this->view('dashboard.edit', compact('transacciones'));    }

    public function update($id)
    {
        $datos = $_POST;

        $modelo = new Transacciones;

        $modelo->update($id, $datos);

        return $this->redirect("/dashboard/{$datos['categoria_id']}");

    }

    public function destroy($id)
    {
        $modelo = new Transacciones;
        $transacciones = $modelo->find($id);

        $modelo->delete($id);

        return $this->redirect("/dashboard/{$transacciones['categoria_id']}");
    }
}
