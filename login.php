<?php
include('koneksi.php');
include('variabel.php');
if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));

	$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("Error! User Tidak ditemukan, Silahkan Login ulang"); document.location="index.php";</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['admin']=$user;
			//$_SESSION['id'] = $row['id'];
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
		} elseif ($row['level'] == 2){
			$_SESSION['user']=$user;
			$_SESSION['id'] = $row['id'];
			echo '<script language="javascript">alert("Anda berhasil Login User!"); document.location="user/index.php";</script>';
		} else{
			$_SESSION['tamu']=$user;
			//$_SESSION['id'] = $row['id'];
			echo '<script language="javascript">alert("Anda berhasil Login Tamu!"); document.location="tamu/index.php";</script>';
		}
	}
}
?>