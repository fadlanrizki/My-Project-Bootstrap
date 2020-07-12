<?php
require_once 'db_connect.php';
if($_POST){
	$ID_pelanggan = $_POST['ID_pelanggan'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
    $meter_awal = $_POST['meter_awal'];
    $meter_akhir = $_POST['meter_akhir'];
    	
	$query = mysqli_query($connect, "INSERT INTO penggunaan(ID_pelanggan, bulan, tahun, meter_awal, meter_akhir) VALUES ('$ID_pelanggan','$bulan','$tahun','$meter_awal','$meter_akhir')")OR DIE (mysqli_error($connect));
		if ($query){
			echo"<script>alert('Data barang berhasil ditambahkan'); window.location.replace('../penggunaan.php')</script>";
		}else{
			echo"<script>alert('Gagal!'); window.location.replace('../tambahpenggunaan.php')</script>";
		}
	}
?>