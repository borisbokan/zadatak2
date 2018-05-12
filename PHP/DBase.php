<?php


/**
 * Description of DBase
 *
 * @author borcha
 */
class DBase {
    //put your code here
    var $host="localhost"; 
    var $usernamedb="root";
    var $passworddb="";
    var $conn;
    var $database="zadatak2";
    
    function __construct() {
        $this->conn= mysqli_connect($this->host, $this->usernamedb, $this->passworddb);
        if(!$this->conn){
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        mysqli_select_db($this->conn, $this->database);
         
    }
      
    
    function getConn(){
        return $this->conn;
    }
    
    
    function closedatabase(){
        mysqli_close($this->conn);
        
    }
    
    
    
    
    
    
}
