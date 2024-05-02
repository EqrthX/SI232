<?php
include "conn.php";

if(isset($_POST['Post'])) {
  // รับข้อมูลจากฟอร์ม
  $petname = $_POST['petname'];
  $typepet = $_POST['typepet'];
  $Gender = $_POST['Gender'];
  $colorpet = $_POST['colorpet'];
  $gene = $_POST['gene'];
  $vacpet = $_POST['vacpet'];
  $freeform = $_POST['freeform'];

  echo $petname ; 
  echo $typepet ;
  echo $Gender ;
  echo $colorpet ;
  echo $gene ;
  echo $vacpet ;
  echo $freeform ;
  // อัปโหลดไฟล์รูปภาพ
  $target_filename = basename($_FILES["image"]["name"]);
 // $target_dir = "uploads/";
  //$target_file = $target_dir . $target_filename;


  // เพิ่มข้อมูลลงในฐานข้อมูล
  $sql="INSERT INTO info_pet
  (gender_pet, color_pet, type_pet, vac_pet, info_pet, name_pet, img_pet,gene_pet) 
  
  
  VALUES ('$Gender','$colorpet','$typepet','$vacpet','$freeform','$petname','$target_filename','$gene')";


  if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลสำเร็จ";
  } else {
    echo "มีข้อผิดพลาดในการบันทึกข้อมูล: " . $conn->error;
  }

  $conn->close();

}

?>
