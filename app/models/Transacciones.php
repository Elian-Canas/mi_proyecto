<?php

namespace App\Models;
class Transacciones extends Modelo
{
    protected $table = 'transacciones';

    public function all_tr($id)
    {

        //SELECT * FROM transacciones
        $sql = "SELECT t.*,c.nombre AS categoria FROM transacciones t LEFT JOIN categorias c ON t.categoria_id = c.id WHERE t.login_id = $id ORDER BY fecha DESC";
        
        return $this->query($sql)->get();
    }

}

