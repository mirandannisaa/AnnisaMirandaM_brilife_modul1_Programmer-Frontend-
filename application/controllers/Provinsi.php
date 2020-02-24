<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Provinsi_model');
    }

	public function index()
	{
        
        $this->load->view('header');
        $data=array('error'=>'', 
        'id_provinsi'=> $this->session->userdata('id_provinsi'),
        'nama_provinsi'=> $this->session->userdata('nama_provinsi'));
        $data['provinsi_list']=$this->Provinsi_model->getDataProvinsi();
		$this->load->view('provinsi',$data);
		$this->load->view('footer');
    }
    
    
}