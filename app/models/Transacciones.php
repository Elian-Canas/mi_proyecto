<?php

namespace App\Models;
class Transacciones extends Modelo
{
    protected $table = 'transacciones';

    public function all()
    {

        //SELECT * FROM transacciones
        $sql = "SELECT t.*,c.nombre AS categoria FROM transacciones t LEFT JOIN categorias c ON t.categoria_id = c.id ORDER BY t.fecha DESC;";
        return $this->query($sql)->get();
    }

}

