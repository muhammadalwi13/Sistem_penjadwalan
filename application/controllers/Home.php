<?php 

class Home extends CI_Controller{

	public function index()
	{
		if($this->session->userdata('admin')=='admin'){
			$this->load->view('admin/home/index');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
		
	}




	//controller perawat
	public function index_perawat()
	{
		if($this->session->userdata('perawat')=='perawat'){
			$this->load->view('perawat/home/index');
		}else{
			$this->session->unset_userdata('perawat');
			redirect('eror');
		}
	}
}