<?php
class M_logsuara extends CI_Model
{
	function insertLog($nim, $departemen, $time, $id_kandidat)
	{
		$this->db->query("INSERT INTO log_suara (waktu, nim, departemen, kandidat)
        VALUES ('$time', '$nim', '$departemen', '$id_kandidat')");
    }
}