<?php 

session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

include 'function.php';

if (isset($_POST["tambah"])) {

	if (simpan ($_POST) > 0) {
		echo "

		<script>
			alert('Data Berhasil di Tambahkan');
			document.location.href = 'barangmasuk.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('Data Gagal di Tambahkan');
			document.location.href = 'barangmasuk.php';
		</script>

		";
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="icon/logistics.png">
	<title>Gudang Inventory Systems</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
</head>
<body style="font-family: sans-serif;">
	<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" id="side">
  <a href="index.php" class="w3-bar-item" id="dashboard">Dashboard</a>
  <a href="gudang.php" class="w3-bar-item w3-button" id="sidelink">Gudang<img src="icon/gudang2.png" class="iconside"></a>
  <a href="barangmasuk.php" class="w3-bar-item w3-button" id="sidelink">Barang Masuk<img src="icon/masuk2.png" class="iconside"></a>
  <a href="barangkeluar.php" class="w3-bar-item w3-button" id="sidelink">Barang Keluar<img src="icon/keluar2.png" class="iconside"></a>
  <a href="tentang.php" class="w3-bar-item w3-button" id="sidelink">Tentang<img src="icon/info2.png" class="iconside"></a>
  <a href="logout.php" class="w3-bar-item w3-button" id="sidelink" onclick = "return confirm('Anda Yakin Ingin Keluar?');">Logout<img src="icon/logout.png" class="iconside"></a>
</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container" id="titlebar">
	<p>Tambah Barang Masuk</p>
</div>	

<div class="w3-container">
		<div class="form">
		<form action="" method="POST">
		<br>

		<label class="label">Kode Barang</label>
		<input type="text" name="kode_barang" id="kode_barang" required="" class="forminput" placeholder="Kode Barang" autocomplete="off">

		<label class="label">Nama Barang</label>
		<input type="text" name="nama_barang" id="nama_barang" required="" class="forminput" placeholder="Nama Barang" autocomplete="off">

		<label class="label">Pengirim</label>
		<input type="text" name="pengirim" id="pengirim" required="" class="forminput" placeholder="Pengirim" autocomplete="off">

		<label class="label">Tanggal Terima</label>
		<input type="date" name="tanggal_terima" id="tanggal_terima" required="" class="forminput" placeholder="Tanggal Terima" autocomplete="off">

		<label class="label">Penerima</label>
		<input type="text" name="penerima" id="penerima" required="" class="forminput" placeholder="Penerima" autocomplete="off">

		<input type="submit" name="tambah" value="Tambah" class="tomboltambah">
		<input type="reset" name="reset" value="Reset" class="tombolreset">
	</form>
	</div>

</div>
</div>
	
</body>
</html>
