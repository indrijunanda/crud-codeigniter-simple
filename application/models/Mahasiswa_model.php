<?php defined('BASEPATH') OR exit ('No direct script access allowed!');

class Mahasiswa_model extends CI_Model {
    private $_table = "mahasiswa";

    public $id_mahasiswa;
    public $nama;
    public $nim;
    public $fakultas;
    public $jurusan;

    public function rules(){
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nim',
            'label' => 'NIM', 
            'rules' => 'required'],            

            ['field' => 'fakultas',
            'label' => 'Fakultas',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        $this->db->order_by('waktu_input','desc');        
        return $this->db->get($this->_table)->result();
    }

    public function getByID($idmahasiswanya){
        return $this->db->get_where($this->_table, ["id_mahasiswa" => $idmahasiswanya])->row();
    }

    public function simpan(){

        $post = $this->input->post();
        $this->id_mahasiswa = uniqid();
        $this->nama = $post['nama'];
        $this->nim = $post['nim'];
        $this->fakultas = $post['fakultas'];
        $this->jurusan = $post['jurusan'];
        $this->db->insert($this->_table, $this);

    }

    public function updatedata(){
        $post = $this->input->post();
        $this->id_mahasiswa = $post['idmahasiswanya'];
        $this->nama = $post['nama'];
        $this->nim = $post['nim'];
        $this->fakultas = $post['fakultas'];
        $this->jurusan = $post['jurusan'];
        $this->db->update($this->_table, $this, array('id_mahasiswa' => $post['idmahasiswanya']));
    }

    public function hapus($idmahasiswanya){
        return $this->db->delete($this->_table, array('id_mahasiswa' => $idmahasiswanya));
    }

}

?>