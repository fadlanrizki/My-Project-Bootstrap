<?php 
if ($_SESSION['level'] != 3) {
	echo "<script>alert('Anda bukan user, silahkan login terlebih dahulu'); window.location.replace('dashboard.php')</script>";
}
?>