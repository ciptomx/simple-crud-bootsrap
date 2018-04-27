<?php session_start(); ?>

<?php
if(!isset($_SESSION['user'])) {
	header('Location: ../login.php');
}
?>

<?php
// including the database connection file
include('../koneksi.php');
include('../variabel.php');
if(isset($_POST['update']))
{	
	$id = $_POST['id'];

	$nama = $_POST['nama'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];	
	$keterangan=$_POST['keterangan'];
	
	// checking empty fields
	if(empty($nama) || empty($satuan) || empty($harga) || empty($keterangan)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Nama Barang masih kosong.</font><br/>";
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
	} else {	
		//updating the table
		$sql="UPDATE produk SET nama='$nama', satuan='$satuan', harga='$harga', keterangan='$keterangan' WHERE id=$id";
		$result = mysql_query($sql);
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql="SELECT * FROM produk WHERE id=$id";
$result = mysql_query($sql);

while($res = mysql_fetch_array($result))
{
	$nama = $res['nama'];
	$satuan = $res['satuan'];
	$harga = $res['harga'];
	$keterangan = $res['keterangan'];
}
?>
<html>
<head>
	<title>Edit Produk</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h2 class="text-center title">Edit Produk</h2>
		<p class="text-center"><a href="index.php">Lihat Produk</a> / <a href="tambahproduk.php">Tambah Produk</a> / <a href="../logout.php">Logout</a></p>
	
	<form  name="form1" method="post" action="edit.php">
		<table align="center" border="0">
			<tr> 
				<td>Nama Barang</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>" class="form-control" placeholder="Nama Barang" required autofocus></td>
			</tr>
			<tr> 
				<td>Satuan</td>
				<td><input type="text" name="satuan" value="<?php echo $satuan;?>" class="form-control" placeholder="Satuan" required autofocus></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $harga;?>" class="form-control" placeholder="Harga" required autofocus></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $keterangan;?>" class="form-control" placeholder="Nama" required autofocus></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><button type="submit" name="update" class="btn btn-lg btn-primary btn-block" style="margin-top: 10px">Edit</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
