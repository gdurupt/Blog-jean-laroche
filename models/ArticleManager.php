<?php

class ArticleManager extends Model{
//--------------------------------------------------------------------------------------------//    
    public function getArticles(){
        $update = 'SELECT * FROM page ORDER by id';
        $execute = NULL;
        return $this->selectTable('Article', $update, $execute);     
    }
//--------------------------------------------------------------------------------------------//    
    public function getArticlesSUBSTRING(){       
        $update = 'SELECT id, titre, SUBSTRING(contenus FROM 1 FOR 300) as contenus FROM page';
        $execute = NULL;
        return $this->selectTable('Article', $update, $execute);      
    }
//--------------------------------------------------------------------------------------------//   
    public function getArticleOne(){       
        $update = 'SELECT * FROM page WHERE id = ?';
        $execute = array($_GET['id']);
        return $this->selectTable('Article', $update, $execute);     
    }
//--------------------------------------------------------------------------------------------//    
    public function updateArticle($id, $newTitle, $newArticle){             
        $update = ' SET titre = :titre, contenus = :contenus, dateCrea = NOW() WHERE id = :id';
        $execute = array(
	       'titre' => $newTitle,
	       'contenus' => $newArticle,
	       'id' => $id
	);      
        return $this->updateTable('page', $update, $execute);      
    } 
//--------------------------------------------------------------------------------------------//    
    public function newArticle($newTitle, $newArticle){       
        $update = '(titre, idLivre, contenus, dateCrea) VALUES(:titre, 1, :contenus, NOW())';;
        $execute = array(
	       'titre' => $newTitle,
	       'contenus' => $newArticle
	       );
        
        return $this->addTable('page', $update, $execute);     
    }
//--------------------------------------------------------------------------------------------//    
    public function getDeleteArticle($id){       
        return $this->deleteTable('page', $id);       
    }
//--------------------------------------------------------------------------------------------//
}