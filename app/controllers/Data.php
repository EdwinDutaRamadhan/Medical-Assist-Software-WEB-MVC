<?php
class Data extends Controller{
    public function index(){
        $data['mahasiswa'] = $this->model('Data_models')->getAllMahasiswa();
        $this->view('templates/header');
        $this->view('data/index', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Data_models')->tambahDataMahasiswa($_POST)>0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'/Data');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '.BASEURL.'/Data');
            exit;
        }
    }
}