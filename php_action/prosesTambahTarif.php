<?php
require_once 'db_connect.php';
if($_POST){
	$kode_tarif = $_POST['kode_tarif'];
	$daya = $_POST['daya'];
	$tarif_perkwh = $_POST['tarif_perkwh'];
	$query = mysqli_query($connect, "INSERT INTO tarif(kode_tarif, daya, tarif_perkwh) VALUES ('$kode_tarif','$daya','$tarif_perkwh')")OR DIE (mysqli_error($connect));
		if ($query){
			echo"<script>alert('Data barang berhasil ditambahkan'); window.location.replace('../tarif.php')</script>";
		}else{
			echo"<script>alert('Gagal!'); window.location.replace('../tambahTarif.php')</script>";
		}
	}
?>