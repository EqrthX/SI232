<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Testpost.css">
</head>
<body>

    <?php require "navbar.php"; ?>

    <div class = all> 

        <div class = all2>

            <form action="/upload" method="post" enctype="multipart/form-data">

                <div class = petimg>

                    <h1 style="text-align: center; font-size: 35px;" >แนบรูปภาพ</h1>
                    <label for="file-upload" style="cursor: pointer;">
                    <img src="IMG/Dog_Breeds.jpg" alt="Click to upload" width="400" height="400">
                    </label>
                    <input id="file-upload" type="file" name="image" style="display: none;">
                    <br><br>
                    <button type="submit">โพสต์</button>
                    
                </div>

                <div class = text-pet>

                    <h1 style="text-align: center; font-size: 30px;">ข้อมูลสัตว์เลี้ยง</h1>
                    <label for="petname">ชื่อสัตว์เลี้ยง</label>
                    <input type="text" placeholder="กรอกชื่อสัตว์ของคุณ"> <!--placeholder คือ ข้อความใสๆ-->
                    <br><br>
                    <label for="Gender">เลือกเพศ :</label>
                    <input type="radio" name="Gender" value="ผู้" checked> ผู้
                    <input type="radio" name="Gender" value="เมีย" > เมีย
                    <br><br>
                    <label for="colorpet">สี</label>
                    <input type="text" placeholder="กรอกสีสัตว์">
                    <br><br>
                    <label for="gene">สายพันธุ์ :</label>
                    <select id="petBreed" name="petBreed" required>
                        <option value=""></option>
                        <option value="Chihuahua">ชิวาวา</option>
                        <option value="Beagle">บีเกิ้ล</option>
                        <option value="Bulldog">บูลด็อก</option>
                        <option value="Pomeranian">ปอมเมอเรเนียน</option>
                        <option value="Siberianhusky ">ไซบีเรียนฮัสกี</option>
                        </select><br><br>
                    <label for="vacpet">วัคซีน</label>
                    <input type="radio" name="vacpet" value="เคยได้รับ" checked>เคยได้รับ
                    <input type="radio" name="vacpet" value="ไม่เคยได้รับ" > ไม่เคยได้รับ
                    <br><br>
                    <label for="typepet">ประเภทสัตว์</label>
                    <input type="radio" name="typepet" value="สุนัข" checked>สุนัข
                    <input type="radio" name="typepet" value="แมว" > แมว
                    <br><br>
                    <label for="freeform">ข้อมูลสัตว์:</label><br><br>
                    <textarea id="freeform" name="freeform" rows="8" cols="50">
                        กรอกข้อมูลสัตว์ของคุณ...
                    </textarea>
                    <br><br>

                </div>

            </form>

        </div>

    </div>

    <div class ="rq">
            <p>คำขออนุมัติ</p>
    </div>
</body>
</html>

<img src="" alt="">
