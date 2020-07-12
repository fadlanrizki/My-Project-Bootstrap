<?php require_once 'includes/header.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query ($connect, "SELECT * FROM penggunaan WHERE id_penggunaan = '$id'");
$row = mysqli_fetch_array ($result);
?>
<main class="main">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h4>Edit penggunaan</h4>	
				<div class="float-right" style="padding-bottom: 20px">
					<a href="penggunaan.php" class="btn btn-outline-dark"><i class="fas fa-chevron-left"></i> Kembali</a>
				</div>
				<br><br>
				<form action="php_action/prosesEditPenggunaan.php" method="POST">
					<div class="form-grup">
						<input type="hidden" name="id" value="<?=$row[0]?>">
						<label for="id_pelanggan">id_pelanggan</label>
						<input type="number" name="id_pelanggan" class="form-control" readonly value="<?=$row[1]?>" placeholder="id_pelanggan" autocomplete="off" required>
					</div>
					<div class="form-grup">
						<label for="bulan">bulan</label>
						<input type="text" name="bulan" class="form-control" value="<?=$row[2]?>" autocomplete="off" required>
					<div class="form-grup">
						<label for="tahun">tahun</label>
						<input type="number" name="tahun" class="form-control" value="<?=$row[3]?>" placeholder="tahun" autocomplete="off" required>
					</div>
					<div class="form-grup">
						<label for="meter_awal">meter awal</label>
						<input type="number" name="meter_awal" class="form-control" value="<?=$row[4]?>" autocomplete="off" required>
					</div>
                    <div class="form-grup">
						<label for="meter_akhir">meter akhir</label>
						<input type="number" name="meter_akhir" class="form-control" value="<?=$row[5]?>" autocomplete="off" required>
					</div>
					<br>
					<button class="btn btn-primary btn-lg btn-block" name="editpenggunaan" type="submit">simpan Data</button>
					<a href="penggunaan.php" class="btn btn-secondary btn-lg btn-block">Batal</a>
				</form>
			</div>
		</div>
	</div>
</main> 
<?php require_once 'includes/footer.php';?>