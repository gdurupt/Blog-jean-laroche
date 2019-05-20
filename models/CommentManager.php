<?php

class CommentManager extends Model{
//--------------------------------------------------------------------------------------------//    
    public function getCommentOfArticle(){       
        $update = 'SELECT * FROM commentaire WHERE page = ? ORDER by id';
        $execute = array($_GET['id']);
        return $this->selectTable('Comment',$update, $execute);    
    }
//--------------------------------------------------------------------------------------------//    
    public function addComment($login, $message, $page){           
        $update = '(logins, comments, page, dateComment,report) VALUES(:logins, :comments, :page, NOW(), 0)';
        $execute =array(
	       'logins' => $login,
	       'comments' => $message,
	       'page' => $page
        );
        return $this->addTable('commentaire', $update, $execute);
    }
 //--------------------------------------------------------------------------------------------//   
    public function getAllComment(){       
        $update = 'SELECT * FROM commentaire';
        $execute = NULL;
        return $this->selectTable('Comment',$update, $execute);     
    }
 //--------------------------------------------------------------------------------------------//   
    public function getDeleteComment($id){       
        return $this->deleteTable('commentaire', $id);     
    }
 //--------------------------------------------------------------------------------------------//   
    public function getReportComment($id,$obj){       
        $update = ' SET report = :report WHERE id = '.$id;
        $execute =array(
	       'report' => $obj
        );
        return $this->updateTable('commentaire', $update, $execute);     
    }
 //--------------------------------------------------------------------------------------------//   
    public function getCountComment(){        
        $update = 'SELECT COUNT(*) AS nbreport FROM commentaire WHERE report > 0';
        $execute = NULL;
        return $this->selectTable('Comment',$update, $execute);       
    }
 //--------------------------------------------------------------------------------------------//   
}