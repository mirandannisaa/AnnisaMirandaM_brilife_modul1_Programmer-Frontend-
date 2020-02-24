<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->model('Provinsi_model');
        $this->load->model('Alat_model');
        $data['provinsi_list']= $this->Provinsi_model->getDataProvinsi();
        $data['kontrasepsi_list']= $this->Alat_model->getDataKontrasepsi();
        $data['pengguna_list']= $this->Pengguna_model->getDataPengguna();
    }

	public function index(){
		$this->load->view('header');
		$data=array('error'=>'', 
        'id_list'=> $this->session->userdata('id_list'),
        'nama_provinsi'=> $this->session->userdata('nama_provinsi'), 
        'nama_kontrasepsi'=> $this->session->userdata('nama_kontrasepsi'), 
        'jumlah_pemakai'=> $this->session->userdata('jumlah_pemakai'));
        $data['pengguna_list']=$this->Pengguna_model->getDataPengguna();
        $this->load->view('pengguna', $data);
		$this->load->view('footer');
    }

    public function create(){
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('jumlah_pemakai', 'Jumlah Pemakai', 'trim|required');
        $this->load->model('Pengguna_model');
        $this->load->model('Alat_model');
        $this->load->model('Provinsi_model');
        if($this->form_validation->run()==FALSE){
            //$this->load->view('header');
            $data['provinsi_list']= $this->Provinsi_model->getDataProvinsi();
            $data['kontrasepsi_list']= $this->Alat_model->getDataKontrasepsi();
            $data['pengguna_list']= $this->Pengguna_model->getDataPengguna();
            $this->load->view('create', $data);
            //$this->load->view('footer');
        }else{
            $this->Pengguna_model->create();
            echo'<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
            redirect('Pengguna');
        }
	}

    public function report(){
        $data['pengguna_list']= $this->Pengguna_model->getDataPengguna();
        $this->load->view('report', $data);
    }
}