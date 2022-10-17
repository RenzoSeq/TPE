<?php

class MarcaModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_zapatillas;charset=utf8', 'root', '');
    }


    //mostrar todas las catt
     function getAllMarcas(){
      
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();
      
        $marcas = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $marcas;
      
      }

    //agg cate

    function addMarca($id,$nombre,$descripcion,$origen){
        $query = $this->db->prepare("INSERT INTO marca (id , nombre, descripcion, origen)VALUES (?,?,?,?)");
        $query->execute([$id,$nombre,$descripcion,$origen]);
      
        return $this->db->lastInsertId();
      }

    
    //edit cat

    function editCategory($id, $nombre, $descripcion, $origen){

      $query = $this->db->prepare("UPDATE `marca` SET `nombre` = ?, `descripcion` = ?, `origen` = ? WHERE `marca`.`id` = ?;");
      $query->execute([$nombre, $descripcion, $origen, $id]);

    }
    }