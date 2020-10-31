<?php
class M_registrasi extends CI_Model
{
	function updateDataBiologi($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE biologi SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
	}
	
	function updateDataBioteknologi($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE bioteknologi SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
	}
	
	function updateDataKimia($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE kimia SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
	}
	
	function updateDataFisika($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE fisika SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
	}
	
	function updateDataMatematika($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE matematika SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
	}
	
	function updateDataInformatika($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE informatika SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
	}
	
	function updateDataStatistika($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE statistika SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
    }
    

}