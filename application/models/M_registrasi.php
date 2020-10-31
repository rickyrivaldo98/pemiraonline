<?php
class M_registrasi extends CI_Model
{
	function updateDataBiologi($nim, $password, $email, $foto)
	{
		$this->db->query("UPDATE biologi SET password = '$password', registrasi = 1, email = '$email', foto_ktm = '$foto' WHERE nim = '$nim'");
    }
    

}