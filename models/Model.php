<?php

abstract class Model
{

  private static $_bdd;
//--------------------------------------------------------------------------------------------//     
//--------------------------------           BDD          ------------------------------------//    
//--------------------------------------------------------------------------------------------//
  private static function setBdd(){
    self::$_bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }
//--------------------------------------------------------------------------------------------//     
//--------------------------------Recuperation de la BDD--------------------------------------//    
//--------------------------------------------------------------------------------------------//
  protected function getBdd(){
    if (self::$_bdd == null) {
      self::setBdd();
      return self::$_bdd;
    }
  }
//--------------------------------------------------------------------------------------------//     
//--------------------------------    MODEL   SELECT     -------------------------------------//    
//--------------------------------------------------------------------------------------------//
  protected function selectTable($obj, $update, $execute){
    $this->getBdd();
    $var = [];
    $req = self::$_bdd->prepare($update);
    $req->execute($execute);

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {

        $var[] = new $obj($data);
    }

    return $var;
    $req->closeCursor();
  }
//--------------------------------------------------------------------------------------------//     
//--------------------------------    MODEL   INSERT     -------------------------------------//    
//--------------------------------------------------------------------------------------------//   
    protected function addTable($table, $update, $execute){
    $this->getBdd();
    $req = self::$_bdd->prepare('INSERT INTO '.$table.$update);
    $req->execute($execute);
  }
//--------------------------------------------------------------------------------------------//     
//--------------------------------MODEL Secure pass & login-----------------------------------//    
//--------------------------------------------------------------------------------------------//   
    protected function secureAdmin($table, $login, $pass){
    
        $this->getBdd();
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' WHERE logins = :login');
        $req->execute(array(
        'login' => $login));
        $resultat = $req->fetch();

        $isPasswordCorrect = password_verify($pass, $resultat['pass']);

        if (!$resultat){     
            header('location: login');
        }else{
         if ($isPasswordCorrect){
            }else{
             header('location: login');
    }
   }
  }
//--------------------------------------------------------------------------------------------//     
//--------------------------------     MODEL  UPDATE     -------------------------------------//    
//--------------------------------------------------------------------------------------------//  
    protected function updateTable($table, $update, $execute){
    $this->getBdd();
    $req = self::$_bdd->prepare('UPDATE '.$table.$update);
    $req->execute($execute);
  }
//--------------------------------------------------------------------------------------------//     
//--------------------------------     MODEL DELETE      -------------------------------------//    
//--------------------------------------------------------------------------------------------//    
    protected function deleteTable($table, $id){
    $this->getBdd();
    $req = self::$_bdd->prepare('DELETE FROM '.$table.' WHERE id = '.$id);
    $req->execute();
  }
}
?>
