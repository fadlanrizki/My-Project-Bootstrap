<div class="modal fade" id="TambahPenggunaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="php_action/prosesTambahPenggunaan.php" method="POST">
          <div class="form-grup">
            <input type="hidden" name="ID_penggunaan">
          </div>
          <div class="form-grup">
            <label for="ID_pelanggan">ID pelanggan</label>
            <select class=" custom-select" name="ID_pelanggan">
                            <option value="" selected disabled>ID Pelanggan</option>
                            <?php
                            $queryID_pelanggan = mysqli_query($connect, "SELECT * FROM pelanggan");
                            while ($rowID_pelanggan = mysqli_fetch_array($queryID_pelanggan)) {
                                ?>
                                <option value="<?= $rowID_pelanggan[0] ?>" data-id="<?= $rowID_pelanggan[0] ?>"><?= $rowID_pelanggan[0] ?></option>
                            <?php
                            }
                            ?>
                          </select>
          </div>
          <div class="form-grup">
            <label for="bulan">bulan</label>
            <input type="text" name="bulan" placeholder="bulan" class="form-control" autocomplete="off" required>
          </div>
          <div class="form-grup">
            <label for="tahun">tahun</label>
            <input type="number" name="tahun" class="form-control" placeholder="tahun" autocomplete="off" required>
          </div>
          <div class="form-grup">
            <label for="meter_awal">meter awal</label>
            <input type="number" name="meter_awal" class="form-control" placeholder="meter awal" autocomplete="off" required>
              </div>
              <div class="form-grup">
            <label for="meter_akhir">meter akhir</label>
            <input type="number" name="meter_akhir" class="form-control" placeholder="meter akhir" autocomplete="off" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button class="btn btn-success" type="submit">Tambah Data</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
</div>