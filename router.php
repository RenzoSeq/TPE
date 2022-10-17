<?php
require_once './app/controllers/shoes.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/marca.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

//Instancio controller. 
$shoesController = new ShoesController();
$marcasController = new MarcaController();
$authController = new AuthController();
// tabla de ruteo
switch ($params[0]) {

    case 'home':

        $marcasController->showNav();
        $shoesController->showAllShoes();

        break;

    case 'item':
        $marcasController->showNav();

            if (!empty($params[1])){
                $shoesController->showShoe($params[1]);
            }
            else{
                $shoesController->showAllShoes();
            }
        break;
    
    case 'sortby':
        $marcasController->showNav();

            if(!empty($params[1])){
                $shoesController->sortBy($params[1]);
            }
            else{
                $shoesController->showAllShoes();
            }
        break;    

    
    case 'login':
        $marcasController->showNav();
        
        $authController->showFormLogin();
        break;

    case 'logout':


            $authController->logout();
            break;    

    case 'validate':
       
        $authController->validateUser();
        break;

    case 'admin':
        $marcasController->showNav();
    
        $marcasController->showAddForm();
            break;

    case 'add':
        $marcasController->showNav();
        $shoesController->addShoes();
        break;
    case 'addMarca':
        $marcasController->addMarca();
        break;    
    case 'marcas':
        $marcasController->showAllMarcas();
        break;  
    case 'categoria':
            $marcasController->editFormMARCAS($params[1]);  
        break;

    case 'editarMarca':
        $marcaController->editMarca($params[1]); 
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $shoesController->deleteShoes($id);
        break;
    case 'editarShoe':
            $shoesController->editShoe($params[1]);
    case 'shoeEdit':
           $shoesController->editFormSHOES($params[1]);
          break;  
    default:
        echo('404 Page not found');
        break;
}