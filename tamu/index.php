<?php include('akses.php'); ?>
<html>
<head>
	<title>Tamu Area</title>
</head>
<body>

	<div style="text-align:center">
		<h2>Tamu Area</h2>
		<p><a href="index.php">Home</a> / <a href="../logout.php">Logout</a></p>

		<p>Selamat datang di Tamu Area, Anda Login dengan username <?php echo $_SESSION['tamu']; ?></p>
		
	</div>

</body>
</html>