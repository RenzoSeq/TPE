<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ShoesView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
     
    }



    function showShoes($shoes) {
           //asignar variables al tpl smarty
        $this->smarty->assign('shoes', $shoes); 
        
            //mostrar el tpl q quiero
        $this->smarty->display('shoeslist.tpl');    
}
 

   function showShoe($shoe){
            
            $this->smarty->assign('shoe', $shoe);  
            //mostrar el tpl q quiero
            $this->smarty->display('shoe.tpl');   

   }


    function showEditFormShoes($id){
        $this->smarty->assign('shoe', $id);
        $this->smarty->display('formEditShoes.tpl');

    }


}