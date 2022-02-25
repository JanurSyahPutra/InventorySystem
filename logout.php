<?php
session_start();
if (!isset($_SESSION["login"])) {
	echo "

		<script>
			alert('Anda Belum Login!');
			document.location.href = 'index.php';
		</script>

		";
	// header("Location: login.php");
	// exit;
} else {
	session_start();
	session_unset();
	session_destroy();
	header("Location: login.php");
	exit;
}

?>