<?php 
require_once 'db_connect.php';
$id = $_GET ['id'];
$query = mysqli_query($connect,"DELETE FROM penggunaan WHERE id_penggunaan = '$id'") OR DIE (mysqli_error($connect));
if ($query) {
	echo "<script>alert('Data berhasil di hapus'); window.location.replace('../penggunaan.php')</script>";
}else{
	echo"<script>alert('Error!'); window.location.replace('../penggunaan.php')</script>";
}
?>