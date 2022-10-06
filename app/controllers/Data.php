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
            header('Location: '.BASEURL.'/Data');
        }
    }
}