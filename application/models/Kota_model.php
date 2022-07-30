<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends CI_Model {

	public function read($id_provinsi='') {

        $this->db->select('kota.*');
        $this->db->select('provinsi.nama AS nama_provinsi');
        $this->db->from('kota');
        $this->db->join('provinsi', 'kota.id_provinsi = provinsi.id');

		if($id_provinsi != '') {
			$this->db->where('kota.id_provinsi', $id_provinsi);
		}

        $this->db->order_by('kota.id_provinsi ASC, kota.nama ASC');

		$query = $this->db->get();

        return $query->result_array();
	}

	public function read_single($id) {

		$this->db->select('*');
		$this->db->from('kota');

		$this->db->where('id', $id);

		$query = $this->db->get();

        return $query->row_array();
	}	
	
}
