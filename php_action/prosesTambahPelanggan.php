<?php
require_once 'db_connect.php';
if($_POST){
	$no_meter = $_POST['no_meter'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kode_tarif = $_POST['kode_tarif'];	
	$query = mysqli_query($connect, "INSERT INTO pelanggan(no_meter, nama, alamat, kode_tarif) VALUES ('$no_meter','$nama','$alamat','$kode_tarif')")OR DIE (mysqli_error($connect));
		if ($query){
			echo"<script>alert('Data berhasil ditambahkan'); window.location.replace('../pelanggan.php')</script>";
		}else{
			echo"<script>alert('Gagal!'); window.location.replace('../tambahPelanggan.php')</script>";
		}
	}
?>