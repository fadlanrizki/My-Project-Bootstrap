<?php
require_once 'db_connect.php';
if($_POST){
    $id = $_POST['id'];
	$daya = $_POST['daya'];
	$tarif_perkwh = $_POST['tarif_perkwh'];
	$query = mysqli_query($connect, "UPDATE tarif SET 
		daya = '$daya',
		tarif_perkwh ='$tarif_perkwh'
		WHERE kode_tarif ='$id'")OR DIE (mysqli_error($connect));
	if ($query) {
		echo "<script>alert('Data berhasil diubah');
		window.location.replace('../tarif.php')</script>";
	}else{
		echo "<script>alert('Gagal!');
		window.location.replace('../editTarif.php')</script>";
	}
}
?>