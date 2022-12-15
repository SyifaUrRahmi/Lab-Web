<script>
const allo = 0;
</script>
<?php
require 'functions.php';
$hitam = "css/regristrasi.css";


session_start();
// cek ada session login 
if (isset($_SESSION["login"])) {
  header("Location:index.php");
  exit;
}
// cek buat sesson tangakp  hitam
if (isset($_GET["hitam2"])) {
  session_destroy();
  session_start();
  $_SESSION["hitam"] = true;
}
if (isset($_GET["hitam3"])) {
  session_destroy();
  session_start();
  $_SESSION["hitam3"] = true;
}
// cek sesson hittam
if (isset($_SESSION["hitam"])) {
  $hitam = "css/regristrasihitam.css";
  $displaymoon = "none";
  $displaymoon3 = "block";
}
if (isset($_SESSION["hitam3"])) {
  $hitam = "css/regristrasi.css";
  $displaymoon = "block";
  $displaymoon3 = "none";
}


if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      //set session
      $_SESSION["login"] = true;
      header("Location: index.php");
      exit;
    }
  }
  $error = true;
  $class = "pof";
  echo "
  <script>
  const alo=true;
  </script>
  ";
}



?>
<!-- rarr transfrom -->


<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
  <link rel="stylesheet" href="<?= $hitam ?>">
  <script src="https://kit.fontawesome.com/71f23b0b94.js" crossorigin="anonymous"></script>
</head>

<body>


  <div class="rarr">
    <img class="img2" src="<?= $bad_login ?>" alt="">
  </div>
  <div class="night" style="display:<?= $displaymoon ?> ;">
    <a href="login.php?hitam2=true"><i class="fa-regular fa-moon"></i></a>
  </div>
  <div class="siang" style="display:<?= $displaymoon3 ?>;">
    <a href="login.php?hitam3=true"><i class="fa-regular fa-sun"></i></a>
  </div>

  <div class="login">
    <div class="log5">
      <div class="logo"></div>
      <div class="title">control</div>
      <?php if (isset($error)) { ?>
      <p style="color:red; text-align: center; font-size: 10px; ">Password atau username anda salah!</p>
      <?php } ?>

    </div>
    <form action="" method="post">

      <ul>
        <li class="username">
          <i class="fa-solid fa-user"></i>
          <input type="text" name="username" id="username" placeholder="username" required>
        </li>
        <li class="password">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="password" required>
        </li>
        <li>
          <button type="submit" class="button <?= $class ?>" name="login">Login</button>
        </li>
        <div class="link">
          <a href="#">Already have an account?</a> or
          <a href="registrasi.php">sign up</a>
        </div>
      </ul>


    </form>
  </div>

  <script src="sc.js"></script>
</body>

</html>