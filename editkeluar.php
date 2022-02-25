<?php
   
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include 'func_keluar.php';
 
$id=$_GET["id"];
 
$data= query("SELECT * FROM barang_keluar WHERE id = $id")[0];
 
 
if (isset($_POST["edit"])) {
 
    if (ubah($_POST) > 0) {
        echo "
 
        <script>
            alert('Data Berhasil di Edit');
            document.location.href = 'barangkeluar.php';
        </script>
 
        ";
    }
    else {
        echo "
        <script>
            alert('Data Gagal di Edit');
            document.location.href = 'barangkeluar.php';
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
    <div class="w3-sidebar w3-bar-block w3-card" id="side">
      <a href="index.php" class="w3-bar-item" id="dashboard">Dashboard</a>
  <a href="gudang.php" class="w3-bar-item w3-button" id="sidelink">Gudang<img src="icon/gudang2.png" class="iconside"></a>
  <a href="barangmasuk.php" class="w3-bar-item w3-button" id="sidelink">Barang Masuk<img src="icon/masuk2.png" class="iconside"></a>
  <a href="barangkeluar.php" class="w3-bar-item w3-button" id="sidelink">Barang Keluar<img src="icon/keluar2.png" class="iconside"></a>
  <a href="tentang.php" class="w3-bar-item w3-button" id="sidelink">Tentang<img src="icon/info2.png" class="iconside"></a>
  <a href="logout.php" class="w3-bar-item w3-button" id="sidelink" onclick = "return confirm('Anda Yakin Ingin Keluar?');">Logout<img src="icon/logout.png" class="iconside"></a>
    </div>

    <div style="margin-left:15%">
        <div class="w3-container" id="titlebar">
        <p>Ubah Data Barang Keluar</p>
    </div>

    <div class="w3-container">
        <div class="form">
        <form action="" method="POST">
        <br>
 
            <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
     
            <label class="label">Kode Barang</label>
            <input type="text" name="kode_barang" id="kode" required="" class="forminput" value="<?php echo $data["kode_barang"] ?>" autocomplete="off">
     
            <label class="label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama" required="" class="forminput" value="<?php echo $data["nama_barang"] ?>" autocomplete="off">
     
            <label class="label">Pengirim</label>
            <input type="text" name="pengirim" id="jml" required="" class="forminput" value="<?php echo $data["pengirim"] ?>" autocomplete="off">
     
            <label class="label">Tanggal Terima</label>
            <input type="date" name="tanggal_terima" id="satuan" required="" class="forminput" value="<?php echo $data["tanggal_terima"] ?>" autocomplete="off">
     
            <label class="label">Penerima</label>
            <input type="text" name="penerima" id="penerima" required="" class="forminput" value="<?php echo $data["penerima"] ?>" autocomplete="off">
     
            <input type="submit" name="edit" value="Edit" class="tomboltambah">
        </form>
    </div>
    </div>
    </div>
</body>
</html>