<?php

require_once 'views/View.php';

class ControllerLivre{
    
    private $_articleManager;
    private $_view;
    
    public function __construct($url){     
        
        if (isset($url) && count($url) > 1) {       
            throw new \Exception("Page Introuvable"); 
            
        }else {       
            $this->pageLivre();     
        }   
    }
    
    private function pageLivre(){     
        
        $this->_articleManager = new ArticleManager;
        $articles = $this->_articleManager->getArticlesSUBSTRING();
        
        $this->_view = new View('Livre');     
        $this->_view->generate(array('articles' => $articles));
    }
}