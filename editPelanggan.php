<?php require_once 'includes/header.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query ($connect, "SELECT * FROM pelanggan WHERE id_pelanggan = '$id'");
$row = mysqli_fetch_array ($result);
?>
<main class="main">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h4>Edit pelanggan</h4>	
				<div class="float-right" style="padding-bottom: 20px">
					<a href="pelanggan.php" class="btn btn-outline-dark"><i class="fas fa-chevron-left"></i> Kembali</a>
				</div>
				<br><br>
				<form action="php_action/prosesEditPelanggan.php" method="POST">
					<div class="form-grup">
						<input type="hidden" name="id" value="<?=$row[0]?>">
						<label for="no_meter">no_meter</label>
						<input type="number" name="no_meter" class="form-control" readonly value="<?=$row[1]?>" placeholder="id_barang" autocomplete="off" required>
					</div>
					<div class="form-grup">
						<label for="nama">nama</label>
						<input type="text" name="nama" class="form-control" value="<?=$row[2]?>" autocomplete="off" required>
					<div class="form-grup">
						<label for="alamat">alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?=$row[3]?>" placeholder="alamat" autocomplete="off" required>
					</div>
					<div class="form-grup">
						<label for="kode_tarif">kode_tarif</label>
						<input type="text" name="kode_tarif" class="form-control" readonly value="<?=$row[4]?>" autocomplete="off" required>
					</div>	
					<br>
					<button class="btn btn-primary btn-lg btn-block" name="editPelanggan" type="submit">simpan Data</button>
					<a href="pelanggan.php" class="btn btn-secondary btn-lg btn-block">Batal</a>
				</form>
			</div>
		</div>
	</div>
</main> 
<?php require_once 'includes/footer.php';?>