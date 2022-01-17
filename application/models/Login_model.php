<?php 
class Login_model extends CI_model{
	public function cek($email)
	{

		return $this->db->get_where('akun', ['email' => $email])->row_array();
	}
	public function tambahDataUser()
	{
		$data = [
			"email"=>$this->input->post('email', true),
			"password"=>$this->input->post('password', true),
			"level"=>$this->input->post('level', true)
		];
		$this->db->insert('user', $data);
	}
}
