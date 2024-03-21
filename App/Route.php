<?php    
    namespace App;
    
    use FW\Init\Boostrap;
    
    class Route extends Boostrap{
     
        public function initRoutes(){
            
            $routes['formcadastro'] = array(
                'route' => '/form-cadastro',
                'controller' => 'CadastroController',
                'action' => 'formCadastro'
            );

            $routes['cadastrar'] = array(
                'route' => '/cadastrar',
                'controller' => 'CadastroController',
                'action' => 'inserir'
            );

            $routes['listar'] = array(
                'route' => '/listar',
                'controller' => 'CadastroController',
                'action' => 'listar'
            );

            $routes['listar-id'] = array(
                'route' => '/listar-id',
                'controller' => 'CadastroController',
                'action' => 'listarPorId'
            );

            $routes['atualizar'] = array(
                'route' => '/atualizar',
                'controller' => 'CadastroController',
                'action' => 'atualizar'
            );

            $routes['excluir'] = array(
                'route' => '/excluir',
                'controller' => 'CadastroController',
                'action' => 'excluir'
            );
            
            //Não excluir a Rota abaixo
            $routes['error-404'] = array(
                'route' => '/error404',
                'controller' => 'ErrorController',
                'action' => 'error404'
            );
                                  
            $this->setRoutes($routes);
            
        }

    }
    
?>