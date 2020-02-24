<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat_model extends CI_Model {
    public function __construct()
		{
			parent::__construct();
			//Do your magic here
        }	
        
		public function getDataKontrasepsi()
		{
			$this->db->select("*");
			$query = $this->db->get('list_kontrasepsi');
			return $query->result();
		}
}