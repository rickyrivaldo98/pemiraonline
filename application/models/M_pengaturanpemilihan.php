<?php
class M_pengaturanpemilihan extends CI_Model
{
    
    function addDataMulai($time, $nama)
	{
		$this->db->query("INSERT INTO pengaturan_pemilihan (nama_admin, waktu, status)
        VALUES ('$nama', '$time', 1)");
    }

    function getLastStatus()
	{
		return $this->db->query("SELECT * FROM pengaturan_pemilihan ORDER BY waktu desc LIMIT 1")->row_array();
    }

    function addDataSelesai($time, $nama)
	{
		$this->db->query("INSERT INTO pengaturan_pemilihan (nama_admin, waktu, status)
        VALUES ('$nama', '$time', 2)");
    }

}