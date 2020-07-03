<?php

class Home extends CI_Controller{
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->modelmahasiswa->ambildata();
        if($this->input->post('keyword')){
            $data['mahasiswa'] = $this->modelmahasiswa->cari();
        } 
        $this->load->view('templates/header',$data);
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }


    public function tambah(){
        $data['judul'] = 'Form Tambah Mahasiswa';
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric', ['required' => 'NIM Tidak Boleh Kosong', 'numeric' => 'NIM Harus Angka']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[data.email]', [
            'is_unique' => 'Email Sudah Terdaftar',
            'required' => 'Email Tidak Boleh Kosong!' ]);
        if($this->form_validation->run()== false){
            $this->load->view('templates/header',$data);
            $this->load->view('tambah');
            $this->load->view('templates/footer');
        }
        else{
            $this->modelmahasiswa->tambah();
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
            $url = base_url('home');
            header("Location: $url");
        }
    }


    public function hapus ($id){
        $this->modelmahasiswa->hapus($id); 
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        $url = base_url('home');
        header("Location: $url");
    }


    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->modelmahasiswa->detail($id);
        $this->load->view('templates/header',$data);
        $this->load->view('detail',$data);
        $this->load->view('templates/footer');
    }


    public function update($id){
        $data['judul'] = 'Form Update Mahasiswa';
        $data['mahasiswa'] = $this->modelmahasiswa->detail($id);
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Tidak Boleh Kosong!']);
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric', ['required' => 'NIM Tidak Boleh Kosong', 'numeric' => 'NIM Harus Angka']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['valid_email' => "Email Tidak Valid",
            'required' => 'Email Tidak Boleh Kosong!' ]);
        if($this->form_validation->run()== false){
            $this->load->view('templates/header',$data);
            $this->load->view('ubah', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->modelmahasiswa->ubah($id);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
            $url = base_url('home');
            header("Location: $url");
        }
    }



}
