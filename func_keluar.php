<?php 

$koneksi = mysqli_connect("localhost","root","","db_gudang");

function query($query){
	global $koneksi;
	$res = mysqli_query($koneksi, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($res)){
		$rows[] = $row;
	}
	return $rows;
}

function simpan($data){
	global $koneksi;

	$Kode = htmlspecialchars($data["kode_barang"]);  
	$Nama = htmlspecialchars($data["nama_barang"]);
	$pengirim = htmlspecialchars($data["pengirim"]);
	$tanggal = htmlspecialchars($data["tanggal_terima"]);
	$penerima = htmlspecialchars($data["penerima"]);

	$query_keluar = "INSERT INTO barang_keluar
		values 
	('','$Kode','$Nama','$pengirim','$tanggal','$penerima')";
	$query_gudang_hilang = "DELETE FROM gudang WHERE kode_barang='$Kode'";
	mysqli_query($koneksi, $query_keluar);
	mysqli_query($koneksi, $query_gudang_hilang);
	return mysqli_affected_rows($koneksi);
}

function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM barang_keluar where id = $id");

	return mysqli_affected_rows($koneksi);
}

function ubah($data){
	global $koneksi;
	$Id = $data["id"];
	$Kode = htmlspecialchars($data["kode_barang"]);  
	$Nama = htmlspecialchars($data["nama_barang"]);
	$pengirim = htmlspecialchars($data["pengirim"]);
	$tanggal = htmlspecialchars($data["tanggal_terima"]);
	$penerima = htmlspecialchars($data["penerima"]);

	$query = "UPDATE barang_keluar SET kode_barang = '$Kode', nama_barang = '$Nama', pengirim = '$pengirim', tanggal_terima = '$tanggal' WHERE id = '$Id' ";

	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

?>