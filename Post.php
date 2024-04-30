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
  
  <form id="petForm" enctype="multipart/form-data">
    <label for="imgpet"class ="imgpet">แนบรูป:</label>
    <input type="file" id="" name="petImage" accept="image/*"><br><br>
    
    <label for="namepet"class = "namepet">ชื่อสัตว์เลี้ยง:</label>
    <input type="text" id="" name="namepet" required><br><br>
    
    <label for="genderpet"class = "genderpet">เพศ:</label>
    <input type = "radio" id = "" name = "genderpet" value = "ผู้" require>
    <label for="ผู้">ผู้</label>
    <input type = "radio" id = "" name = "genderpet" value = "เมีย" require>
    <label for="เมีย">เมีย</label<><br>
    
    <label for=""class ="petColor">สี:</label>
    <input type="text" id="petColor" name="petColor" required><br><br>
    
    <label for=""class = "petBreed">สายพันธุ์:</label>
    <input type="text" id="" name="petBreed" required><br><br>

    <label for="vacpet" clacss = "vacpet">วัคซีนที่ได้รับ:</label>
    <input type="text" id="" name="vacpet" required><br><br>
    
    <label for="petType"class = "petType">ประเภทสัตว์เลี้ยง:</label>
    <input type = "radio" id = "" name = "petType" value = "แมว" require>
    <label for="petType">แมว</label>
    <input type = "radio" id = "" name = "petType" value = "สุนัข" require>
    <label for="petType">สุนัข</label<><br>

    <label for="infopet" clacss = "infopet">ช้อมูลสัตว์:</label>
    <input type="text" id="" name="infopet" required><br><br>
    
    <input type="submit" value="โพส"><br><br>
    <input type="submit" value="คำขออนุมัติ"><br><br>
  </form>

  <script>
    document.getElementById('petForm').addEventListener('submit', function(event) {
      event.preventDefault();

      var formData = new FormData(this);

      fetch('save_data.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);
        alert('บันทึกข้อมูลสำเร็จ');
        // รีเซ็ตฟอร์มหลังจากบันทึกข้อมูล
        document.getElementById('petForm').reset();
      })
      .catch(error => {
        console.error('เกิดข้อผิดพลาด:', error);
        alert('มีบางอย่างผิดพลาด โปรดลองอีกครั้ง');
      });
    });
  </script>
</body>
</html>
