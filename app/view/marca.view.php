<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class MarcaView
{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
      
    }

    //mostrar navv
    public function showNav($marcas){
     
        $this->smarty->assign('marcas', $marcas);

        $this->smarty->display('header.tpl');        
    }


    function showMarcasAll($marcas) {
        //asignar variables al tpl smarty
     $this->smarty->assign('marcas', $marcas); 
     
         //mostrar el tpl q quiero
      $this->smarty->display('marcaList.tpl');    
    }


    function showAddForm($marcas, $error = null){

        $this->smarty->assign('marcas', $marcas);  


        $this->smarty->assign('error', $error);
        $this->smarty->display('forms.tpl');
    }


     function showEditMarcaForm($id){

        $this->smarty->assign('marca', $id);
        $this->smarty->display('formEditMarca.tpl');
     }


    }
