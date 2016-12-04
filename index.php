<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'bd/conexion.php';
/*require_once 'controller/empleados_controller.php';

$controler = new empleado_controller();

if(!empty($_REQUEST['m'])){
    
    $metodo= $_REQUEST['m'];
    if(method_exists($controler,$metodo)){
        $controler->$metodo();
    }else{
        $controler->index();
    }
    
}else{
    $controler->index();
}
*/
$controller = 'characters';

if(!isset($_REQUEST['c'])){

	require_once 'controller/'.$controller.'_controller.php';
	$controller = $controller.'_controller';
	$controller = new $controller;
	$controller->index();

}else{

	//obtenemos el controlador que queremos cargar.
	$controller = strtolower($_REQUEST['c']);
	$accion= isset($_REQUEST['a'])?$_REQUEST['a']:'index';

	//instaciamos el controlador
	require_once 'controller/'.$controller.'_controller.php';
	$controller = $controller.'_controller';
	$controller = new $controller;

	//Llama la accion
	call_user_func(array($controller,$accion));	
}

?>