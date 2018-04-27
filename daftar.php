<html>
<head>
	<title>Pendaftaran</title>
</head>

<body>
<?php
include("koneksi.php");

if(isset($_POST['daftar'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == "" || $nama == "" || $email == "") {
		echo "Semua fill harus diisi, tidak boleh kosong.";
		echo "<br/>";
		echo "<a href='register.php'>Kembali</a>";
	} else {
		$sql="INSERT INTO login(nama, email, username, password, level) VALUES('$nama', '$email', '$user', md5('$pass'), 2)";
		$result=mysql_query($sql) or die("Tidak bisa mendambahkan User baru.");
		echo $result;	
		echo "Pendaftaran Sukses";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
	}
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Pendaftaran</h1>
            <div class="account-wall">
                <form class="form-signin" name="form1" action="" method="post">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required autofocus>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
                <input type="text" name="username" class="form-control" placeholder="Username" namerequired autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="daftar">
                    Daftar</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="agree">
                    Setuju dengan perjanjian ?
                </label>
                <a href="#" class="pull-right need-help">Bantuan? </a><span class="clearfix"></span>
                </form>
            </div><br>
            <p class="text-center"> Sudah punya akun? <a href="index.php" class="text-center">Klik disini </a>
        </div>
    </div>
</div>
<?php
}
?>
</body>
</html>
