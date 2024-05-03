<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <!-- นี่คือส่วนสำหรับเชื่อมโยงไฟล์ CSS ถ้ามี -->
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style>
    
    body {
        background-color: #EDDACE;
    /* }
      /* ใช้เทคนิค Flexbox ในการจัดหมวดหมู่ Navbar ให้เหมาะสม */
  /* .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      background: #E4CAB5;
      box-shadow: 0px 4px 4px 0px #00000040;
      height: 100px; */
    }
  
  /* .navbar ul {
      display: flex;
      align-items: center;
      list-style: none;
      margin: 0;
      padding: 0; */
      
  /* }
  
  .navbar ul li {
      position: relative;
  }
  
  .navbar ul li input[type="text"] {
      width: 154px;
      height: 40px;
      border-radius: 20px;
      padding: 0 10px;
  }
  
  .navbar ul li a {
      text-decoration: none;
      color: #8B5A3F;
      margin: 0 15px;
      
  }
  
  .navbar ul li img {
      width: 49px;
      height: 49px;
  } */
  
  /* Responsive Adjustments */
  /* @media (max-width: 768px) {
      .navbar {
          flex-direction: column;
          height: auto;
          padding: 10px;
          
      }
  
      .navbar ul {
          flex-direction: column;
          align-items: center;
      }
  
      /* .navbar ul li input[type="text"] {
          width: calc(100% - 20px); /* Full width minus padding */
          /* margin-bottom: 10px; */
      /* } */
  
      /* .navbar ul li a,
      .navbar ul li img {
          margin-bottom: 10px;
      }  */
  /* } */
  
  
      </style>
            <?php require"navbar.php"; ?>
            <div class="px-4 py-5 my-5 text-center">
                    <div class="container">
                    <div class="row g-0">
                            <div class="col-4">
                                <div class="card" style="width: 20rem; left: 50px; background: #bb9d85">
                                        <!-- ชิวาวา -->
                                    <img src="https://fashion.decorexpro.com/images/article/orig/2019/05/ves-chihuahua-po-mesyacam.jpeg" class="card-img-top" height="200" alt="...">
                                    <div class="card-body">
                                      <a href="#" class="fs-5 btn ">ซูชิ</a>
                                    </div>
                            </div>
                    </div>    
                <div class="card mb-4" style="max-width: 850px; max-height:500px; ">
                    <div class="row g-1">
                    <div class="col-md-4"></div>
                    <div class="card-body">
                        <h5 class="card-title">รหัสสัตว์ 001</h5>
                        <p class="card-text">my name is gong</p>
                        <p class="card-text"><small class="text-body-secondary">โพสต์เมือ 05/02/67</small></p>
                        <button type="button" class="btn btn-warning">สนใจ</button>
                    </div>
                    </div>
                    </div>
                    <div class="card mt-4 border-success mb-3" style="max-width: 20rem; left: 50px">
                <div class="card-body text-success">
                    <h5 class="card-title">สถานะ</h5>
                    <p class="card-text">ยังไม่ไดรับอุปการะ</p>
                </div>
                </div>
                </div>
                </div>
    </div>
        </body>
    </html>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>