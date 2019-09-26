<?php 
   
   $name= $_POST["name"];
   $email=$_POST["email"];
   $phone=$_POST["phone"];
   $message=$_POST["message"];

    echo"welcome: "  . $name  . "<br>"  ;
    echo"your Email is: " . $email  . "<br>" ;
    echo"your phone is:" . $phone . "<br>" ;
    echo"your message is:" . $message . "<br>" ;
    
?>