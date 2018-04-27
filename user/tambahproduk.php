<?php 
include('akses.php');
?>

<html>
<head>
	<title>Tambah Produk</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h2 class="text-center title">Tambah Produk</h2>
		<p class="text-center"><a href="index.php">Lihat Produk</a> / <a href="tambahproduk.php">Tambah Produk</a> / <a href="../logout.php">Logout</a></p>
			<form class="form-signin" action="tambah.php" method="post" name="form1">
		<table border="0">
			<tr> 
				<td>Nama Barang</td>
				<td><input type="text" name="nama" class="form-control" placeholder="Nama Barang" required autofocus></td>
			</tr>
			<tr> 
				<td>Satuan</td>
				<td><input type="text" name="satuan" class="form-control" placeholder="Satuan" required autofocus></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga" class="form-control" placeholder="Harga" required autofocus></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" class="form-control" placeholder="Nama" required autofocus></td>
			</tr>
			<tr> 
				<td><tr><td>
				<td><button type="submit" name="tambah" class="btn btn-lg btn-primary btn-block" style="margin-top: 10px">Tambah</button></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>