<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
    public function __construct(){
        
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');   
        $this->load->helper('url');    

        
    }

    public function index(){
        $data['mahasiswa'] = $this->mahasiswa_model->getAll();
        $this->load->view('index', $data);
    }

    public function inputdata(){
        $this->load->view('tambahdata');
    }

    public function simpandata(){
        $mahasiswa = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()){
            $mahasiswa->simpan();            
            $this->session->set_flashdata('success','Data Berhasil disimpan!');
            redirect(site_url('mahasiswa/inputdata'));   
            
        }

        redirect(site_url('mahasiswa/inputdata'));
             
    }

    public function editdata($idmahasiswanya = null){
        if(!isset($idmahasiswanya)) redirect('mahasiswa/inputdata');

        $data['mahasiswa'] = $this->mahasiswa_model->getByID($idmahasiswanya);
        if (!$data['mahasiswa']) show_404();
        $this->load->view('editdata',$data);
    }

    public function updatedata(){
        
        $mahasiswa = $this->mahasiswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        if ($validation->run()){
            $mahasiswa->updatedata();
            $this->session->set_flashdata('success','Data Berhasil diperbaharui');            
            redirect(site_url('mahasiswa'));
        }
    
    }    

    public function hapusdata($idmahasiswanya = null){
        if (!isset($idmahasiswanya)) show_404();

        if ($this->mahasiswa_model->hapus($idmahasiswanya)){
            $this->session->set_flashdata('delete','Data Berhasil Dihapus!');
            redirect(site_url('mahasiswa'));
        }
    }
}