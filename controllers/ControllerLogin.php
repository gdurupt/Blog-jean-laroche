<?php

require_once 'views/View.php';

class ControllerLogin{
    
    private $_view;
    private $_postManager;
    
    public function __construct($url){     
        
        if (isset($url) && count($url) > 1) {       
            throw new \Exception("Page Introuvable"); 
            
        }else {       
            $this->pageLogin();     
        }   
    }
    
    private function pageLogin(){     
        
        if(isset($_POST['Post'])){
            $this->$_postManager = new PostManager($_POST['Post']);
        }
            $this->_view = new View('Login');     
            $this->_view->generate(array());
    }
}
