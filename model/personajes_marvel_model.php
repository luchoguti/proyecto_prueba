<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class personajes_marvel_model{
    
    private $key_public;
    private $key_privada;
    private $personajes;
    private $limit;
    function __construct() {
        $this->key_public = '5eebda6a09ba3c58d7985c922db74477';
        $this->key_privada = 'df4756cd183ded54af400dd681e89a670da1d3da';
        $this->personajes = array();
        $this->limit = '100';
    }
            
    function get(){
        $name='';
        $orderBy='';
        $this->get_query_api($name, $orderBy);
        return json_decode($this->personajes, true);
    }
    
    function get_query_name($nameStartsWith){
        $orderBy='';
        $this->get_query_api($nameStartsWith, $orderBy);
        return json_decode($this->personajes, true);
        
    }
            
    function get_query_api($name,$orderBy){
        // To create a new TimeStamp
        $date = new DateTime();
        $timestamp=$date->getTimestamp();

        $keys=$this->key_privada.$this->key_public;
        // Add the timestamp to the keys
        $string=$timestamp.$keys;
        //Generate MD5 digest, also hash is faster than md5 function
        $md5=hash('md5', $string);
        // create a new cURL resource
        $ch = curl_init();
        // set URL and other appropriate options
        $query_name=($name!='')?'&nameStartsWith='.$name:'';
        $query_orderBy=($orderBy!='')?'&orderBy='.$orderBy:'';
        
        curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com:80/v1/public/characters?ts=$timestamp&limit=$this->limit$query_name$query_orderBy&apikey=$this->key_public&hash=$md5");
        
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json')                                                                       
        );   
        // grab URL and pass it to the browser
         //Execute curl
        $this->personajes=curl_exec($ch) or die(curl_error()); 
        //Format JSON output
        //echo str_replace('\\/', '/', $output);
        // close cURL resource, and free up system resources
        curl_close($ch);
        
    }
}

?>