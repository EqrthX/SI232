<?php
include "conn.php";

if(isset($_POST['Post'])) {
  // รับข้อมูลจากฟอร์ม
  $namepet = $_POST['namepet'];
  $petType = $_POST['petType'];
  $genderpet = $_POST['genderpet'];
  $petColor = $_POST['petColor'];
  $genepet = $_POST['genepet'];
  $vacpet = $_POST['vacpet'];
  $infopet = $_POST['infopet'];


  // อัปโหลดไฟล์รูปภาพ
  $target_filename = basename($_FILES["petImage"]["name"]);
  $target_dir = "uploads/";
  $target_file = $target_dir . $target_filename;

  // if (move_uploaded_file($_FILES["petImage"]["tmp_name"], $target_file)) {
  //     echo "ไฟล์ " . htmlspecialchars(basename($_FILES["petImage"]["name"])) . " ถูกอัปโหลดเรียบร้อยแล้ว.";
  // } else {
  //     echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์.";
  // }

  // เพิ่มข้อมูลลงในฐานข้อมูล
  $sql="INSERT INTO info_pet
  (gender_pet, color_pet, type_pet, vac_pet, info_pet, name_pet, img_pet,gene_pet) VALUES 
  ('$genderpet','$petColor','$petType','$vacpet','$infopet','$namepet','$target_filename','$genepet')";
  if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลสำเร็จ";
  } else {
    echo "มีข้อผิดพลาดในการบันทึกข้อมูล: " . $conn->error;
  }

  $conn->close();

}

?>
