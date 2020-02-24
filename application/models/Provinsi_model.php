<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {
    public function __construct()
		{
			parent::__construct();
			//Do your magic here
        }	
        
		public function getDataProvinsi()
		{
			$this->db->select("*");
			$query = $this->db->get('list_provinsi');
			return $query->result();
		}
}