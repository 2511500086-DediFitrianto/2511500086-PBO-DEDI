<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data Pengembalian
            </button>
            <br><br>
            <h3>Daftar Pengembalian Buku</h3>
            <ul class="list-group">
                <?php foreach($data['kembali'] as $kmb): ?>
                    <li class="list-group-item">
                        <?php echo $kmb['kd_kembali086']; ?> - <?php echo $kmb['nmmhs086']; ?> (<?php echo $kmb['nmbuku086']; ?>)
                        <a href="<?php echo BASEURL; ?>/pengembalian/hapus/<?php echo $kmb['kd_kembali086']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
                        <a href="<?php echo BASEURL; ?>/pengembalian/detail/<?php echo $kmb['kd_kembali086']; ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal Form Tambah Data -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Pengembalian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/pengembalian/tambah" method="post">
            <div class="form-group">
                <label for="kd_kembali086">Kode Kembali</label>
                <input type="text" class="form-control" id="kd_kembali086" name="kd_kembali086" required>
            </div>
            <div class="form-group">
                <label for="nimmhs086">NIM Mahasiswa</label>
                <input type="text" class="form-control" id="nimmhs086" name="nimmhs086" required>
            </div>
            <div class="form-group">
                <label for="nmmhs086">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nmmhs086" name="nmmhs086" required>
            </div>
            <div class="form-group">
                <label for="nmbuku086">Nama Buku</label>
                <input type="text" class="form-control" id="nmbuku086" name="nmbuku086" required>
            </div>
            <div class="form-group">
                <label for="jumbuku086">Jumlah Buku</label>
                <input type="number" class="form-control" id="jumbuku086" name="jumbuku086" required>
            </div>
            <div class="form-group">
                <label for="tglkembali086">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tglkembali086" name="tglkembali086" required>
            </div>
            <div class="form-group">
                <label for="denda086">Denda (Rp)</label>
                <input type="number" class="form-control" id="denda086" name="denda086" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>