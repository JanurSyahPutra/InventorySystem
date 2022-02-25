<?php

session_start();

if (isset($_SESSION["login"])) {
	header("Location: index.php");
}

include 'function.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

	$data = mysqli_fetch_assoc($cek);
	$res = mysqli_num_rows($cek);

	if ($res == 1) {
		$_SESSION["login"] = true;

		header("Location: index.php");
		exit;
	}

	$error = true;

}
if (isset($_POST["regis"])) {

	if (tambahad ($_POST) > 0) {
		echo "

		<script>
			alert('Admin Berhasil di Tambahkan');
			document.location.href = 'login.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('Admin Gagal di Tambahkan');
			document.location.href = 'login.php';
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
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
</head>
<body>
	<div class="colom">
		<div class="img">
			<img src="icon/logistics.png" >
			<div class="trans">
				<h2 class="text">Gudang Inventory Systems</h2>
			</div>
		</div>
	<div class="form">
		<div class="form-isi">
			<div class="form-judul"><h2 style="margin-top: 70px;">Login</h2>
				<div class="garis"></div>
			</div>

			<?php if (isset($error)) : ?>
				<h2 style="color: #FF152E;">Username Atau Password salah!</h2>
			<?php endif; ?>

			<form method="POST" action="" class="inpform">
				<label>Username</label>
				<input type="text" name="username" id="username" class="forminput" autocomplete="off" required="">

				<br>

				<label>Password</label>
				<input type="password" name="password" id="password" class="forminput" required="">

				<button type="submit" name="login" class="tombolsign">Sign in</button>
				<button type="button" name="login" class="tombolregis" id="myBtn">Registrasi</button>
				<br>
				</p>
				<a href="index.php" class="beranda">Kembali Ke Beranda</a>
				<div class="garis3"></div>
			</form>
			<div id="myModal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<div class="form-judul">
						<h2>Registrasi</h2>
						<div class="garis2"></div>
					</div>
					<form action="" method="POST">
						<label>Username</label>
						<input type="text" name="username" id="username" class="forminput" autocomplete="off" required="">
						<br>
						<label>Password</label>
						<input type="password" name="password" id="password" class="forminput" autocomplete="off" required="">
						<!-- <br>
						<label>Confirm Password</label>
						<input type="password" name="password" class="forminput"> -->

						<button type="submit" name="regis" class="tombolsign">Registrasi</button>
					</form>
				</div>
			</div>
			<script src="css/popup.js"></script>
		</div>
	</div>
	</div>
</body>
</html>