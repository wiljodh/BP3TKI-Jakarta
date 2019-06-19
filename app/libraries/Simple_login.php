<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {
	
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	
	// Login
	public function login($username, $password) {
		// Query untuk pencocokan data
		$query = $this->CI->db->get_where('users', array(
										'username' => $username
										));
		$user = $query->result()[0];
		if($user){
			if(password_verify($password, $user->password)){
				$id 	= $user->id_user;
				$nama	= $user->nama;
				$level	= $user->akses_level;
				// $_SESSION['username'] = $username;
				$this->CI->session->set_userdata('username', $username); 
				$this->CI->session->set_userdata('akses_level', $level); 
				$this->CI->session->set_userdata('nama', $nama); 
				$this->CI->session->set_userdata('id_login', uniqid(rand()));
				$this->CI->session->set_userdata('id', $id);
				// Kalau benar di redirect
			
			
				redirect(base_url('admin/dasbor'));
			}else{
				$this->CI->session->set_flashdata('sukses','Oopss.. Password salah.');
			redirect(base_url().'admin/login');
			}
		}else{
			$this->CI->session->set_flashdata('sukses','Oopss.. Username tidak dikenali.');
			redirect(base_url().'admin/login');
		}
		// Jika ada hasilnya
		// if($query->num_rows() == 1) {
		// 	
		// }else{
		// 	$this->CI->session->set_flashdata('sukses','Oopss.. Username/password salah');
		// 	redirect(base_url().'admin/login');
		// }
		return false;
	}
	
	// Cek login
	public function cek_login() {
		if($this->CI->session->userdata('username') == '' && $this->CI->session->userdata('akses_level')=='') {
			$this->CI->session->set_flashdata('sukses','Oops...silakan login dulu');
			redirect(base_url('admin/login'));
		}	
	}
	
	// Logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		unset($_SESSION['admin']);
		session_destroy();
		$this->CI->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
		redirect(base_url().'admin/login');
	}
	
}