<?php 

class Logout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	//controller admin
	public function index()
	{
		$this->session->unset_userdata('admin');
		redirect('login');
	}
	//controller mahasiswa
	public function index_perawat()
	{
		$this->session->unset_userdata('perawat');
		redirect('login');
	}
}