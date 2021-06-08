<?php
class DbConnection{
 
    private $host = 'localhost';
    private $username = 'Art_admin';
    private $password = 'artur2004';
    private $database = 'qnutyun';
 
    protected $connection;
 
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) {
                echo 'connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
    }
}
?>