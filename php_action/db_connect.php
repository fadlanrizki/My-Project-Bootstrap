<?php
$connect = new mysqli("localhost","root","","fadlan_bayar_listrik");
if ($connect->connect_error)
	{die("koneksi gagal" .$connect->connect_error);}
?>