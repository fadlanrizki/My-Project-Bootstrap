<?php 
require_once 'db_connect.php';
$id = $_GET ['id'];
$query = mysqli_query($connect,"DELETE FROM user WHERE ID_user = '$id'") OR DIE (mysqli_error($connect));
if ($query) {
	echo "<script>alert('Data berhasil di hapus'); window.location.replace('../user.php')</script>";
}else{
	echo"<script>alert('Error!'); window.location.replace('../user.php')</script>";
}
?>