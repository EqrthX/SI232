<?php
 include "conn.php"; //step 1;

 $FirstName=$_POST['FirstName'];
 $LastName=$_POST['LastName'];
 $Email=$_POST['Email'];
 $Career=$_POST['Career'];
 $Birthdate=$_POST['Birthdate'];
 $Country=$_POST['Country'];
 $Password=$_POST['Password'];
 $Confpassword=$_POST['Confpassword'];


if($Password === $Confpassword){
    $sql="INSERT INTO `create_account`(`First_Name`, `Last_Name`, 
 `Email`, `Career`, `Birthdate`, `Country`, `Password`) 

 VALUES ('$FirstName','$LastName','$Email','$Career','$Birthdate','$Country'
 ,'$Password') ";

 $result=mysqli_query($conn, $sql);
 if($result){
     echo "<script>alert('Insert complete');</script>";
     echo '<meta http-equiv="refresh" content="0;url=login.php"> ';
 }else 
 {echo "<script>alert('Cannot Insert');</script>";
  echo '<meta http-equiv="refresh" content="0;url=createacc.php"> ';}
}

?>