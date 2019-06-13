<?php

require_once 'views/View.php';

class ControllerChapitre{
    
    private $_articleManager;
    private $_commentManager;
    private $_view;
    private $_postManager;
    
    public function __construct($url){     
        
        if (isset($url) && count($url) > 1) {       
            throw new \Exception("Page Introuvable"); 
            
        }else {       
            $this->pageChapitre();     
        }   
    }
    
    private function pageChapitre(){     
       
        if(isset($_POST['Post'])){
            $this->$_postManager = new PostManager($_POST['Post']);
        }
        
        $this->_articleManager = new ArticleManager;
        
        $this->_commentManager = new CommentManager; 
        
        $articles = $this->_articleManager->getArticleOne(NULL,$_GET['id']);
        
        $comments = $this->_commentManager->getCommentOfArticle();
                                             
        $this->_view = new View('Chapitre');
        $this->_view->generate(array('articles' => $articles,'comments' => $comments));
        
    }
}