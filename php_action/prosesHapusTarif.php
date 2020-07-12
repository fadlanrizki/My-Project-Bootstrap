<?php 
require_once 'db_connect.php';
$id = $_GET ['id'];
$query = mysqli_query($connect,"DELETE FROM tarif WHERE kode_tarif = '$id'") OR DIE (mysqli_error($connect));
if ($query) {
	echo "<script>alert('Data berhasil di hapus'); window.location.replace('../tarif.php')</script>";
}else{
	echo"<script>alert('Error!'); window.location.replace('../tarif.php')</script>";
}
?>