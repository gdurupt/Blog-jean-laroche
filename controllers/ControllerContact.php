<?php

require_once 'views/View.php';

class ControllerContact{
    
    private $_view;
    private $_postManager;
    
    public function __construct($url){     
        
        if (isset($url) && count($url) > 1) {       
            throw new \Exception("Page Introuvable"); 
            
        }else {       
            $this->pageContact();     
        }   
    }
    
    private function pageContact(){     
        
        if(isset($_POST['Post'])){
            $this->$_postManager = new PostManager($_POST['Post']);
        }
           
        $this->_view = new View('Contact'); 
        $this->_view->generate(array());
        
    }
}