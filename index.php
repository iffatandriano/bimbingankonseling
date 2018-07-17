<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['username']!="Login"){
	header("location:login.php");
}
?>