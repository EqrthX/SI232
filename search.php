<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <!-- นี่คือส่วนสำหรับเชื่อมโยงไฟล์ CSS ถ้ามี -->
    <link rel="stylesheet" href="search.css">
    
</head>
<body>

<?php require"navbar.php"; ?>

<!-- h1 ตอนแสดงมันต้องขึ้นตามช่อง search ถ้าเป็นหมาก็ขี้นหมาเป็นแมวก็ขึ้นแมว ถ้าฟิคไว้มันทำยาก -->

<h1 class="dog" >สุนัข</h1>
<div class="container">
    
    <!-- line -->
    <div class="box-line">
        <div class ="line1" ></div>
        <div class ="line2" ></div>
    </div>
    
    <div class="box-text">

    <!-- และใน box tag img และ a ให้ใช้ while เพื่อแสดงข้อมูลตาม database ถ้าพวกมึงทำแบบก็อปวางแล้วข้อมูลมีเป็น 100 มึงก็ก็อปเป็น 100 อะ ใช้ while ทำแล้วมันจะได้ขึ้นข้อมูลทั้งหมด -->
        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใคร</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

    </div> 
    
</div>

<h1 class="cat" >แมว</h1>
<div class="container2">
    
    <!-- line -->
    <div class="box-line">
        <div class ="line1" ></div>
        <div class ="line2" ></div>
    </div>
    
    <div class="box-text">

    <!-- และใน box tag img และ a ให้ใช้ while เพื่อแสดงข้อมูลตาม database ถ้าพวกมึงทำแบบก็อปวางแล้วข้อมูลมีเป็น 100 มึงก็ก็อปเป็น 100 อะ ใช้ while ทำแล้วมันจะได้ขึ้นข้อมูลทั้งหมด -->
        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใคร</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

        <div class="box">
            <img src="dog.jpg" alt="" class="box-image">
            <a href="" class="box-a">หมาใครกูไม่รู้พวกมึงแก้กันเอง</a>
        </div>

    </div> 
    
</div>

</body>
</html>