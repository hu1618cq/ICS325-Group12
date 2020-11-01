<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="../../css/login.css">

</head>
<body>
   <header> 
    <?php include '../include/header.php' ?>
   </header>

   <main>
 
  <div class="login"> 
 
    <h2>Login Account</h2>
      <br> 
      <form method="post"> 
   <label>Username:</label>
      <br>
      <input id="logininput" type="text" name="username" value="">
      <br>
   <label>Password:</label>
      <br>
      <input id="logininput" type="text" name="password" value="">
   <br>
   <br>
   <input  type="submit" name="Login" class="loginbtn" value="Login" /> 
    <input type="submit" name="Sign_up" class="signupbtn" value="Sign Up" /> 
  </div>
</form > 
   <main>


   <footer>
   <?php include '../include/footer.php' ?>
   </footer>
   </body>


</html>