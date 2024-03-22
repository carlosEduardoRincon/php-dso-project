<?php

    namespace App\Controller;

    use App\DAO\CadastroDAO;
    use FW\Controller\Action;
    use App\Model\CadastroModel;
    
    class CadastroController extends Action {
        
        public function formCadastro() {
            $this->render('formcadastro', 'dashboard');
        }

        public function formListUnic() {
            $this->render('formListUnic', 'dashboard');
        }
        
        public function inserir() {
            $cadastro = new CadastroModel();
            $cadastro->__set('nomeCad', $_POST['nome']);
            $cadastroDao = new CadastroDAO();
            $cadastroDao->inserir($cadastro);

            header('Location: /listar');
        }

        public function listar() {
            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->listar();

            $this->getView()->cadastro = $cadastro;
            $this->render('listar', 'dashboard');
        }

        public function listarPorId() {
            $idCad = $_GET['idCad'];

            $cadastro = new CadastroModel();
            $cadastro->__set('idCad', $idCad);
            
            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->buscarPorId($cadastro);

            $this->getView()->cadastro = $cadastro;
            $this->render('listar', 'dashboard');
        }

        public function atualizar() {
            $idCad = $_GET['idCad'];
            $nomeCad = $_GET['nomeCad'];

            $cadastro = new CadastroModel();
            $cadastro->__set('idCad', $idCad);
            $cadastro->__set('nomeCad', $nomeCad);

            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->alterar($cadastro);

            header('Location: /listar');
        }

        public function excluir() {
            $idCad = $_GET['idCad'];

            $cadastro = new CadastroModel();
            $cadastro->__set('idCad', $idCad);
            
            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->excluir($cadastro);

            header('Location: /listar');
        }

        public function validaAutenticacao() {}
    }
?>