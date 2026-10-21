
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#exampleModal">
                Tambah Data Mahasiswa
            </button>

            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= htmlspecialchars($mhs['nama']); ?>

                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                           class="badge badge-primary">
                            Detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="exampleModal" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="<?= BASEURL; ?>/mahasiswa/tambah"
                  method="POST">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data Mahasiswa
                    </h5>

                    <button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control"
                               id="nama" name="nama"
                               placeholder="Masukkan Nama" required>
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control"
                               id="nim" name="nim"
                               placeholder="Masukkan NIM" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"
                               id="email" name="email"
                               placeholder="Masukkan Email" required>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan"
                                name="jurusan" required>
                            <option value="Teknik Informatika">
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi">
                                Sistem Informasi
                            </option>
                            <option value="Bisnis Digital">
                                Bisnis Digital
                            </option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">
                        Close
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Tambah Data
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
