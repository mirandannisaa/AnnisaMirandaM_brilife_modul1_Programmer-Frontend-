<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat_kontrasepsi extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Alat_model');
}

	public function index()
	{
        
        $this->load->view('header');
        $data=array('error'=>'', 
        'id_kontrasepsi'=> $this->session->userdata('id_kontrasepsi'),
        'nama_kontrasepsi'=> $this->session->userdata('nama_kontrasepsi'));
        $data['kontrasepsi_list']=$this->Alat_model->getDataKontrasepsi();
		$this->load->view('alat_kontrasepsi',$data);
		$this->load->view('footer');
    }
}