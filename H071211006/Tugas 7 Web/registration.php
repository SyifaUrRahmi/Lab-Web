<?php
require 'function.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

$register = new Registrasi();

if (isset($_POST["submit"])) {
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if ($result == 1) {
    echo
    "<script> alert('Registration Successful'); </script>";
  } elseif ($result == 10) {
    echo
    "<script> alert('Username or email has already taken'); </script>";
  } elseif ($result == 100) {
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel=" stylesheet" type="text/css" href="style/style.css">

  <title>Register Form </title>
</head>

<body>
  <div class="container">
    <form action="" method="POST" autocomplete="off" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
      <div class="input-group">
        <input type="text" placeholder="Name" name="name" value="">
      </div>
      <div class="input-group">
        <input type="text" placeholder="Username" name="username" value="">
      </div>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="">
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="">
      </div>
      <div class="input-group">
        <input type="password" placeholder="Confirm Password" name="confirmpassword" value="">
      </div>
      <div class=" input-group">
        <button name="submit" class="btn">Register</button>
      </div>
      <p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
    </form>
  </div>
</body>

</html>