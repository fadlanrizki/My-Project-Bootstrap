<?php require_once 'includes/header.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query ($connect, "SELECT * FROM user WHERE ID_user = '$id'");
$row = mysqli_fetch_array ($result);
?>
<main class="main">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h4>Edit user</h4>	
				<div class="float-right" style="padding-bottom: 20px">
					<a href="user.php" class="btn btn-outline-dark"><i class="fas fa-chevron-left"></i> Kembali</a>
				</div>
				<br><br>
				<form action="php_action/prosesEditUser.php" method="POST">
					<div class="form-grup">
                        <label for="ID_user">ID user</label>
						<input type="number" class="form-control" name="id" readonly value="<?=$row[0]?>">
					</div>
					<div class="form-grup">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" value="<?=$row[1]?>" autocomplete="off" required>
					<div class="form-grup">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" value="<?=$row[2]?>" placeholder="username" autocomplete="off" required>
					</div>
					<div class="form-grup">
						<label for="password">Password</label>
						<input type="text" name="password" class="form-control" value="<?=$row[3]?>" autocomplete="off" required>
					</div>
                    <div class="form-group">
                        <label for="level">level</label>
                        <select class="custom-select" name="level">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        </select>
                    </div>
					<br>
					<button class="btn btn-primary btn-lg btn-block" name="edituser" type="submit">simpan Data</button>
					<a href="user.php" class="btn btn-secondary btn-lg btn-block">Batal</a>
				</form>
			</div>
		</div>
	</div>
</main> 
<?php require_once 'includes/footer.php';?>