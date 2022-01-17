<?php 

class Akun extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Akun_model');

	}
	public function index($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$data['a']=$this->Akun_model->getAkunById($id_user);
			$data['b']=$id_user;
			$this->load->view('admin/akun/index', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function tambah($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$data['b']=$id_user;
			$this->load->view('admin/akun/tambah', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function prosestambah()
	{
		if($this->session->userdata('admin')=='admin'){
			$this->Akun_model->tambahDataAkun();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('user');
			$this->load->view('admin/akun/index', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function hapus($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$this->Akun_model->hapusDataAkun($id_user);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('user');
			$this->load->view('admin/akun/index', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function edit($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$data['b']=$id_user;
			$data['akun'] = $this->Akun_model->getAkunById1($id_user);
			$this->load->view('admin/akun/edit', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function prosesedit($id_user)
	{
		if($this->session->userdata('admin')=='admin'){
			$this->Akun_model->editDataAkun($id_user);
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('user');
			$this->load->view('admin/akun/index', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
}