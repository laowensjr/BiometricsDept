<?php
class PAT{
// Github Connection Params

protected $username = "laowensjr"; 
protected $personalAccessToken = "c64436fdae3263b43e95c363d753407bf392ce2c";
protected $userPasswd;


//GitHub Authentication Connection
function __construct($username = null, $personalAccessToken = null) {
       
    $this->username =  $username;
  $this->personalAccessToken = $personalAccessToken;
  

   
   
}

function setUsername($username){
    $this->username = $username;
    return $this->username;
    
}
function setPassword($personalAccessToken){
    $this->personalAccessToken = $personalAccessToken;
    return $this->personalAccessToken;
    
}



}