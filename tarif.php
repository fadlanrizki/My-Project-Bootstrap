<?php require_once 'includes/header.php'; ?>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">          
     <main role="main">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
       <h1 style="font-family:arial;" class="text-center">Tarif</h1> <br>      
        <div class="float-right" style="padding-bottom: 20px;">
          <a class="btn btn-outline-dark" href="tambahTarif.php">tambah data</a>
          <a class="btn btn-info" href="dashboard.php">dashboard</a>
        </div>
        <form class="form-inline" method="get" action="tarif.php">
          <input class="form-control mr-sm-2 text-center" type="text" name="cari" placeholder="search" required>
        <button class="btn btn-outline-success my-2 m-sm-0" type="submit" name="search">search</button>
         </form>
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
                <td>Kode tarif</td>
                <td>daya</td>
                <td>Tarif perkwh</td>
                <td>Setting</td>
              </tr>
            </thead>
            <tbody>
              <!-- ini coding search -->
              <?php
              if(isset($_GET['search'])){
                $cari = $_GET['cari'];
                $result = mysqli_query($connect,"SELECT * FROM tarif WHERE 
                  kode_tarif LIKE'%".$cari."%' OR
                  daya LIKE'%".$cari."%' OR 
                  tarif_perkwh LIKE '%".$cari."%' 
                  ORDER BY kode_tarif DESC");
              }else{
                $result = mysqli_query($connect, "SELECT * FROM tarif ");
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
                    <td>
                    <div class="btn-group">
                      <a class="btn btn-outline-info" href="editPenggunaan.php?id=<?=$row[0]?>">Edit</a>
                      <a class="btn btn-outline-danger" href="php_action/prosesHapusPenggunaan.php?id=<?=$row[0]?>" onclick="return confirm('apakah anda yakin menghapus data dengan nama<?=$row[1]?>')">hapus</a>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> 

<?php require_once 'includes/footer.php'; ?>
