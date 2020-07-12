<?php require_once 'includes/header.php'; ?>
  <main role="main">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
      <!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="dashboard.php">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">tagihan</li>
</ol>
        <div class="float-right" style="padding-bottom: 20px;">
          <a class="btn btn-primary" href="dashboard.php"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </div>
         <?php
         if (isset($_GET['search'])){
          $cari = $_GET['cari'];
          echo"<h1>Hasil pencarian dari" .$cari."</h1>";
         }
         ?> 
         <div class="table-responsive">
          <table class="table table-bordered" id="fadlan" width="100%" cellspacing="0">
            <thead>
              <tr>
                <td>No</td>
                <td>ID pelanggan</td>
                <td>Bulan</td>
                <td>Tahun</td>
                <td>jumlah meter</td>
                <td>Tagihan</td>    
              </tr>
            </thead>
            <tbody>
              
              <?php
              if(isset($_GET['search'])){
              }else{
                $result = mysqli_query($connect, "SELECT pelanggan.ID_pelanggan,penggunaan.bulan,penggunaan.tahun,(penggunaan.meter_akhir-penggunaan.meter_awal) AS jumlahmeter,((penggunaan.meter_akhir-penggunaan.meter_awal)*tarif.tarif_perkwh) AS tagihan
					FROM pelanggan, penggunaan, tarif
					WHERE pelanggan.ID_pelanggan=penggunaan.ID_pelanggan AND
					pelanggan.kode_tarif=tarif.kode_tarif");
              }
              $no = 1;
              if (mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$row[0]?></td>
                    <td><?=$row[1]?></td>
                    <td><?=$row[2]?></td>
                    <td><?=$row[3]?></td>
                    <td><?=$row[4]?></td>
                  </tr>
                </div>
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
 