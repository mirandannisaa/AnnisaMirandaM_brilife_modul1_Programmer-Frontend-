<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {
    public function __construct()
		{
			parent::__construct();
			//Do your magic here
        }	
        
		public function getDataPengguna()
		{
			$this->db->select("*");
			$this->db->join('list_provinsi', 'list_pemakai_kontrasepsi.id_provinsi = list_provinsi.id_provinsi');
			$this->db->join('list_kontrasepsi', 'list_pemakai_kontrasepsi.id_kontrasepsi = list_kontrasepsi.id_kontrasepsi');
			$this->db->group_by('list_pemakai_kontrasepsi.id_list'); 
			$query = $this->db->get('list_pemakai_kontrasepsi');
			return $query->result();
		}

		public function create(){
			$object = array(    
				'id_provinsi' => $this->input->post('id_provinsi'),
				'id_kontrasepsi' => $this->input->post('id_kontrasepsi'),
				'jumlah_pemakai' => $this->input->post('jumlah_pemakai')
			);
			$this->db->insert('list_pemakai_kontrasepsi', $object);	
		}
}