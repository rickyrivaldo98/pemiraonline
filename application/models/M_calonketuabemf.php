<?php
class M_calonketuabemf extends CI_Model
{
	function addCalonBemF($id, $nim, $nim2, $nama, $nama2, $departemen, $departemen2, $foto, $visimisi)
	{
		$this->db->query("INSERT INTO kandidat_bemf (id_kandidat, nim_ketua, nama_ketua, departemen_ketua, nim_wakil, nama_wakil, departemen_wakil, suara, foto, no_paslon, visimisi)
        VALUES ('$id', '$nim', '$nama', '$departemen', '$nim2', '$nama2', '$departemen2', 0, '$foto', 0, '$visimisi')");
    }
    
    function getCalonBemF($nim, $nim2)
	{
		$query = $this->db->query("SELECT * FROM kandidat_bemf WHERE nim_ketua='$nim' OR nim_wakil='$nim2' OR nim_ketua='$nim2' OR nim_wakil='$nim' ");
		return $query;
    }
    
    function getDataCalon()
	{
		return $this->db->query("SELECT * FROM kandidat_bemf ORDER BY no_paslon ASC")->result_array();
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

	function updateVisiMisi($id_kandidat, $visimisi)
	{
		$this->db->query("UPDATE kandidat_bemf SET visimisi = '$visimisi' WHERE id_kandidat = '$id_kandidat'");
	}

	function hapusDataCalon($id_kandidat)
	{
		$this->db->query("DELETE FROM kandidat_bemf WHERE id_kandidat = '$id_kandidat'");
	}

	function updateSuara($id_kandidat)
	{
		$this->db->query("UPDATE kandidat_bemf SET suara = suara + 1 WHERE id_kandidat = '$id_kandidat'");
	}

	function updateNomor($id_kandidat, $no_paslon)
	{
		for($i=0; $i<count($id_kandidat); $i++) {
			$this->db->query("UPDATE kandidat_bemf SET no_paslon = '$no_paslon[$i]' WHERE id_kandidat = '$id_kandidat[$i]'");
		}
	}
    

}