<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}
	
	// Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('tentang');
		$this->db->order_by('id_konfigurasi','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}
	
	// Detail
	public function detail($id_konfigurasi) {
		$this->db->select('*');
		$this->db->from('tentang');
		$this->db->where('id_konfigurasi',$id_konfigurasi);
		$this->db->order_by('id_konfigurasi','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}
	
	// Edit
	public function edit($data) {
		$this->db->where('id_konfigurasi',$data['id_konfigurasi']);
		$this->db->update('tentang',$data);
	}
	
}