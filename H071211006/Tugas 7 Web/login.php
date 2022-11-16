<?php
require 'function.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

$login = new Login();
if (isset($_POST["submit"])) {
  $result = $login->login($_POST["usernameemail"], ($_POST["password"]));

  if ($result == 1) {
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  } elseif ($result == 10) {
    echo
    "<script> alert('Wrong password'); </script>";
  } elseif ($result == 100) {
    echo
    "<script> alert('User not registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style/style.css">

  <title>Login</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email" autocomplete="off">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="text" placeholder="Username or email" name="usernameemail" required value="">
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password"  name="password" required value=""> 
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="registration.php">Register Here</a></p>
    </form>
  </div>
</body>

</html>