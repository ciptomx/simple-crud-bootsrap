<?php session_start(); ?>

<?php
if(!isset($_SESSION['user'])) {
	header('Location: ../login.php');
}
?>

<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
<?php
//including the database connection file
include_once('../koneksi.php');
include('../variabel.php');
if(isset($_POST['tambah'])) {	
	$nama = $_POST['nama'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$keterangan = $_POST['keterangan'];
	$loginId = $_SESSION['id'];
		
	// checking empty fields
	if(empty($nama) || empty($satuan) || empty($harga) || empty($keterangan)){
		if(empty($nama)) {
			echo "<font color='red'>Nama barang masih kosong.</font><br/>";
		}
		
		if(empty($satuan)) {
			echo "<font color='red'>Satuan masih kosong.</font><br/>";
		}
		
		if(empty($harga)) {
			echo "<font color='red'>Harga masih kosong.</font><br/>";
		}
		if(empty($keterangan)) {
			echo "<font color='red'>Keterangan masih kosong.</font><br/>";
		}		

		echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
	} else { 
		
		$sql="INSERT INTO produk (nama, satuan, harga, keterangan, login_id) VALUES ('$nama', '$satuan', '$harga', '$keterangan', '$loginId')";
		$result = mysql_query($sql);
		echo "<br>" . mysql_error();

		echo "<center>";
		echo "<font color='green'>Data Sudah dimasukkan.";
		header('Location: index.php');
		//echo "<br/><a href='index.php'>Lihat Hasil</a></center>";
	}
}
?>
</body>
</html>
