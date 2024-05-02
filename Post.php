<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Post</title>
<link rel="stylesheet" href="search.css">
</head>
<body>
<?php require"navbar.php"; ?>
  <h1>ข้อมูลสัตว์เลี้ยง</h1>
  
  <form id=""class ="imgpet" enctype="multipart/form-data">
    <label for="imgpet">เลือกรูปภาพสัตว์เลี้ยง:</label>
    <input type="file" id="imgpet" name="petImage" accept="image/*"><br><br>
    
    <label for="namepet"class = "namepet">ชื่อสัตว์เลี้ยง:</label>
    <input type="text" class="boxnamepet" id="" name="namepet" required><br><br>

    <label for="petType"class = "petType">ประเภทสัตว์เลี้ยง:</label>
    <input type = "radio" class="boxpetType1" id = "" name = "petType" value = "แมว" require>
    <label for="petType">แมว</label>
    <input type = "radio" class="boxpetType2" id = "" name = "petType" value = "สุนัข" require>
    <label for="petType">สุนัข</label<><br>
    
    <label for="genderpet"class = "genderpet">เพศ:</label>
    <input type = "radio" class="boxgender1" id = "" name = "genderpet" value = "ผู้" require>
    <label for="genderpet">ผู้</label>
    <input type = "radio" class="boxgender2" id = "" name = "genderpet" value = "เมีย" require>
    <label for="genderpet">เมีย</label<><br>
    
    <label for=""class ="petColor">สี:</label>
    <input type="text" class="boxpetColor" id="petColor" name="petColor" required><br><br>
    
    <label for=""class = "genepet">สายพันธุ์:</label>
    <select id="genepet" name="genepet" required>
      <option value=""></option>
      <option value="Chihuahua">ชิวาวา</option>
      <option value="Beagle">บีเกิ้ล</option>
      <option value="Bulldog">บูลด็อก</option>
      <option value="Pomeranian">ปอมเมอเรเนียน</option>
      <option value="Siberianhusky ">ไซบีเรียนฮัสกี</option>
      </select><br><br>


      <label for="vacpet"class = "vacpet">เพศ:</label>
    <input type = "radio" class="boxvac1" id = "" name = "vacpet" value = "ได้รับวัคซีน" require>
    <label for="vacpet">ได้รับวัคซีน</label>
    <input type = "radio" class="boxvac2" id = "" name = "vacpet" value = "ไม่ได้รับวัคซีน" require>
    <label for="vacpet">ไม่ได้รับวัคซีนได้รับวัคซีน</label<><br>


    

    <label for="infopet" clacss = "infopet">ช้อมูลสัตว์:</label>
    <input type="text" class="boxinfopet" id="" name="infopet" required><br><br>
    
    <input type="submit"name = "Post" value="โพส"><br><br>
    <input type="submit" value="คำขออนุมัติ"><br><br>
  </form>
</body>
</html>