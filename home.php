<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <!-- นี่คือส่วนสำหรับเชื่อมโยงไฟล์ CSS ถ้ามี -->
    <link rel="stylesheet" href="home.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #EDDACE;
        }

        .navbar {
            background-color: #E4CAB5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 80px;
        }

        .navbar .logo img {
            height: 70px;
        }

        .nav-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-right: 70px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #8B5A3F;
            font-size: 20px;
        }

        .nav-links li a:hover {
            color: #000000;
        }

        .search-box {
            display: flex;
            align-items: center;
        }

        .search-box input[type="text"] {
            padding: 21px;
            border-radius: 5px 0 0 5px;
            border: none;
        }

        .search-box button {
            padding: 21px;
            background-color: #ddd;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-box button:hover {
            background-color: #bbb;
        }

        .user-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
        }

        .user-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .icon img {
            width: 60px;
            height: auto;
            margin: 0 25px;
        }

        .textlang {
            position: relative;
            top: 33px;
            left: -6px;
        }

        .textlang label {
            display: inline-block;
            margin-left: 5rem;
        }
        .icon {
            margin-right: -400px;
        }   
      </style>
</head>
<body>
<nav class="navbar">
    <div class="logo">
          <img src="https://media.discordapp.net/attachments/1207678574362886144/1235944504691920926/image.png?ex=66378804&is=66363684&hm=8bbee13883114ec078015f584444769202ae42be9290cd8d3ab3273a8572833c&=&format=webp&quality=lossless" alt="Logo">
        </div>
     <div class="search-box">
        <input type="text" placeholder="ค้นหา...">
        <button type="submit">ค้นหา</button>
        </div>
     <ul class="nav-links">
        <li><a href="#">หน้าแรก</a></li>
        <li><a href="#">คัดกรอง</a></li>
        <li><a href="#">ช่วยเหลือ</a></li>
        <li><a href="#">โพสต์</a></li>
        </ul>
        <div class="user-icon">
        <a href=""><img src="onana.jpg" alt="User Icon"></a>
        </div>
        <div class="icon">
        <a href=""><img src="thailand.png" alt=""></a>
        <a href=""><img src="england.png" alt=""></a>
        </div>
        <div class="textlang">
            <label for="">TH</label>
            <label for="">ENG</label>
        </div>
    </nav>
<!-- เริ่มต้นโค้ด HTML ของคุณที่นี่ -->


  <h1 style="text-align: center;">ทุกชีวิตบนโลก ล้วนมีค่าเสมอ</h1>

  <div class="box-pic">

    <img src="pic5.png" alt="">

  </div>
  
  <h3 style="text-align: center;">ให้เราได้ช่วยคุณ</h3>
  
  <button><a href="">เข้าสู่เว็บไซต์</a></button>


</body>
</html>
