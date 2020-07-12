<?php 
if ($_SESSION['level'] != 1) {
	echo "<script>alert('Anda bukan admin atau mananger, silahkan login terlebih dahulu'); window.location.replace('dashboard.php')</script>";
}
?>