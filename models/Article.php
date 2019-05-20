<?php
class Article{
//--------------------------------------------------------------------------------------------//
  private $_id;
  private $_titre;
  private $_contenus;
  private $_dateCrea;  
//--------------------------------------------------------------------------------------------//  
  public function __construct(array $data)
  {
    $this->hydrate($data);

  }
//--------------------------------------------------------------------------------------------//
  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set'.ucfirst($key);
      
        if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }
//--------------------------------------------------------------------------------------------//
  public function setId($id)
  {
    $id = (int) $id;
    if ($id > 0) {
      $this->_id = $id;
    }
  }

  public function setTitre($titre)
  {
    if (is_string($titre)) {
      $this->_titre = $titre;
    }

  }

  public function setContenus($contenus)
  {
    if (is_string($contenus)) {
      $this->_contenus = $contenus;
    }
  }

  public function setDateCrea($date)
  {
    $this->_dateCrea = $date;
  }
//--------------------------------------------------------------------------------------------//
  public function id()
  {
    return $this->_id;
  }

  public function titre()
  {
    return $this->_titre;
  }

  public function contenus()
  {
    return $this->_contenus;
  }

  public function dateCrea()
  {
    return $this->_dateCrea;
  }      
}
 ?>
