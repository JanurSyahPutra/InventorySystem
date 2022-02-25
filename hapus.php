<?php

session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
} 

include 'function.php';

$id = $_GET["id"];

if (hapus ($id)) {
	echo "

		<script>
			alert('Data Berhasil di Hapus');
			document.location.href = 'barangmasuk.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('Data Gagal di Hapus');
			document.location.href = 'barangmasuk.php';
		</script>

		";
}

 ?>