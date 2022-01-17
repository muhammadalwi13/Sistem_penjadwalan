<?php 

class Jadwal_model extends CI_model{

	public function getAllJadwal()
	{
		return $this->db->get('jadwal')->result_array();
	}
	public function getAllJadwal1()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('user', 'user.id_user=jadwal.id_user');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function tambahDataJadwal()
	{
		$data = [
			"id_user"=>$this->input->post('id_user', true),
			"hari"=>$this->input->post('hari', true),
			"tanggal"=>$this->input->post('tanggal', true),
			"jam"=>$this->input->post('jam', true),
		];
		$this->db->insert('jadwal', $data);
	}
	public function hapusDataJadwal($id_jadwal)
	{
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->delete('jadwal');
	}

	public function getJadwalById($id_jadwal)
	{
		return $this->db->get_where('jadwal', ['id_jadwal' => $id_jadwal])->row_array();
	}

		public function editDataJadwal($id_jadwal)
	{
		$data = [
			"id_jadwal"=>$this->input->post('id_jadwal', true),
			"id_user"=>$this->input->post('id_user', true),
			"hari"=>$this->input->post('hari', true),
			"tanggal"=>$this->input->post('tanggal', true),
			"jam"=>$this->input->post('jam', true),
			
		];

		$this->db->where('id_jadwal', $this->input->post('id_jadwal'));
		$this->db->update('jadwal', $data);
	}
}