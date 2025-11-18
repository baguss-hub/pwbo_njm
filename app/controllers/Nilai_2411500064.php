<?php
class Nilai_2411500064 extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Nilai';
        $data['nlai'] = $this->model('Nilai2411500064_model')->getAllNilai();
        $this->view('templates/header', $data);
        $this->view('nilai/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['nlai'] = $this->model('Nilai2411500064_model')->getNilaiById($id);
        $this->view('templates/header', $data);
        $this->view('nilai/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Nilai2411500064_model')->tambahDataNilai($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan.', 'success');
            header('Location: '. BASEURL .'/Nilai_2411500064');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan.', 'danger');
            header('Location: '. BASEURL .'/Nilai_2411500064');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Nilai2411500064_model')->hapusDataNilai($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus.', 'success');
            header('Location: '. BASEURL .'/Nilai_2411500064');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus.', 'danger');
            header('Location: '. BASEURL .'/Nilai_2411500064');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Nilai2411500064_model')->getNilaiById($_POST['idx']));
    }
}