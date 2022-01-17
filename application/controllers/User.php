<?php 

class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Akun_model');

	}

	public function index()
	{
		if($this->session->userdata('admin')=='admin'){
			$data['user']= $this->User_model->getAllUser();
			$this->load->view('admin/user/index', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}	
	}

	public function tambah()
	{
		if($this->session->userdata('admin')=='admin'){
			$this->load->view('admin/user/tambah');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function prosestambah()
	{
		if($this->session->userdata('admin')=='admin'){
			$this->User_model->tambahDataUser();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('user');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function hapus($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$this->User_model->hapusDataUser($id_user);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('user');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}

	public function edit($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$data['user'] = $this->User_model->getUserById($id_user);
			$this->load->view('admin/user/edit', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function prosesedit($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$this->User_model->editDataUser($id_user);
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('user');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
}