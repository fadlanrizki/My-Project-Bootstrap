<?php 
if ($_SESSION['level'] != 1 && $_SESSION['level'] !=2) {
	echo "<script>alert('Anda bukan admin atau mananger, silahkan login terlebih dahulu'); window.location.replace('dashboard.php')</script>";
}
?>