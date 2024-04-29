<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="LOGIN.css">
</head>
<body>
  
  <div class="container">

    <div class="box-login">

      <div class="login">

        <h2>Sign In</h2>

        <form action="checkLogin.php" method="post">

          <label for="Email">Email:</label>
          <input type="email" id="Email" name="Email" placeholder="xxxxx@gmail.com" required><br>
          <label for="Password">Password:</label>
          <input type="password" id="password" name="password" placeholder="XXXXXXXX" required><br>
          
          <input class="box" type="submit" value="Submit">
          <a href="#" id="fp">Forget Password?</a>
          
        </form>

        <p>Don't have an account? <a href="createacc.php">Create</a></p>

      </div>
      

    </div>

    <div class="box-img">

      <img src="cat.png" alt="">

    </div>
    
  </div>

</body>
</html>