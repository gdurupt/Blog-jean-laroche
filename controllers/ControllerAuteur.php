<?php

require_once 'views/View.php';

class ControllerAuteur{
    
    private $_view;
    
    public function __construct($url){     
        
        if (isset($url) && count($url) > 1) {       
            throw new \Exception("Page Introuvable"); 
            
        }else {       
            $this->pageAuteur();     
        }   
    }
    
    private function pageAuteur(){     
        
        $this->_view = new View('Auteur');     
        $this->_view->generate(array());
    }
}