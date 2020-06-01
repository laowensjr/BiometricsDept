<?php
class Database {
    
    // DB Params
    private $host = "162.241.217.171";
    private $db_name = "datalyt6_starred_repos";
    private $username = "datalyt6";
    private $password ="Lo19315761$";
    private $conn;
    
    
    
    //DB Connect
    public function connect() {
        
        $this->conn = null;
       
        $this->conn = new mysqli($this->host, $this->username, $this->password,  $this->db_name);
        if($this->conn->connect_error){
            echo "Fail" . $this->conn->connect_error;
                       
        }
        //echo "Connected";
        
       return $this->conn;
       
    }

}
    
    //$dbh0 = new Database();
   //$dbh= $dbh0->connect();
   