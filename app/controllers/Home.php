<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = $this->model('User_models')->getJudul();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}