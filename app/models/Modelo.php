<?php

namespace App\Models;
use mysqli;
class Modelo
{
    
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;
    protected $connection;
    protected $query;
    protected $table;

    public function __construct() 
    {
        $this->connection();
    }

    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if( $this->connection->connect_error) {
            die ("Error de conexión: " .  $this->connection->connect_error); 
        }
    }

    public function query($sql)
    {
        $this->query = $this->connection->query($sql);

        return $this;

    }

    public function first () 
    {
        return $this->query->fetch_assoc();
    }

    public function get() 
    {
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }


    //Consultas

    public function all()
    {

        //SELECT * FROM transacciones
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->get();
    }

    public function find($id)
    {
        //SELECT * FROM transacciones WHERE id = 1
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
        return $this->query($sql)->first();
    }

    public function ingreso()
    {
        //SELECT nombre FROM categorias INNER JOIN transacciones ON categorias.id = transacciones.categoria_id
        $sql = "SELECT t.*,c.nombre AS categoria FROM transacciones t LEFT JOIN categorias c ON t.categoria_id = c.id WHERE t.tipo = 'ingreso' ORDER BY `t`.`fecha` DESC;
        ";
        return $this->query($sql)->get();
    }

    public function gasto()
    {
        //SELECT nombre FROM categorias INNER JOIN transacciones ON categorias.id = transacciones.categoria_id
        $sql = "SELECT t.*,c.nombre AS categoria FROM transacciones t LEFT JOIN categorias c ON t.categoria_id = c.id WHERE t.tipo = 'gasto' ORDER BY `t`.`fecha` DESC;
        ";
        return $this->query($sql)->get();
    }

    public function grafica()
    {
        //SELECT nombre FROM categorias INNER JOIN transacciones ON categorias.id = transacciones.categoria_id
        $sql = "SELECT c.nombre AS categoria, SUM(monto) AS porcentaje FROM transacciones t LEFT JOIN categorias c ON t.categoria_id = c.id WHERE c.nombre <> 'ingresos' GROUP BY C.nombre;
        ;
        ";
        return $this->query($sql)->get();
    }


    public function where($column, $operator, $value = null) 
    {
        if($value == null) 
        {
            $value = $operator;
            $operator = '=';
        }


        //SELECT * FROM transacciones WHERE name = 'Juan'
        $sql = "SELECT * FROM {$this->table} WHERE {$column} {$operator} '{$value}'";
        $this->query($sql);

        return $this;
    }

    public function create($data) 
    {
        // INSERT INTO transacciones (id, categoria_id, monto, fecha, tipo, descripcion) VALUES ('', '', '', '', '', '')
        $columns = array_keys($data);
        $columns = implode(', ', $columns);

        $values = array_values($data);
        $values = "'" . implode("', '", $values). "'";

        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$values})";

        $this->query($sql);

        $insert_id = $this->connection->insert_id;
        return $this->find($insert_id);
    }

    public function update($id, $data)
    {
        //UPDATE transacciones SET categoria_id = '', monto = '', fecha = '', tipo = '', descripcion = '' WHERE id = 1

        $fields = [];

        foreach($data as $key => $value) 
        {
            $fields[] = "{$key} =  '$value'";
             
        }
        $fields= implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE id = {$id}";

        $this->query($sql);
        return $this->find($id);

    }

    public function delete($id)
    {
        //DELETE  FROM transacciones WHERE id = 1
        
        $sql = "DELETE FROM {$this->table} WHERE id = {$id}";

        $this->query($sql);
    }
}