<?php
/**
 * Model nije koriscen a prvobitno je planiran...nema ga nigde ali napravljen
 */

class User {
    
    var $username;
    var $password;
    
    
    function __construct($_username, $_password) {
        $this->username=$_username;
        $this->password=$_password;
        
    }
    
    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }


    //Test modela user
    function testUser(){
        echo "Username: " + $this->username . "<br>" . "password: " . $this->password;
        
    }
    
    
}
