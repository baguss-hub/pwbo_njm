<?php
class Matkul extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['matkul'] = $this->model('Matkul_model')->getAllMatkul();
        $this->view('templates/header', $data);
        $this->view('matkul/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mata Kuliah';
        $data['matkul'] = $this->model('Matkul_model')->getMatkulById($id);
        $this->view('templates/header', $data);
        $this->view('matkul/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Matkul_model')->tambahDataMatkul($_POST) > 0 ){
            header('Location: '. BASEURL .'/matkul');
            exit;
        }
    }
}