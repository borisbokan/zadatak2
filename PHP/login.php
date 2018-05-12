<?php
/**
 * Description of login
 *
 * @author borcha
 */
class login {
   
    
   
    var $email;
    var $password;
    
    var $name;
    
    function __construct($_email,$_password) {
        $this->email=$_email;
        $this->password=$_password;
        
              
    }
    
    function findUser(){
        
        $db=new DBase();
        
        $upitstr="SELECT * FROM tUser WHERE email='" . $this->email. "' AND password='" . $this->password . "'";
        $res= mysqli_query($db->getConn(),$upitstr);
        $row= mysqli_fetch_row($res);     
        
        if($row!=NULL){
            
            return "Wellcome " .  $row[1] . " you are login successfully";
        }else{
            return "Login is not successfull. Try again!";
        }
                
       
        
        //return $this->name= $finres[1]  . " " . $this->email=$finres[2];
        $db->closedatabase();
    }
    
    
    
}
