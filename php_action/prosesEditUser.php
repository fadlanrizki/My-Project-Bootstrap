<?php
require_once 'db_connect.php';
if($_POST){
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = MD5($_POST['password']);
	$level = $_POST['level'];
	$query = mysqli_query($connect, "UPDATE user SET 
		nama ='$nama',
		username ='$username',
		password = '$password',
		level ='$level'
		WHERE ID_user ='$id'")OR DIE (mysqli_error($connect));
	if ($query) {
		echo "<script>alert('Data berhasil diubah');
		window.location.replace('../user.php')</script>";
	}else{
		echo "<script>alert('Gagal!');
		window.location.replace('../user.php')</script>";
	}
}
?>