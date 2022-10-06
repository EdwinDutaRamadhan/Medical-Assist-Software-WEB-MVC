<?php
class Data extends Controller{
    public function index(){
        $data['mahasiswa'] = $this->model('Data_models')->getAllMahasiswa();
        $this->view('templates/header');
        $this->view('data/index', $data);
        $this->view('templates/footer');
    }
}