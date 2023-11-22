<?php 
session_start();
// cek ada session
	if( !isset($_SESSION["login"]) ) {
		 header("Location:login.php");
		 exit;

	}
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			document.location.href = 'index.php?berhasilhapus=benarbro';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'index.php';
		</script>
	";
}

?>