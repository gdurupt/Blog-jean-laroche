<?php
require_once 'views/View.php';

class Router{
    
    private $ctrl;
    private $view;
    
    public function routeReq(){
        
        try{
            
            spl_autoload_register(function($class){         
            //autoloading of classes         
            
            require_once('models/'.$class.'.php');
            
            });
        
            
            //the controller is found according to user action        
            if (isset($_GET['url'])) {         
                
                $url = explode( '/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                
                
                $controller = ucfirst(strtolower($url[0])); //Suppossons que url = accueil on aura donc $controller = Accueil.      
                //retrieve the good controller
                
                $controllerClass = "Controller".$controller; // ControllerAccueil      
                $controllerFile = "controllers/".$controllerClass.".php"; // controller/ControllerAccueil.php        
                
                if (file_exists($controllerFile)) {           
                    require_once($controllerFile);           
                    $this->ctrl = new $controllerClass($url); // new = ControllerAccueil(accueil)
                }         
                else {           
                    throw new \Exception("Page Introuvable");  // Page erreur        
                }
                
            }else {         
                require_once('controllers/ControllerAccueil.php');         
                
                $this->ctrl = new ControllerAccueil($url);   
            }
                    
            
        }catch (\Exception $e) {        
            $errorMsg = $e->getMessage();       
            
            $this->_view = new View('Error');       
            
            $this->_view->generate(array('errorMsg' => $errorMsg));      
        }
            
        
    }
}
