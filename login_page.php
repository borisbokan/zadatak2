<!DOCTYPE html>
<!--
 Create by Borcha
-->
 <?php
        
         include_once './PHP/DBase.php';
         include_once './PHP/login.php';
         
            $message="message..";
            $email=$pass="";
                       
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $email=$_POST['email'];
               $pass=$_POST['password'];

               
               if($email== ""){
                   $message= "You must enter you registratio email!";
               }else if($pass == ""){
                    $message= "You must enter you password acount!";
               }else{
                    $log=new login($email, $pass);
                    $message = $log->findUser();
               }
               
               
            }
        
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
    </head>
    <body>
        <h1>Login page</h1>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                Email: <br>
                <input name="email" id="email" type="text"/><br>
                Password:<br>
                <input name="password" id="password" type="password"/><br><br>
                <input name="btnLogin" id="btnlog" type="submit" value="Log in"/><br>
                <h3><p id="login_message"><?php echo $message?></p></h3>   
            </form>
        </div>
       
    </body>
</html>
