<?php    
    namespace App;
    
    use FW\Init\Boostrap;
    
    class Route extends Boostrap{
     
        public function initRoutes(){
            
            
            //Exemplo de Rota    
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            //Exemplo de Rota    
            $routes['teste'] = array(
                'route' => '/teste',
                'controller' => 'IndexController',
                'action' => 'teste'
            );

            $routes['form'] = array(
                'route' => '/form',
                'controller' => 'IndexController',
                'action' => 'form'
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