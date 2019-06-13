<?php

class LoginsManager extends Model{
    
    public function getLogin($login, $pass){       
        return $this->secureAdmin('logins', $login, $pass); 
    }

}