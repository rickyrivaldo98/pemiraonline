<?php
class M_calonketuabemf extends CI_Model
{
	function addCalonBemF($id, $nim, $nim2, $nama, $nama2, $departemen, $departemen2, $foto)
	{
		$this->db->query("INSERT INTO kandidat_bemf (id_kandidat, nim_ketua, nama_ketua, departemen_ketua, nim_wakil, nama_wakil, departemen_wakil, suara, foto)
        VALUES ('$id', '$nim', '$nama', '$departemen', '$nim2', '$nama2', '$departemen2', 0, '$foto')");
    }
    
    function getCalonBemF($nim, $nim2)
	{
		$query = $this->db->query("SELECT * FROM kandidat_bemf WHERE nim_ketua='$nim' OR nim_wakil='$nim2' OR nim_ketua='$nim2' OR nim_wakil='$nim' ");
		return $query;
    }
    
    function getDataCalon()
	{
		return $this->db->query("SELECT * FROM kandidat_bemf ORDER BY id_kandidat DESC")->result_array();
	}

	function getDataCalon1($id_kandidat)
	{
		return $this->db->query("SELECT * FROM kandidat_bemf WHERE id_kandidat = '$id_kandidat'")->row_array();
	}

	function getDataCalon2()
	{
		return $this->db->query("SELECT * FROM kandidat_bemf ORDER BY suara DESC")->result_array();
	}

	function countSuaraCalon()
	{
		return $this->db->query("SELECT SUM(suara) AS total FROM kandidat_bemf")->row_array();
	}

	function updateFotoCalon($id_kandidat, $foto)
	{
		$this->db->query("UPDATE kandidat_bemf SET foto = '$foto' WHERE id_kandidat = '$id_kandidat'");
	}

	function hapusDataCalon($id_kandidat)
	{
		$this->db->query("DELETE FROM kandidat_bemf WHERE id_kandidat = '$id_kandidat'");
	}

	function updateSuara($id_kandidat)
	{
		$this->db->query("UPDATE kandidat_bemf SET suara = suara + 1 WHERE id_kandidat = '$id_kandidat'");
	}
    

}