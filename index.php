<?php

// session_start();
// if (!isset($_SESSION["login"])) {
// 	header("Location: login.php");
// 	exit;
// }
include 'function.php';


$data_barang = mysqli_query($koneksi,"SELECT * FROM barang_masuk");
$jumlah_barang = mysqli_num_rows($data_barang);


$data_keluar = mysqli_query($koneksi,"SELECT * FROM barang_keluar");
$jumlah_keluar = mysqli_num_rows($data_keluar);

$data_gudang = mysqli_query($koneksi,"SELECT * FROM gudang");
$jumlah_gudang = mysqli_num_rows($data_gudang);

$gudang = query("SELECT * FROM gudang");
$masuk = query("SELECT * FROM barang_masuk");
$keluar = query("SELECT * FROM barang_keluar");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="icon/logistics.png">
	<title>Gudang Inventory Systems</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/side.css">
	<link rel="stylesheet" type="text/css" href="css/tabledash.css">
</head>
<body class="index">
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
	<p>Gudang Inventory Systems</p>
</div>	
<br>
<br>
<div class="w3-container">
	<div class="btnprintall">
		<img src="icon/print.png" width="25px">
		<input type='submit' class="printall" value='Cetak Semua' onclick='printDiv("print");'>
	</div>
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
		<?php foreach ($gudang as $row): ?>
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
		<tr class="jml">
			<td colspan="4" class="tengah">Jumlah Barang di Gudang</td>
			<td colspan="2"><?php echo $jumlah_gudang; ?></td>
		</tr>
	</table>
	<br>
	<br>
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
		<?php foreach ($masuk as $row): ?>
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
		<tr class="jml">
			<td colspan="4" class="tengah">Jumlah Barang Masuk</td>
			<td colspan="2"><?php echo $jumlah_barang; ?></td>
		</tr>
	</table>
	<br>
	<br>
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
		<?php foreach ($keluar as $row): ?>
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
		<tr class="jml">
			<td colspan="4" class="tengah">Jumlah Barang Keluar</td>
			<td colspan="2"><?php echo $jumlah_keluar; ?></td>
		</tr>
	</table>
	<br>
	</div>
	<script src="css/print.js"></script>
</div>
</div>
</body>
</html>