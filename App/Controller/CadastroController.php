<?php

    namespace App\Controller;

    use App\DAO\CadastroDAO;
    use FW\Controller\Action;
    use App\Model\CadastroModel;
    
    class CadastroController extends Action {
        
        public function formCadastro() {
            $this->render('formcadastro', 'dashboard');
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
            $cadastro = new CadastroModel();
            $cadastro->__set('idCad', $_POST['idCad']);
    
            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->buscarPorId($cadastro);

            $this->getView()->cadastro = $cadastro;
            $this->render('listar', 'dashboard');
        }

        public function atualizar() {

            $cadastro = new CadastroModel();
            $cadastro->__set('idCad', $_POST['idCad']);
            $cadastro->__set('nomeCad', $_POST['nomeCad']);

            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->alterar($cadastro);

            $this->getView()->cadastro = $cadastro;
            $this->render('listar', 'dashboard');
        }

        public function excluir() {
            $cadastro = new CadastroModel();
            $cadastro->__set('idCad', $_POST['idCad']);
            
            $cadastroDAO = new CadastroDAO();
            $cadastro = $cadastroDAO->excluir($cadastro);

            $this->getView()->cadastro = $cadastro;
            $this->render('listar', 'dashboard');
        }

        public function validaAutenticacao() {}
    }
?>