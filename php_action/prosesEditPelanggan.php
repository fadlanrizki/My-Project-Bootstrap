<?php
require_once 'db_connect.php';
if($_POST){
	$id = $_POST['id'];
	$no_meter = $_POST['no_meter'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kode_tarif = $_POST['kode_tarif'];
	$query = mysqli_query($connect, "UPDATE pelanggan SET 
		no_meter ='$no_meter',
		nama = '$nama',
		alamat ='$alamat'
		WHERE ID_pelanggan ='$id'")OR DIE (mysqli_error($connect));
	if ($query) {
		echo "<script>alert('Data berhasil diubah');
		window.location.replace('../pelanggan.php')</script>";
	}else{
		echo "<script>alert('Gagal!');
		window.location.replace('../editPelanggan.php')</script>";
	}
}
?>