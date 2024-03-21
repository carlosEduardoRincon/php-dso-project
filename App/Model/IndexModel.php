<?php

namespace App\Model;

class IndexModel{
    private $id;
    private $nome;


    public function __set($nome, $valor){
        $this->$nome = $valor;
    }

    public function __get($nome){
        return $this->$nome;
    }

    /*
    
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }
    
    */


}