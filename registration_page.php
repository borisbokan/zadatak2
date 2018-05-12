<!DOCTYPE html>
<!--
    Create by Borcha
-->
 <?php
            $name=$email=$pass="";
            include_once './PHP/DBase.php';
            include_once './PHP/registration.php';
            
                       
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $pass=$_POST['password'];
            }
          
            
            
            if($name==NULL || $name==""){
                
                echo "You must enter name!";
               
           
            }else if($email==NULL || $email==""){
                echo "You must enter email!";

            }else if($pass==NULL || $pass==""){
                echo "You must enter password!";
            }else{
                SaveNewUser($name,$email,$pass);
            }

        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration page</title>
    </head>
    <body>
        <h1>Registration page</h1>
            
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                Name:<br>
                <input name="name" id="name" type="text" value="<?php echo $name?>"/> <br>
                Email:<br>
                <input name="email" id="email" type="email" value="<?php echo $email?>"/> <br>
                Password:<br>
                <input name="password" id="pasw" type="password" value="<?php echo $pass?>"/><br>   
                Password check:<br>
                <input name="pasword_check" id="paswche" type="password"/><br><br>
                &Tab;&Tab;&Tab;&Tab;&Tab;&Tab;<input name="save" id="save" type="submit" value="save"/> &Tab;&Tab;<input name="cancel" id="cancel" type="button" value="Cancel"/><br><br>   
                <p id="registration_message">Message</p>  
            </form>
        
        
        <?php ?>  
        
        
       
    </body>
</html>
