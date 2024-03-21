<?php

namespace App\DAO;

use App\DAO;
use App\Model\CadastroModel;
use FFI\Exception;

class CadastroDAO extends DAO {

    public function inserir ($obj){ 
        $nome = $obj->__get("nomeCad");
        $sql = "INSERT INTO cadastro (nomeCad) VALUES (:nome)";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }

    public function excluir ($obj){
        $id = $obj->__get("idCad");
        $sql = "DELETE FROM cadastro WHERE idCad = :id";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function alterar ($obj){
        $id = $obj->__get("idCad");
        $nome = $obj->__get("nomeCad");
        $sql = "UPDATE cadastro SET nomeCad = :nome WHERE idCad = :id";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }

    public function buscarPorId ($obj){
        $id = $obj->__get("idCad");
        $sql = "SELECT * FROM cadastro WHERE idCad = :id";
        $stmt = $this->getConn()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function listar(){
        try {
            $cadastro = array();
            
            $sql = "SELECT * FROM cadastro ORDER BY idCad ASC";
            $stmt = $this->getConn()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            
            foreach($result as $row) {
                $cad = new CadastroModel();
                $cad->__set('idCad', $row['idCad']);
                $cad->__set('nomeCad', $row['nomeCad']);
                array_push($cadastro, $cad);
            }

            return $cadastro;
        } catch (\PDOException $ex) {
            header('Location: /error103');
            die();
        }
    }
}