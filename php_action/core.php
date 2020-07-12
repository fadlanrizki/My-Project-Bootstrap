<?php 
session_start();
require_once 'php_action/db_connect.php';

if (empty($_SESSION['nama'])) {
	echo "<script>alert('Maaf, anda belum login silahkan login terlebih dahulu'); window.location.replace('index.php')</script>";
}
?>