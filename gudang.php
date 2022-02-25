<?php

// session_start();
// if (!isset($_SESSION["login"])) {
// 	header("Location: login.php");
// 	exit;
// }

include 'function.php';

$ambil = query("SELECT * FROM gudang");

 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="icon/logistics.png">
	<title>Gudang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
</head>
<body>
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
	<p>Data Barang Ke Gudang</p>
</div>	
<br>
<div class="w3-container">
		<!-- <a href="tambahmasuk.php" class="tomboltbh"><img src="icon/add3.png" width="25px">	Tambah data</a>
		<br> -->
		<br>
		<div id="print">
		<table class="table">
		<tr class="judul">
			<td width="5%">Nomor</td>
			<td width="10%">Kode Barang</td>
			<td width="10%">Nama Barang</td>
			<td width="10%">Pengirim</td>
			<td width="10%">Tanggal Terima</td>
			<td width="10%">Penerima</td>
			
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($ambil as $row): ?>

		<tr class="isi">
			<td><?php echo $i; ?></td>
			<td><?php echo $row["kode_barang"] ?></td>
			<td><?php echo $row["nama_barang"] ?></td>
			<td><?php echo $row["pengirim"] ?></td>
			<td><?php echo $row["tanggal_terima"] ?></td>
			<td><?php echo $row["penerima"] ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>
	<br>
	</div>
	<div class="btnprint">
		<img src="icon/print.png" width="25px">
		<input type='submit' class="print" value='Cetak' onclick='printDiv("print");'>
	</div>
	<br>
</div>
	<script src="css/print.js"></script>
</div>
	
</body>
</html>