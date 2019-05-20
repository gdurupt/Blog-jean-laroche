<?php

class PostManager{
//--------------------------------------------------------------------------------------------//      
    private $_articleManager;
    private $_commentManager;
//--------------------------------------------------------------------------------------------//         
       public function __construct($data)
  {
    $this->hydrate($data);
  }
//--------------------------------------------------------------------------------------------//  
  public function hydrate($eventPost)
  {
 
      $method = ucfirst($eventPost);
      
        if (method_exists($this, $method)){
        $this->$method();
      }
  }
//--------------------------------------------------------------------------------------------//   
        public function article(){
        $this->_articleManager = new ArticleManager;
    }    
        public function comment(){
        $this->_commentManager = new CommentManager;
    }
 
//--------------------------------------------------------------------------------------------//     
//--------------------------------POST PAGE ADMIN ARTICLE-------------------------------------//    
//--------------------------------------------------------------------------------------------//
     public function UpdateArticle(){
            $this->article();
            $this->_articleManager->updateArticle($_GET['id'], $_POST['titre'], $_POST['article']);
            header('location: admin&page=page&id='.$_GET['id']);
    }   
//--------------------------------------------------------------------------------------------//
         public function New(){
          $this->article();
          $this->_articleManager->newArticle($_POST['titre'], $_POST['article']);
          header('location: admin&page=page');      
    }
//--------------------------------------------------------------------------------------------//  
        public function DeleteArticle(){
         $this->article();  
         $this->_articleManager->getDeleteArticle($_POST['deleteArticle']);
         header('location: admin&page=page&id='.$_GET['id']); 
    }   
//--------------------------------------------------------------------------------------------//     
//--------------------------------POST PAGE ADMIN Comment-------------------------------------//    
//--------------------------------------------------------------------------------------------//   
        public function DeleteComment(){
         $this->comment();  
         $this->_commentManager->getDeleteComment($_POST['deleteComment']);
         header('location: admin&page=commentaire&id='.$_GET['id']); 
    }     
//--------------------------------------------------------------------------------------------//       
        public function ManageComment(){
         $this->comment();  
         $this->_commentManager->getReportComment($_POST['ManageComment'],"0");
                header('location: admin&page=commentaire&id='.$_GET['id']);
    }     
//--------------------------------------------------------------------------------------------//
//-----------------------------------POST PAGE Chapitre---------------------------------------//    
//--------------------------------------------------------------------------------------------// 
        public function NewComment(){
            $this->comment();  
            $this->_commentManager->AddComment($_POST['name'], $_POST['message'], $_GET['id']);         
            header('location: chapitre&id='.$_GET['id']);   
    }        
//--------------------------------------------------------------------------------------------//    
        public function ReportComment(){
            $this->comment();  
            $this->_commentManager->getReportComment($_POST['reportComment'],"1");
            header('location: chapitre&id='.$_GET['id']);
    } 
//--------------------------------------------------------------------------------------------//
//-----------------------------------POST PAGE Contact----------------------------------------//    
//--------------------------------------------------------------------------------------------//
        public function Contact(){
       
        $from = $_POST['email'];
 
        $to = "g.durupt88@hotmail.fr";
 
        $subject =  $_POST['nom'] ;
 
        $message = $_POST['message'];
 
        $headers = "From: " .$from;
 
        mail($to,$subject,$message, $headers);
    
        header('location: contact'); 
      
    } 
//--------------------------------------------------------------------------------------------//
//-----------------------------------POST PAGE Login------------------------------------------//    
//--------------------------------------------------------------------------------------------//    
        public function ManageLogin(){
            $_SESSION['login'] = $_POST['pseudo'];
            $_SESSION['password'] = $_POST['password'];
            header('location: admin');
    }  
//--------------------------------------------------------------------------------------------//     
}
