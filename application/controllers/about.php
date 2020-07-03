<?php

class about extends CI_Controller{
    public function index(){  
        $data['judul'] = 'About';
        $this->load->view('templates/header',$data);
        $this->load->view('about.php');
        $this->load->view('templates/footer');
    }

}