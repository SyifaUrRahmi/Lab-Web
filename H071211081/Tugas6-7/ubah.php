<?php 
require "functions.php";
session_start();
$hitam="css/style.css";
// cek ada session
	if( !isset($_SESSION["login"]) ) {
		 header("Location:login.php");
		 exit;

	}
  // cek buat sesson tangakp  hitam
  if( isset($_GET["hitam2"]) ) {
        session_destroy();
        session_start();
				$_SESSION["login"] =true;
     $_SESSION["hitam"] =true;
		 $id =$_GET["id"];
   

	}
  if( isset($_GET["hitam3"]) ) {
    session_destroy();
    session_start();
			$_SESSION["login"] =true;
     $_SESSION["hitam3"] =true;
		 $id =$_GET["id"];


	}
  // cek sesson hittam
  	if( isset($_SESSION["hitam"]) ) {
		$hitam="css/hitam.css";
    $displaymoon="none";
    $displaymoon3="block";
	}
  	if( isset($_SESSION["hitam3"]) ) {
		$hitam="css/style.css";
    $displaymoon="block";
    $displaymoon3="none";
	}


$mahasiswa = query("SELECT * FROM mahasiswa2 ");

// ubah()]
$id =$_GET["id"];
//query data mahasiswa id
$mhs = query("SELECT * FROM mahasiswa2 WHERE id =$id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// cek apakah data berhasil di ubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
			document.location.href = 'index.php?alertuabah=benarubah';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
			document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
  <script src="https://kit.fontawesome.com/71f23b0b94.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?=$hitam?>">
</head>
<style>
td {
  padding: 0px 0px;
}
</style>

<body>
  <section class="navbar">
    <div><img src="img2/logo2.png" alt="">
      <div class="night" style="display:<?=$displaymoon?> ;">
        <a href="ubah.php?hitam2=true & id=<?=$id?>"><i class="fa-regular fa-moon"></i></a>
      </div>
      <div class="siang" style="display:<?=$displaymoon3?>;">
        <a href="ubah.php?hitam3=true & id=<?=$id?>"><i class="fa-regular fa-sun"></i></a>
      </div>
    </div>
    <div>
      <ul>
        <a href="">
          <li>Data</li>
        </a>
        <a href="">
          <li>Data statistic</li>
        </a>
        <a class="wo" href="logout.php">
          <li>Acount</li>
        </a>
      </ul>
    </div>
  </section>

  <div class="ko">
    <!-- ////form hadeh -->
    <div class="log5">
      <div class="title">Input data</div>
    </div>
    <form action="" method="post">
      <ul>
        <input type="hidden" name="id" value="<?= $mhs["id"]?>">
        <li>
          <div class="nama">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" placeholder="Nama" required>
          </div>
        </li>
        <li>
          <div class="nim">
            <i class="fa-solid fa-id-card-clip"></i>
            <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]?>" placeholder="Nim" required>
          </div>
        </li>
        <li>
          <div class="alamat">
            <i class="fa-sharp fa-solid fa-location-dot"></i>
            <input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"]?>" placeholder="Alamat">
          </div>
        </li>
        <li>
          <div class="fakultas">
            <select name="fakultas" id="fakultas" value="<?= $mhs["fakultas"]?>" required>
              <option value="" disabled selected hidden>Pilih Fakultas</option>
              <option value="Mipa">Mipa</option>
              <option value="Teknik">Teknik</option>
              <option value="Keperawatan">Keperawatan</option>
              <option value="Kedokteran">Kedokteran</option>
            </select>
          </div>
        </li>
        <button type="submit" class="button" name="submit">Ubah Data!</button>
      </ul>

    </form>
  </div>
  <!-- table -->
  <div class="table">
    <div class="table2">
      <table cellspacing="0" cellpadding="0">

        <tr class="aku">
          <th>No.</th>
          <th>Nama</th>
          <th>Nim</th>
          <th>alamat</th>
          <th>fakultas</th>
          <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
        <tr class="aku">
          <td class="nmr"><?= $i; ?></td>

          <td><?= $row["nama"]; ?></td>
          <td><?= $row["nim"]; ?></td>

          <td>
            <p> <?= $row["alamat"]; ?></p>
          </td>
          <td><?= $row["fakultas"]; ?></td>
          <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><i
                class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</body>

</html>