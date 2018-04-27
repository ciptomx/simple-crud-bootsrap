<?php 
include('akses.php');
?>

<html>
<head>
	<title>Lihat Produk</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h2 class="text-center title">Lihat Produk</h2>
		<p class="text-center"><a href="index.php">Lihat Produk</a> / <a href="tambahproduk.php">Tambah Produk</a> / <a href="../logout.php">Logout</a></p>

		<p class="text-center">Selamat datang di User Area, Anda Login dengan Username <b><i><?php include('akses.php'); echo $_SESSION['user']; ?></b></i></p>
		</b></p></div></div>
		<div class="container">
		<form name="form1" method="post" action="">
			<table class="table table-bordered" width="500" border="1" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
					<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong>Nama Barang</strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong>Satuan</strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong>Harga</strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong>Keterangan</strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong>Aksi</strong></td>							
				</tr>

						<?php
						//include("../koneksi.php");		//memasukkan file koneksi.php
						include('../variabel.php');
						$sql="SELECT * FROM produk WHERE login_id=".$_SESSION['id']." ORDER BY id DESC";		//select tabel di database
						$result=mysql_query($sql);		//query dari perintah SQL diatas

						$count=mysql_num_rows($result);		//menghitung jumlah baris dari query diatas
							while($res = mysql_fetch_array($result)) {		
							echo "<tr>";
							echo "<td>".$res['id']."</td>";
							echo "<td>".$res['nama']."</td>";
							echo "<td>".$res['satuan']."</td>";
							echo "<td>".$res['harga']."</td>";	
							echo "<td>".$res['keterangan']."</td>";	
							echo "<td align='center'><button type='button' class='btn btn-success text' value=''><a href=\"edit.php?id=$res[id]\">Edit</a></button> / <button type='button' class='btn btn-danger text'><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></button</td>";		
						}
						?>
					</table>
				</form>
	</div>
</body>
</html>