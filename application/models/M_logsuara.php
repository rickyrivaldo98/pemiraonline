<?php
class M_logsuara extends CI_Model
{
	function insertLog($nim, $departemen, $time, $id_kandidat)
	{
		$this->db->query("INSERT INTO log_suara (waktu, nim, departemen, kandidat)
        VALUES ('$time', '$nim', '$departemen', '$id_kandidat')");
	}
	
	public function getLog()
	{
		return $this->db->query('SELECT * FROM log_suara JOIN kandidat_bemf ON log_suara.kandidat = kandidat_bemf.id_kandidat ORDER BY log_suara.waktu DESC')->result_array();
	}

	public function countLog()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM log_suara')->row_array();
	}

	public function countBiologi()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM biologi')->row_array();
	}

	public function countBioteknologi()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM bioteknologi')->row_array();
	}

	public function countKimia()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM kimia')->row_array();
	}

	public function countFisika()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM fisika')->row_array();
	}

	public function countMatematika()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM matematika')->row_array();
	}

	public function countStatistika()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM statistika')->row_array();
	}

	public function countInformatika()
	{
		return $this->db->query('SELECT COUNT(*) AS jumlah FROM informatika')->row_array();
	}
}