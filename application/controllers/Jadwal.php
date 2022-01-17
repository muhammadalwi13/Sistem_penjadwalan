<?php 

class Jadwal extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jadwal_model');
		$this->load->model('User_model');

	}

	public function index()
	{
		if($this->session->userdata('admin')=='admin'){
			$data['a']= $this->Jadwal_model->getAllJadwal1();
			$this->load->view('admin/jadwal/index', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function tambah()
	{
		if($this->session->userdata('admin')=='admin'){
			$data['a']=$this->User_model->getAllUser();
			$this->load->view('admin/jadwal/tambah', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function prosestambah()
	{
		if($this->session->userdata('admin')=='admin'){
			$this->Jadwal_model->tambahDataJadwal();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('jadwal');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function hapus($id_jadwal)
	{
		if($this->session->userdata('admin')=='admin'){
			$this->Jadwal_model->hapusDataJadwal($id_jadwal);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('jadwal');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function edit($id_jadwal)
	{
		if($this->session->userdata('admin')=='admin'){
			$data['a']=$this->User_model->getAllUser();
			$data['jadwal'] = $this->Jadwal_model->getJadwalById($id_jadwal);
			$this->load->view('admin/jadwal/edit', $data);
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}
	public function prosesedit($id_jadwal)
	{
		if($this->session->userdata('admin')=='admin'){
			$this->Jadwal_model->editDataJadwal($id_jadwal);
			$this->session->set_flashdata('flash', 'Diedit');
			redirect('jadwal');
		}else{
			$this->session->unset_userdata('admin');
			redirect('eror');
		}
	}

	//controller perawat
	public function index_perawat()
	{
		if($this->session->userdata('perawat')=='perawat'){
			$data['a']= $this->Jadwal_model->getAllJadwal1();
			$this->load->view('perawat/jadwal/index', $data);
		}else{
			$this->session->unset_userdata('perawat');
			redirect('eror');
		}
	}
}