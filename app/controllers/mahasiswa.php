
<?php

class mahasiswa extends controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }

        $hasil = $this->model('mahasiswa_model')
                      ->tambahDataMahasiswa($_POST);

        if ($hasil > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }

        echo "Data mahasiswa gagal ditambahkan. Periksa kembali model dan struktur tabel database.";
    }
}
