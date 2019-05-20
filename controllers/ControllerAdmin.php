<?php

require_once 'views/View.php';

class ControllerAdmin{
    
    private $_articleManager;
    private $_loginsManager;
    private $_view;
    private $_commentManager;
    private $_postManager;
    
    public function __construct($url){     
        
        if (isset($url) && count($url) > 1) {       
            throw new \Exception("Page Introuvable"); 
            
        }else {       
            $this->pageAdmin();     
        }   
    }
    
    private function pageAdmin(){     
        
        
        if(isset($_SESSION['login']) AND isset($_SESSION['password'])){
//--------------------------------------------------------------------------------------------//            
            $this->_loginsManager = new LoginsManager;       
            $this->_loginsManager->getLogin($_SESSION['login'], $_SESSION['password']);
//--------------------------------------------------------------------------------------------//
            if(isset($_POST['Post'])){
               $this->$_postManager = new PostManager($_POST['Post']);
            }
//--------------------------------------------------------------------------------------------//             
            $this->_articleManager = new ArticleManager;
            $articles = $this->_articleManager->getArticles();
//--------------------------------------------------------------------------------------------//
            $this->_commentManager = new CommentManager;
            $comments = $this->_commentManager->getAllComment();  
            $countComment = $this->_commentManager->getCountComment();           
//--------------------------------------------------------------------------------------------//       
            if(isset($_GET['page'])){
                $this->_view = new View('Admin'.$_GET['page']);              
            }else{
                $this->_view = new View('Admin');
            }
//--------------------------------------------------------------------------------------------//  
            $this->_view->generate(array('articles' => $articles,'comments' => $comments,'countComment' => $countComment));        
        }else{
            header('location: login');     
        }
               
    }
}