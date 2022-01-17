<?php 
class Akun_model extends CI_model{
	public function getAkunById($id_user)
	{
		return $this->db->get_where('akun', ['id_user' => $id_user])->result_array();
	}
	public function getAkunById1($id_user)
	{
		return $this->db->get_where('akun', ['id_user' => $id_user])->row_array();
	}
	public function tambahDataAkun()
	{
		$data = [
			"id_user"=>$this->input->post('id_user', true),
			"email"=>$this->input->post('email', true),
			"password"=>$this->input->post('password', true),
			"level"=>$this->input->post('level', true)
		];
		$this->db->insert('akun', $data);
	}	
	public function hapusDataAkun($id_user)
	{
		$this->db->where('id_user', $id_user);
		$this->db->delete('akun');
	}

	public function editDataAkun($id_user)
	{
		$data = [
			"id_user"=>$this->input->post('id_user', true),
			"email"=>$this->input->post('email', true),
			"password"=>$this->input->post('password', true),
			"level"=>$this->input->post('level', true),
			
		];

		$this->db->where('id_user', $id_user);
		$this->db->update('akun', $data);
	}
}
