<?php session_start(); ?>

<?php
if(!isset($_SESSION['user'])) {
	header('Location: ../login.php');
}
?>

<?php
//including the database connection file
include_once('../koneksi.php');

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql="DELETE FROM produk WHERE id=$id";
$result=mysql_query($sql);

//redirecting to the display page (view.php in our case)
header("Location: index.php");
?>

