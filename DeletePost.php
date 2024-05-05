<?php 
   include "conn.php"; //step 1;
if(isset($_POST['Post'])) {
  
     $sql="DELETE FROM `info_pet` WHERE `id_pet` = (SELECT id_pet FROM info_pet LIMIT 1)";
  
     
   $result=mysqli_query($conn, $sql);//step2
   if($result){
       echo "<script>alert('delete complete');</script>";
       echo '<meta http-equiv="refresh" content="0;url=search.php"> ';
   }else 
   {echo "<script>alert('Cannot delete');</script>";
    echo '<meta http-equiv="refresh" content="0;url=deletepet.php"> ';}
   }
?>