<?php
class M_pengaturanhasil extends CI_Model
{
	function addData($time, $nama, $waktu)
	{
		$this->db->query("INSERT INTO pengaturan_hasil (nama_admin, waktu, aturan)
        VALUES ('$nama', '$waktu', '$time')");
    }

    function getWaktu()
	{
		$query = $this->db->query("SELECT * FROM pengaturan_hasil ORDER BY waktu DESC LIMIT 1");
		return $query;
    }

}