<div class="modal fade" id="TambahTarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
        <form action="php_action/prosesTambahTarif.php" method="POST">
        <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_tarif">Kode tarif</label>
                        <input type="number" name="kode_tarif" class="form-control" placeholder="kode tarif" required>
                    </div>
                    <div class="form-group">
                        <label for="daya">Daya</label>
                        <input type="text" name="daya" class="form-control" placeholder="daya" required>
                    </div>
                    <div class="form-group">
                        <label for="tarif_perkwh">Tarif perkwh</label>
                        <input type="number" name="tarif_perkwh" class="form-control" placeholder="tarif_perkwh" required>
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