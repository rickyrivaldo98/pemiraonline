<?php
class M_verifikasi extends CI_Model
{
	function getBiologi()
	{
		return $this->db->query("SELECT * FROM biologi WHERE registrasi = 1")->result_array();
	}
	
	function getBioteknologi()
	{
		return $this->db->query("SELECT * FROM bioteknologi WHERE registrasi = 1")->result_array();
	}
	
	function getKimia()
	{
		return $this->db->query("SELECT * FROM kimia WHERE registrasi = 1")->result_array();
	}
	
	function getFisika()
	{
		return $this->db->query("SELECT * FROM fisika WHERE registrasi = 1")->result_array();
	}
	

	function getStatistika()
	{
		return $this->db->query("SELECT * FROM statistika WHERE registrasi = 1")->result_array();
	}
	
	function getMatematika()
	{
		return $this->db->query("SELECT * FROM matematika WHERE registrasi = 1")->result_array();
	}
	
	function getInformatika()
	{
		return $this->db->query("SELECT * FROM informatika WHERE registrasi = 1")->result_array();
	}

	//data peilih tetap
	function getBiologi1()
	{
		return $this->db->query("SELECT * FROM biologi WHERE registrasi = 2")->result_array();
	}
	
	function getBioteknologi1()
	{
		return $this->db->query("SELECT * FROM bioteknologi WHERE registrasi = 2")->result_array();
	}
	
	function getKimia1()
	{
		return $this->db->query("SELECT * FROM kimia WHERE registrasi = 2")->result_array();
	}
	
	function getFisika1()
	{
		return $this->db->query("SELECT * FROM fisika WHERE registrasi = 2")->result_array();
	}
	

	function getStatistika1()
	{
		return $this->db->query("SELECT * FROM statistika WHERE registrasi = 2")->result_array();
	}
	
	function getMatematika1()
	{
		return $this->db->query("SELECT * FROM matematika WHERE registrasi = 2")->result_array();
	}
	
	function getInformatika1()
	{
		return $this->db->query("SELECT * FROM informatika WHERE registrasi = 2")->result_array();
	}
	
	function verifikasiDataBiologi($nim)
	{
		$this->db->query("UPDATE biologi SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function verifikasiDataBioteknologi($nim)
	{
		$this->db->query("UPDATE bioteknologi SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function verifikasiDataKimia($nim)
	{
		$this->db->query("UPDATE kimia SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function verifikasiDataFisika($nim)
	{
		$this->db->query("UPDATE fisika SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function verifikasiDataMatematika($nim)
	{
		$this->db->query("UPDATE matematika SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function verifikasiDataInformatika($nim)
	{
		$this->db->query("UPDATE informatika SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function verifikasiDataStatistika($nim)
	{
		$this->db->query("UPDATE statistika SET registrasi = 2 WHERE nim = '$nim'");
	}
	
	function tolakDataBiologi($nim)
	{
		$this->db->query("UPDATE biologi SET registrasi = 0, email='' WHERE nim = '$nim'");
	}
	
	function tolakDataBioteknologi($nim)
	{
		$this->db->query("UPDATE bioteknologi SET registrasi = 0, email='' WHERE nim = '$nim'");
	}
	
	function tolakDataKimia($nim)
	{
		$this->db->query("UPDATE kimia SET registrasi = 0, email='' WHERE nim = '$nim'");
	}
	
	function tolakDataFisika($nim)
	{
		$this->db->query("UPDATE fisika SET registrasi = 0, email='' WHERE nim = '$nim'");
	}
	
	function tolakDataMatematika($nim)
	{
		$this->db->query("UPDATE matematika SET registrasi = 0, email='' WHERE nim = '$nim'");
	}
	
	function tolakDataInformatika($nim)
	{
		$this->db->query("UPDATE informatika SET registrasi = 0, email='' WHERE nim = '$nim'");
	}
	
	function tolakDataStatistika($nim)
	{
		$this->db->query("UPDATE statistika SET registrasi = 0, email='' WHERE nim = '$nim'");
    }
    

}