<?php
require_once 'db_connect.php';
if($_POST){
	$id = $_POST['id'];
	$id_pelanggan = $_POST['id_pelanggan'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$meter_awal = $_POST['meter_awal'];
    $meter_akhir = $_POST['meter_akhir'];

    $query = mysqli_query($connect, "UPDATE penggunaan SET 
		id_pelanggan ='$id_pelanggan',
		bulan = '$bulan',
		tahun ='$tahun',
        meter_awal = '$meter_awal',
        meter_akhir = '$meter_akhir'
		WHERE ID_penggunaan ='$id'")OR DIE (mysqli_error($connect));
	if ($query) {
		echo "<script>alert('Data berhasil diubah');
		window.location.replace('../penggunaan.php')</script>";
	}else{
		echo "<script>alert('Gagal!');
		window.location.replace('../editPelanggan.php')</script>";
	}
}
?>