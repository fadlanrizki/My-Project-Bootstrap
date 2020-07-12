<?php require_once 'includes/header.php'; ?>
<?php require_once 'modal/tambahUser.php'; ?>
<main role="main">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="dashboard.php">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">user</li>
</ol>
        <div class="float-right" style="padding-bottom: 20px;">
          <button class="btn btn-success" data-toggle="modal" data-target="#TambahUser" href="tambahUser.php"> <i class="fas fa-plus"></i> Tambah Data</button>
          <a class="btn btn-info" href="dashboard.php"> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </div>
         <div class="table-responsive">
           <table class="table table-bordered" id="fadlan"  width="100%" cellspacing="0">
            <thead>
              <tr>
                <td>No</td>
                <td>ID User</td>
                <td>Nama</td>
                <td>username</td>
                <td>password</td>
                <td>level</td>
                <td>Setting</td>
                
              </tr>
            </thead>
            <tbody>
              <?php
              $result = mysqli_query($connect,"SELECT * FROM user ORDER BY ID_user DESC");
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
                   
                    <td>
                    <div class="btn-group">
                      <a class="btn btn-outline-info" href="editUser.php?id=<?=$row[0]?>">  <i class="fas fa-edit"></i> Edit</a>
                      <a class="btn btn-outline-danger" href="php_action/prosesHapusUser.php?id=<?=$row[0]?>" onclick="return confirm('apakah anda yakin menghapus data dengan nama<?=$row[1]?>')"> <i class="fas fa-trash-alt"></i> Hapus</a>
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

