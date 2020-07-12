<div class="modal fade" id="TambahPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
        <form action="php_action/prosesTambahPelanggan.php" method="POST">
        <div class="modal-body">
                    <div class="form-group">
                        <label for="no_meter">No Meter</label>
                        <input type="text" name="no_meter" class="form-control" placeholder="No Meter" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_tarif">kode tarif</label>
                        <select class=" custom-select" name="kode_tarif">
                            <option value="" selected disabled>Kode Tarif</option>
                            <?php
                            $querykode_tarif = mysqli_query($connect, "SELECT * FROM tarif");
                            while ($rowkode_tarif = mysqli_fetch_array($querykode_tarif)) {
                                ?>
                                <option value="<?= $rowkode_tarif[0] ?>" data-id="<?= $rowkode_tarif[0] ?>"><?= $rowkode_tarif[0] ?></option>
                            <?php
                            }
                            ?>
                          </select>
                    </div>
                    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-success">Tambah Data</button>
        </form>
      </div>
      
      </div>
    </div>
  </div>
</div>
</div>