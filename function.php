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

	$query_masuk = "INSERT INTO barang_masuk
		values 
	('','$Kode','$Nama','$pengirim','$tanggal','$penerima')";

	$query_gudang = "INSERT INTO gudang
		values 
	('','$Kode','$Nama','$pengirim','$tanggal','$penerima')";
	mysqli_query($koneksi, $query_masuk);
	mysqli_query($koneksi, $query_gudang);	
	
	return mysqli_affected_rows($koneksi);
}

function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM barang_masuk where id = $id");
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

	$query = "UPDATE barang_masuk SET kode_barang = '$Kode', nama_barang = '$Nama', pengirim = '$pengirim', tanggal_terima = '$tanggal' WHERE id = '$Id' ";

	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}
function tambahad($data){
	global $koneksi;
	$Username = htmlspecialchars($data["username"]);
	$Password = htmlspecialchars($data["password"]);

	$query_admin = "INSERT INTO admin values ('$Username','$Password')";
	mysqli_query($koneksi, $query_admin);
	return mysqli_affected_rows($koneksi);

}

?>