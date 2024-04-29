<?php 
 $servername="localhost";
 $userName="root";
 $password="";
 $db="register";
 $conn=mysqli_connect($servername,$userName,$password,$db);
 if($conn){
   // echo "connect successfully";
 } else {
    echo "Cannot connect";
 }

?>