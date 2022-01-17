<?php 

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('User_model');

	}
	public function index()
	{
		$this->load->view('login/index');
	}
	public function proseslogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->Login_model->cek($email);
		$level = $user['level'];
		if ($user) {
			if($password == $user['password']){
				if($level==='admin'){
					$data =[
							'id_user' => $user['id_user'],
							'admin' => 'admin'
						];
					$this->session->set_userdata($data);
					redirect('home/index',$data);
				}
				if($level==='perawat'){
					$data =[
							'id_user' => $user['id_user'],
							'perawat' => 'perawat'
						];
					$this->session->set_userdata($data);	
					redirect('home/index_perawat',$data);
				}
			}
		}
	}
}