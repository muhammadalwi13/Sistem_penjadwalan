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
	 ?>