<?php

namespace App\Model;

class CadastroModel {
    private $idCad;
    private $nomeCad;

    public function __set($nome, $valor){
        $this->$nome = $valor;
    }

    public function __get($nome){
        return $this->$nome;
    }

}