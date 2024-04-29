<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "LOGIN.css">
    </head>
<body>

<h2>Sign In</h2>

<form action="checkLogin.php" method="post">
  <label for="Email">Email:</label><br>
  <input type="email" id="Email" name="Email" required><br>
  <label for="Password">Password:</label><br>
  <input type="password" id="password" name="password" required><br><br>
  <input class ="box"type="submit" value="Submit"> <input type="reset" value="Reset">
</form> 


</body>
</html>