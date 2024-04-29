<?php 
   session_start();
   include "conn.php"; //step 1;
   

   $Email=$_POST['Email'];
   $password=$_POST['password'];
  
  
     $sql="select * from create_account where Email='$Email' and  Password='$password' ";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
   if($row){
         $_SESSION['user_id']=$row['UserID'];
         $_SESSION['user_Email']=$row['Email'];
       //echo "<script>alert('Insert complete');</script>";
      echo '<meta http-equiv="refresh" content="0;url=home.php"> ';
   }else 
   {echo "<script>alert('ข้อมูลไม่ถูกต้อง');</script>";
    echo '<meta http-equiv="refresh" content="0;url=login.php"> ';
}
?>