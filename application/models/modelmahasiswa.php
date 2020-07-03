<?php

class modelmahasiswa extends CI_Model{
    public function ambildata()
    {
      return $this->db->get('data')->result_array();
    }

    public function tambah(){
        $data = array (
        "nama" => htmlspecialchars($this->input->post('nama', true)),
        "nim" => htmlspecialchars($this->input->post('nim', true)),
        "email" => htmlspecialchars($this->input->post('email', true))
        );

        $this->db->insert('data', $data);
    }


    public function hapus($id){
      $this->db->where('id', $id);
      $this->db->delete('data');
    }

    public function detail($id){
      return $this->db->get_where('data', ['id' => $id])-> row_array();
    }


    public function ubah($id){
      $data = array (
        "nama" => $this->input->post('nama', true),
        "nim" => $this->input->post('nim', true),
        "email" => $this->input->post('email', true)
        );

        $this->db->where('id', $id);
        $this->db->update('data', $data);
    }

    public function cari(){
      $keyword = $this->input->post('keyword', true);
      $this->db->like('nama', $keyword);
      $this->db->or_like('nim', $keyword);
      $this->db->or_like('email', $keyword);
      return $this->db->get('data')->result_array();
    }
}