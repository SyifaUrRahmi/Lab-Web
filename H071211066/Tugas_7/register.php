<?php

// Lampirkan dbconfig 

require_once "dbconfig.php";

// Cek status login user 

if ($user->isLoggedIn()) {

  header("location: index.php"); //Redirect ke index 

}

//Cek adanya data yang dikirim 

if (isset($_POST['kirim'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Registrasi user baru 

  if ($user->register($nama, $email, $password)) {

    // Jika berhasil set variable success ke true 

    $success = true;
  } else {

    // Jika gagal, ambil pesan error 

    $error = $user->getLastError();
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles/style.css" />
</head>

<body>
  <div class="position-absolute top-50 start-50 translate-middle bg-secondary rounded text-center">
    <div class="form">
      <form class="register-form" method="post">
        <?php if (isset($error)) : ?>
          <div class="error">
            <?php echo $error ?>
          </div>
        <?php endif; ?>
        <?php if (isset($success)) : ?>
          <div class="success">
            Berhasil mendaftar. Silakan <a href="login.php">login</a>.
          </div>
        <?php endif; ?>
        <div class="mb-3 p-2 m-4">
          <input type="text" name="nama" placeholder="nama" required />
        </div>
        <div class="mb-3 p-2 m-4">
          <input type="email" name="email" placeholder="email address" required />
        </div>
        <div class="mb-3 p-2 m-4">
          <input type="password" name="password" placeholder="password" required />
        </div>
        <button class="btn btn-primary rounded" type="submit" name="kirim">create</button>
        <p class="message p-2 m-4">Already registered? <a href="login.php">Sign In</a></p>
      </form>
    </div>
  </div>
</body>

</html>