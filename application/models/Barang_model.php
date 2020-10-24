<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
    
    public function get_data()
	{
		$this->db->select('*');
		$this->db->from('Tbl_barang');

		$query = $this->db->get();

		return $query->result_array();
    }
}