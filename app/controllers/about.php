<?php
class about extends controller {
    public function index($nama = "Fauzan", $pekerjaan = "Mahasiswa") {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page($judul = "My Page") {
        $data['judul'] = $judul;
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>