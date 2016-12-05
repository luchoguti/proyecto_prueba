<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Contains the addresses of the controllers.
 */

require_once 'bd/conexion.php';
$controller = 'characters';

if(!isset($_REQUEST['c'])){

    require_once 'controller/'.$controller.'_controller.php';
    $controller = $controller.'_controller';
    $controller = new $controller;
    $controller->index();

}else{

    //get the driver we want to load.
    $controller = strtolower($_REQUEST['c']);
    $accion= isset($_REQUEST['a'])?$_REQUEST['a']:'index';

    //We instantiate the controller
    require_once 'controller/'.$controller.'_controller.php';
    $controller = $controller.'_controller';
    $controller = new $controller;

    //Call the action
    call_user_func(array($controller,$accion));	
}

?>