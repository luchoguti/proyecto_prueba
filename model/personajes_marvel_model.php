<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class personajes_marvel_model{
    
    private $DB;
    private $empleados;
    
    function __construct() {
        $this->DB = conexion::getconnection();
        $this->empleados = array();
    }
            
    function get(){
       /* $query=$this->DB->query("SELECT * FROM empleados INNER JOIN departamentos USING(idempledos)");
        while ($fila=$query->fetch_assoc()){
            $this->empleados[]= $fila;
        }
        return $this->empleados;*/
    }
  
}

?>