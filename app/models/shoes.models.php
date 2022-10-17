<?php


class ShoesModel {
 
    private $db;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_zapatillas;charset=utf8', 'root', '');
  }
     


// Obtengo todos los pares
function getAllShoes() {
   
    $query = $this->db->prepare("SELECT * FROM zapatillas");
    $query->execute();

    $shoes = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $shoes;
}

//obtengo solo un par
function getShoe($id){

  $query= $this->db->prepare("SELECT * FROM zapatillas WHERE id = ?");
  $query->execute([$id]);

  $shoe =$query->fetch(PDO::FETCH_OBJ);

  return $shoe;

}
//obtengo sorted
function getSortedShoes($id){

  $query = $this->db->prepare("SELECT a.* FROM zapatillas a INNER JOIN marca b ON a.id_marca = b.id WHERE b.id = ?;");
  $query->execute([$id]);

  $shoes = $query->fetchAll(PDO::FETCH_OBJ);

  return $shoes;

}

 // Inserta una zapas en la base de datos.

function insertShoes($modelo, $color, $talle,$precio,$marca) {
    
    $query = $this->db->prepare("INSERT INTO zapatillas (modelo, color, talle, precio, id_marca) VALUES (?, ?, ?, ?, ?)");
    $query->execute([$modelo, $color, $talle,$precio,$marca]);

    return $this->db->lastInsertId();
}


  //Elimina unas zapas dado su id.
 
function deleteShoesById($id) {
  $query = $this->db->prepare('DELETE FROM zapatillas WHERE id = ?');
  $query->execute([$id]);
}


 //EDITAR UN ITEM 
 
function editShoe($id, $modelo, $color, $talle, $precio){
  $query = $this->db->prepare("UPDATE  zapatillas SET  `modelo` =? ,  `color`=?, `talle`=?, `precio`=? WHERE `zapatillas`.`id` = ?;");
  $query->execute([$modelo, $color, $talle, $precio, $id]); 
}


}



