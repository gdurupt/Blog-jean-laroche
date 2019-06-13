<?php
class Comment{
//--------------------------------------------------------------------------------------------//        
  private $_id;
  private $_logins;
  private $_comments;
  private $_pageName;
  private $_dateComment;
  private $_report;
  private $_nbreport;
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
 
    public function setLogins($logins)
  {
    if (is_string($logins)) {
      $this->_logins = $logins;
    }
  }
    public function setPage($page)
  {
    if (is_string($page)) {
      $this->_pageName = $page;
    }
  }

  public function setComments($comment)
  {
    if (is_string($comment)) {
      $this->_comments = $comment;
    }
  }

  public function setDateComment($dateComment)
  {
    $this->_dateComment = $dateComment;
  }
    
    public function setReport($report)
  {
    if (is_string($report)) {
      $this->_report = $report;
    }
  }
    
        public function setNbreport($nbreport)
  {
    $nbreport = (int) $nbreport;
    if ($nbreport > 0) {
      $this->_nbreport = $nbreport;
    }
  }    
//--------------------------------------------------------------------------------------------//   
    public function id()
  {
    return $this->_id;
  }
    
    public function logins()
  {
    return $this->_logins;
  }
    
    public function page()
  {
    return $this->_pageName;
  }
    
    public function comments()
  {
    return $this->_comments;
  }
    
    public function dateComment()
  {
    return $this->_dateComment;
  }
    
     public function nbreport()
  {
    return $this->_nbreport;
  }
    
    public function report()
  {
    return $this->_report;
  }
}