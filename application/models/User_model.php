<?php 
class User_model extends CI_model{
	public function getAllUser()
	{
		return $this->db->get('user')->result_array();
	}	
	public function tambahDataUser()
	{
		$data = [
			"id_user"=>$this->input->post('id_user', true),
			"nama"=>$this->input->post('nama', true),
			"tanggal_lahir"=>$this->input->post('tanggal_lahir', true),
			"tempat_lahir"=>$this->input->post('tempat_lahir', true),
			"alamat"=>$this->input->post('alamat', true),
			"jenis_kelamin"=>$this->input->post('jenis_kelamin', true)
		];
		$this->db->insert('user', $data);
	}
	
	public function hapusDataUser($id_user)
	{
		$this->db->where('id_user', $id_user);
		$this->db->delete('user');
	}
	public function getUserById($id_user)
	{
		return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
	}

	public function editDataUser($id_user)
	{
		$data = [
			"id_user"=>$this->input->post('id_user', true),
			"nama"=>$this->input->post('nama', true),
			"tanggal_lahir"=>$this->input->post('tanggal_lahir', true),
			"tempat_lahir"=>$this->input->post('tempat_lahir', true),
			"alamat"=>$this->input->post('alamat', true),
			"jenis_kelamin"=>$this->input->post('jenis_kelamin', true)
		];

		$this->db->where('id_user', $this->input->post('id_user'));
		$this->db->update('user', $data);
	}
}
