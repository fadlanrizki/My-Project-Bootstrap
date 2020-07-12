<?php require_once 'includes/header.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query ($connect, "SELECT * FROM tarif WHERE kode_tarif = '$id'");
$row = mysqli_fetch_array ($result);
?>
<main class="main">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h4>Edit tarif</h4>	
				<div class="float-right" style="padding-bottom: 20px">
					<a href="tarif.php" class="btn btn-outline-dark"><i class="fas fa-chevron-left"></i> Kembali</a>
				</div>
				<br><br>
				<form action="php_action/prosesEditTarif.php" method="POST">
                <input type="hidden" name="id" value="<?=$row[0]?>">
					<div class="form-grup">
						<label for="daya">daya</label>
						<input type="text" name="daya" class="form-control" value="<?=$row[1]?>" autocomplete="off" required>
					<div class="form-grup">
						<label for="tarif_perkwh">tarif_perkwh</label>
						<input type="text" name="tarif_perkwh" class="form-control" value="<?=$row[2]?>" placeholder="tarif_perkwh" autocomplete="off" required>
					</div>
					<br>
					<button class="btn btn-primary btn-lg btn-block" name="edittarif" type="submit">simpan Data</button>
					<a href="tarif.php" class="btn btn-secondary btn-lg btn-block">Batal</a>
				</form>
			</div>
		</div>
	</div>
</main> 
<?php require_once 'includes/footer.php';?>