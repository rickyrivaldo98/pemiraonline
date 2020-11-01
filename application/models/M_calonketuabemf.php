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
		return $this->db->query("SELECT * FROM kandidat_bemf")->result_array();
	}
    

}