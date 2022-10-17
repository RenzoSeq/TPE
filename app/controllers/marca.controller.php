<?php
require_once './app/models/marca.model.php';
require_once './app/view/marca.view.php';


class MarcaController
{

    private $model;
    private $view;
    private $helper;


    public function __construct()
    {
        $this->model = new MarcaModel();
        $this->view = new MarcaView();

        $this->helper = new AuthHelper;
        
    }


    function showAllMarcas(){

        $marcas = $this->model->getAllMarcas();
    
    
        $this->view->showMarcasAll($marcas);

    }

    //editar una cat
    function editFormMARCAS($id){

        $this->view->showEditMarcaForm($id);
    }


    function editMarca($id){
        $this->authHelper->checkLoggedIn();  

        $nombre = $_POST['nombre'];   
        $descripcion = $_POST['descripcion'];
        $origen = $_POST['origen'];

        $this->model->editCategory($id, $nombre, $descripcion, $origen);
     
        header("Location: " . BASE_URL);
  
        
     }


    function showAddForm(){
        $this->helper->checkLoggedIn();
    
        $marcas = $this->model->getAllMarcas(); 
        $this->view->showAddForm($marcas);
    
      
    }

    //manejar nav
    public function showNav(){

        $marcas= $this->model->getAllMarcas();

        $this->view->showNav($marcas);
    }
    
     //agg marca

    public function addMarca(){
       
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $origen = $_POST['origen'];
        
            $this->model->addMarca($id,$nombre,$descripcion,$origen); 
            header("Location: " . BASE_URL); 
        }

    

   
} 