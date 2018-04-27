<?php
include('../koneksi.php');

if(!isset($_SESSION['tamu'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.php";</script>';
}
?>