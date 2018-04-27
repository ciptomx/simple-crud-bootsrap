<?php
include('../koneksi.php');

if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.php";</script>';
}
?>