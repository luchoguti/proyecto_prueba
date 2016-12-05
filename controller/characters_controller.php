<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * Contains all methods and attributes related to characters and comics.
 */

include_once 'model/characters_model.php';
include_once 'model/comics_model.php';

class characters_controller{
    
    private $model_characters;
    private $model_comics;
    //The variables to be used in the controller are initialized.       
    public function __construct() {
        $this->model_characters = new characters_model();
        $this->model_comics = new comics_model();
    }
    //This method queries all the characters in the model_characters model and prints them in the index view.       
    public function index(){

        $title = "All characters";
        $query = $this->model_characters->get();
        require_once 'view/header.php';
        require_once 'view/index.php';
        require_once 'view/footer.php';

    }
    //This method the characters indexed in the search, query in the model_characters model and prints them in the index view.
    public function autocomplete_characters(){
        $nameStartsWith=$_POST['string_autocomplete'];
        $sort=$_POST['sort'];
        $title = "Search characters";
        $query = $this->model_characters->get_query_name($nameStartsWith,$sort);

        return require_once 'view/index.php';

    }
    //This method brings comics associated with a character, queries them in the model_comics model and prints them in the modal_comics view.
    public function character_comics_partners(){
        $id_character= $_POST['id_character'];
        $add_comics= json_decode($_POST['add_fav'],true);
        $query_comics= $this->model_comics->get_comics($id_character);
        return require_once 'view/modal_comics.php';
    }
}