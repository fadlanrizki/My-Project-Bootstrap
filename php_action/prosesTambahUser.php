<?php
require_once 'db_connect.php';
if($_POST){
	$ID_user = $_POST['ID_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = MD5($_POST['password']);	
	$level = $_POST['level'];
		$query = mysqli_query($connect, "INSERT INTO user(ID_user, nama, username, password, level) VALUES ('$ID_user','$nama','$username','$password','$level')")OR DIE (mysqli_error($connect));
		if ($query){
			echo"<script>alert('Data berhasil ditambahkan'); window.location.replace('../user.php')</script>";
		}else{
			echo"<script>alert('Gagal!'); window.location.replace('../tambahUser.php')</script>";
		}
	}

?>