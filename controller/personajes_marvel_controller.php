<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//incluir archivos php modelos
include_once 'model/personajes_marvel_model.php';

class personajes_marvel_controller{
    
    private $model_person_marvel;
    
    function __construct() {
        $this->model_person_marvel = new personajes_marvel_model();
    }
            
    function index(){

        $title = "Todos los personajes";
        $query = $this->model_person_marvel->get();
        require_once 'view/header.php';
        require_once 'view/index.php';
        require_once 'view/modalComics.php';
        require_once 'view/footer.php';

    }
    
    function autocomplete_personaje(){
        $nameStartsWith=$_POST['string_autocomplete'];
        $sort=$_POST['sort'];
        $title = "Busqueda Personajes";
        $query = $this->model_person_marvel->get_query_name($nameStartsWith,$sort);

        return require_once 'view/index.php';

    }
}