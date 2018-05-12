<?php



//$name=$_POST['name'];
//$email=$_POST['email'];
//$pass=$_POST['password'];

 function SaveNewUser($_name,$_email,$_pass){
   
        $db=new DBase();
        
        
        
        
        $insstr="INSERT INTO tUser (name,email,password) values('$_name','$_email','$_pass')";
        $query=mysqli_query($db->getConn(),$insstr);
        
        if ($query === TRUE) {
            echo "New user created successfully";
        } else {
            echo "Error: User didn't creat ";
        }
           
        $db->closedatabase();
}



 



