<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//incluir archivos php modelos
include_once 'model/characters_model.php';
include_once 'model/comics_model.php';

class characters_controller{
    
    private $model_characters;
    private $model_comics;
            
    function __construct() {
        $this->model_characters = new characters_model();
        $this->model_comics = new comics_model();
    }
            
    function index(){

        $title = "All characters";
        $query = $this->model_characters->get();
        require_once 'view/header.php';
        require_once 'view/index.php';
        require_once 'view/footer.php';

    }
    
    function autocomplete_characters(){
        $nameStartsWith=$_POST['string_autocomplete'];
        $sort=$_POST['sort'];
        $title = "Search characters";
        $query = $this->model_characters->get_query_name($nameStartsWith,$sort);

        return require_once 'view/index.php';

    }
    
    function character_comics_partners(){
        $id_character= $_POST['id_character'];
        $query_comics= $this->model_comics->get_comics($id_character);
        return require_once 'view/modal_comics.php';
    }
}