<?php

    namespace App\Controller;
    
    use FW\Controller\Action;
    use App\Model\IndexModel;
    
    class IndexController extends Action{

        //o método index vai renderizar o conteúdo de view/index.php e colocar dentro da dashboard na área especificada
        public function index(){    
            $this->getView()->title = "DASHBOARD";         
            $this->render('index', 'dashboard');
        }

        public function teste(){    
            $this->getView()->title = "DASHBOARD";         
            $this->render('teste', 'dashboard');
        }

        public function form(){  
            $nome = $_POST['nome'];
            $form = new IndexModel();
            $form->__set('nome', $nome);
            $this->getView()->title = "Página de Resposta";
            $this->getView()->nome = $form->__get('nome'); 

            $this->render('resposta_form', 'dashboard');
        }
          
	public function validaAutenticacao() {}
    }
    
?>
