<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        
<!-- เขียนฟอร์ม -->
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark  min-vh-100">
                <div href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto  text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">ประเภทสัตว์</span>
                </div>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item ">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkboxDog" value="dog">
                            <label class="form-check-label " for="checkboxDog">สุนัข</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkboxCat" value="cat">
                            <label class="form-check-label" for="checkboxCat">แมว</label>
                        </div>
                    </li>
                    <hr>
                    <div href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto  text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">สี</span>
                    </div>
                    <li class="nav-item">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkcolorbrown" value="option1">
                                <label class="form-check-label" for="checkcolorbrown">น้ำตาล</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkcolorwhitdark" value="option2">
                                <label class="form-check-label" for="checkcolorwhitdark">ขาว-ดำ</label>
                              </div>

                    </li>
                    <li class="nav-item">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkcolorwhit" value="option1">
                                <label class="form-check-label " for="checkcolorwhit">ขาว</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkcolorsecon" value="option2">
                                <label class="form-check-label" for="checkcolorsecon">เทา</label>
                              </div>

                    </li>
                    <li class="nav-item">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkcolordark" value="option1">
                                <label class="form-check-label" for="checkcolordark">ดำ</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkcolorother" value="option2">
                                <label class="form-check-label" for="checkcolorother">อื่นๆ</label>
                              </div>

                    </li>
                    <hr>
                    <div href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto  text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">สายพันธุ์</span>
                    </div>
                    <li class="nav-item">

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>โปรดเลือกสายพันธุ์</option>
                            <option value="CHIHUAHUA">ชิวาวา</option>
                            <option value="Beagle">บีเกิ้ล</option>
                            <option value="Bulldog">บูลด็อก</option>
                            <option value="Pomeranian">ปอมเมอเรเนียน</option>
                            <option value="Pomeranian">ไซบีเรียน ฮัสกี</option>
                          </select>

                    </li>
                    <hr>
                    <div href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto  text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">วัคซีน</span>
                    </div>
                    <li class="nav-item">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checksuccess" value="option1">
                            <label class="form-check-label" for="checksuccess">ได้รับวัคซีน</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkunseccess" value="option2">
                            <label class="form-check-label" for="checkunseccess">ยังได้รับวัคซีน</label>
                        </div>
                    
                    </li>
                    <hr>
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto  text-decoration-none">
                        <button type="submit" class="btn btn-outline-primary">ค้นหา</button>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-8 col-md-10 col-xl-10 px-sm-2 px-0" style="background: #EDDACE">
            <div class="text-center">
                <h1 class="display-5 fw-bold">หมา</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="card" style="width: 18rem; background: #bb9d85">
                                        <!-- ชิวาวา -->
                                    <img src="https://fashion.decorexpro.com/images/article/orig/2019/05/ves-chihuahua-po-mesyacam.jpeg" class="card-img-top" height="200" alt="...">
                                    <div class="card-body">
                                      <a href="#" class="fs-5 btn">ซูชิ</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="card" style="width: 18rem; background: #bb9d85">
                                    <!-- บีเกิ้ล -->
                                    <img src="https://media.istockphoto.com/id/1204994960/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%9A%E0%B8%B5%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B9%89%E0%B8%A5%E0%B8%AA%E0%B8%B8%E0%B8%99%E0%B8%B1%E0%B8%82%E0%B8%95%E0%B8%B2%E0%B9%80%E0%B8%A8%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%88%E0%B8%A1%E0%B8%B9%E0%B8%81%E0%B9%83%E0%B8%AB%E0%B8%8D%E0%B9%88-%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87-%E0%B8%84%E0%B8%B1%E0%B8%94%E0%B8%A5%E0%B8%AD%E0%B8%81%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%97%E0%B8%B5%E0%B9%88.jpg?s=170667a&w=0&k=20&c=HsuBnzpgSbmurGHIwL_F0ZfHa5-hVtQi4Q9P5ztdtWU=" class="card-img-top" height="200" alt="...">
                                    <div class="card-body">
                                      <a href="#" class="fs-5 btn">เชล</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-3">
                            <!-- บูลด็อก -->
                                <div class="card" style="width: 18rem; background: #bb9d85">
                                    <img src="https://i.pinimg.com/736x/22/5c/cd/225ccd9ee5e66a980bf302fdbc1aada1.jpg" class="card-img-top" height="200" alt="..." >
                                    <div class="card-body">
                                      <a href="#" class="fs-5 btn">ดอท</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-3 ">
                            <!-- ปอมเมอเรเนียน -->
                                <div class="card" style="width: 18rem; background: #bb9d85">
                                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230425/pngtree-pomeranian-dog-peeping-out-of-the-leaves-image_2552633.jpg" class="card-img-top" height="200" alt="...">
                                    <div class="card-body">
                                      <a href="#" class="fs-5 btn" >จูดี้</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="text-center mt-2">
                <h1 class="display-5 fw-bold">แมว</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card" style="width: 18rem; background: #bb9d85">
                                <img src="https://s359.kapook.com/pagebuilder/c232e32d-b54b-448c-ac37-0e37c47d6eb8.jpg" class="card-img-top" height="200" alt="...">
                                <div class="card-body">
                                  <a href="#" class="fs-5 btn">ข้าว</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style="width: 18rem; background: #bb9d85">
                                <img src="https://www.cathousecattery.com/cathousenew/3.JPG" class="card-img-top" height="200" alt="...">
                                <div class="card-body">
                                  <a href="#" class="fs-5 btn">ไทเกอร์</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style="width: 18rem; background: #bb9d85">
                                <img src="https://media.istockphoto.com/id/531047167/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%A1%E0%B8%B8%E0%B8%A1%E0%B8%A1%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%99%E0%B8%AD%E0%B8%99%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%81%E0%B8%A1%E0%B8%A7%E0%B8%AA%E0%B8%9F%E0%B8%B4%E0%B8%87%E0%B8%8B%E0%B9%8C%E0%B8%9A%E0%B8%99%E0%B8%82%E0%B8%99%E0%B8%9B%E0%B8%A5%E0%B8%AD%E0%B8%A1%E0%B8%AA%E0%B8%B5%E0%B8%99%E0%B9%89%E0%B9%8D%E0%B8%B2%E0%B8%95%E0%B8%B2%E0%B8%A5.jpg?s=612x612&w=0&k=20&c=fiAxnic-z8xAKVDVfRzMk7OU9_Emso2Oedy8he1nEfM=" class="card-img-top" height="200" alt="...">
                                <div class="card-body">
                                  <a href="#" class="fs-5 btn">ชิก</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="card" style="width: 18rem; background: #bb9d85">
                                <img src="https://www.purina.co.th/sites/default/files/styles/ttt_image_510/public/2021-01/Persian%20Long%20Hair.1.jpg?itok=vxUPA23O" class="card-img-top" height="200" alt="...">
                                <div class="card-body">
                                  <a href="#" class="fs-5 btn">อ้วน</a>
                                </div>
                              </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>