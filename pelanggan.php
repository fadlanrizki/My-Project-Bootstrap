<?php require_once 'includes/header.php'; ?>
<?php require_once 'modal/tambahPelanggan.php'; ?>
<main role="main">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="dashboard.php">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Pelanggan</li>
</ol>


        <div class="float-right" style="padding-bottom: 20px;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#TambahPelanggan"><i class="fas fa-plus"></i>
        Tambah data
        </button>

          <a class="btn btn-primary" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </div>
         <div class="table-responsive">
           <table class="table table-bordered" id="fadlan"  width="100%" cellspacing="0">
            <thead>
              <tr>
                <td>No</td>
               
                <td>No meter</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Kode tarif</td>
                <td>Setting</td>
                
              </tr>
            </thead>
            <tbody>
              <!-- ini coding search -->
              <?php      
                $result = mysqli_query($connect, "SELECT * FROM pelanggan ORDER BY ID_pelanggan DESC");
        
              $no = 1;
              if (mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                 
                    <td><?=$row[1]?></td>
                    <td><?=$row[2]?></td>
                    <td><?=$row[3]?></td>
                    <td><?=$row[4]?></td>
                    <td>
                    <div class="btn-group">
                      <a class="btn btn-outline-info" href="editPelanggan.php?id=<?=$row[0]?>"><i class="fas fa-edit"></i> Edit</a>
                      <a class="btn btn-outline-danger" href="php_action/prosesHapusPelanggan.php?id=<?=$row[0]?>" onclick="return confirm('apakah anda yakin menghapus data dengan nama<?=$row[2]?>')"><i class="fas fa-trash-alt"></i> Hapus</a>
                </div>
              </td>
                  </tr>
                </div>
              </td>
            </tr>
            <?php
          }
        }
        else{
          ?>
                      <tr>
                        <td colspan="11" class="text-center"><h3>Tidak ada data</h3></td>
                      </tr>
                      <?php
                    }
                    ?>      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
<?php require_once 'includes/footer.php'; ?>

