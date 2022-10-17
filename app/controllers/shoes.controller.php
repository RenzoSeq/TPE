<?php
require_once './app/models/shoes.models.php';
require_once './app/models/marca.model.php';
require_once './app/view/shoes.view.php';
require_once './helpers/auth.helper.php';


class ShoesController {

    private $model;
    private $view;
    private $helper; 

   public function __construct(){
    
    $this->model =new ShoesModel();
    $this->view = new ShoesView();
   
    $this->helper = new AuthHelper;
    
   } 



//mostrar tdas las zapas
function showAllShoes(){
    

    $shoes = $this->model->getAllShoes();
    
    
    $this->view->showShoes($shoes);
  
}   

//mostrar de a una zapa
function showShoe($id){
    
    $shoe = $this->model->getShoe($id);
   
    $this->view->showShoe($shoe);
}

//filtrar por nav
public function sortBy($id){

    $products = $this->model->getSortedShoes($id);
    
    $this->view->showShoes($products);

}


//editShoe
function editFormSHOES($id){
    $this->view->showEditFormShoes($id);
}


function editShoe($id){
    $this->helper->checkLoggedIn();

    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];

   $this->model->editShoe($id, $modelo, $color, $talle, $precio);
   
   header("Location: " . BASE_URL); 
   
}

// agg zapas
function addShoes() {
    
    $this->helper->checkLoggedIn();


    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    $marca = $_POST['marcaid'];

     $this->model->insertShoes($modelo, $color, $talle,$precio,$marca);

    header("Location: " . BASE_URL); 
}

//elimina 

function deleteShoes($id) {
    $this->model->deleteShoesById($id);
        header("Location: " . BASE_URL); 
}





}


