<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class conexion{
    
    public static function getconnection(){
        $conn= new mysqli("localhost", "root", "abc123", "inventarios");
        $conn->query("SET NAME 'utf8'");
        return $conn;
                
    }
    
}