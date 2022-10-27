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
    public function delete($nim){
        if($this->model('Data_models')->deleteDataMahasiswa($nim)>0){
            Flasher::setFlash('berhasil','dihapus', 'success');
            header('Location: '.BASEURL.'/Data');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus', 'danger');
            header('Location: '.BASEURL.'/Data');
            exit;
        }
    }
    public function getubah(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByNim($_POST['NIM']));
    }
    public function update(){
        if($this->model('Data_models')->updateDataMahasiswa($_POST)>0){
            Flasher::setFlash('berhasil','diupdate', 'success');
            header('Location: '.BASEURL.'/Data');
            exit;
        }else{
            Flasher::setFlash('gagal','diupdate', 'danger');
            header('Location: '.BASEURL.'/Data');
            exit;
        }
    }
}