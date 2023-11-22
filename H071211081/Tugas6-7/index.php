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
   

	}
  if( isset($_GET["hitam3"]) ) {
    session_destroy();
    session_start();
			$_SESSION["login"] =true;
     $_SESSION["hitam3"] =true;


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

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// cek apakah data berhasil di tambahkan atau tidak
			$alertubahTambah="Data berhasil ditambahkan!";
$alert ="flex";
	if( tambah($_POST) > 0 ) {
    	 
	if( isset($_POST["close"]) ) {
		 $alert ="none";

	}

	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
			</script>
		";
	}
}
// ubah

	// cek apakah data berhasil di ubash atau tidak\
	if(isset($_GET["alertuabah"])){
		$alertubahTambah="Data berhasil diUbah (:";
$alert ="flex";  	 
if( isset($_POST["close"]) ) {
		 $alert ="none";
		 		echo "
			<script>
			document.location.href = 'index.php';
			</script>
		";

	}
	}
	else{
		
	}
	// hapus
	if(isset($_GET["id2"])){
$alert23 ="flex";  	 
if( isset($_POST["close"]) ) {
		 $alert23 ="none";
		 		echo "
			<script>
			document.location.href = 'index.php';
			</script>
		";

	}
	}
	else{
		
	}
	// return dari php hapus kalau data di hapus cek data yang dikirm sebagai triger
		if(isset($_GET["berhasilhapus"])){
		$alertubahTambah="Data berhasil diHapus |:";
$alert ="flex";  	 
if( isset($_POST["close"]) ) {
		 $alert ="none";
		 		echo "
			<script>
			document.location.href = 'index.php';
			</script>
		";

	}
	}
	else{
		
	}

?>

<!-- fungsi; confirm gagal wkwk -->
<script>
// const  alert23= document.querySelector(`.alert23`);
// const cancel= document.querySelector(`.cancel`);
// const ok= document.querySelector(`.ok`);
// const hapus45 = document.querySelector(`.hapus45`);


// function hapusornot2(){
//  alert23.style.display = `flex`;
//   ok.style.display = `flex`;
//   cancel.style.display = `flex`;
// }
// hapus45.onclick = hapusornot2;
</script>
<!-- html -->
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
  <script src="https://kit.fontawesome.com/71f23b0b94.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?=$hitam?>">
</head>
<style>
td {
  padding: 1em 1em;
}
</style>

<body>

  <section class="navbar">

    <div><img src="img2/logo2.png" alt="">
      <div class="night" style="display:<?=$displaymoon?> ;">
        <a href="index.php?hitam2=true"><i class="fa-regular fa-moon"></i></a>
      </div>
      <div class="siang" style="display:<?=$displaymoon3?>;">
        <a href="index.php?hitam3=true"><i class="fa-regular fa-sun"></i></a>
      </div>
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
          <li>Account</li>
        </a>
      </ul>
    </div>
  </section>
  <div style="display:<?=$alert?>;" class="alert">
    <div style="display:<?=$alert?>;"><?=$alertubahTambah?></div>
    <form action="" method="post">
      <button type="submit" name="close" style="display:<?=$alert?>;"><i class="fa-solid fa-check"></i></button>
    </form>
  </div>
  <!-- hapus atau tidak -->
  <div style="display:<?=$alert23?>;" class="alert23">
    <div style="display:<?=$alert23?>;">Yakin?</div>
    <div class="confrim">
      <form action="" method="post">
        <button type="submit" name="close" style="display:<?=$alert23?>;"><i class="fa-solid fa-xmark"></i></button>
      </form>
      <a href="hapus.php?id=<?= $_GET["id2"]?>"><button style="display:<?=$alert23?>;"><i
            class="fa-solid fa-check"></i></button></a>
    </div>
  </div>
  <div class="ko">
    <!-- ////from -->
    <div class="log5">
      <div class="title">Input data</div>
    </div>
    <form action="" method="post">
      <ul>
        <li>
          <div class="nama">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="nama" id="nama" placeholder="Nama" required>
          </div>
        </li>
        <li>
          <div class="nim">
            <i class="fa-solid fa-id-card-clip"></i>
            <input type="text" name="nim" id="nim" placeholder="Nim" required>
          </div>
        </li>
        <li>
          <div class="alamat">
            <i class="fa-sharp fa-solid fa-location-dot"></i>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat" required>
          </div>
        </li>
        <li>
          <div class="fakultas">
            <select name="fakultas" id="fakultas" required>
              <option value="" disabled selected hidden>Pilih Fakultas</option>
              <option value="Mipa">Mipa</option>
              <option value="Teknik">Teknik</option>
              <option value="Keperawatan">Keperawatan</option>
              <option value="Kedokteran">Kedokteran</option>
            </select>
          </div>
        </li>
        <button type="submit" class="button" name="submit">Tambah Data!</button>

      </ul>

    </form>

  </div>
  <!-- tabel -->
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
            <a class="hapus45" href="?id2=<?=$row["id"];?>"><i class="fa-solid fa-trash"></i></a>
            <!-- <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a> -->
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</body>

</html>