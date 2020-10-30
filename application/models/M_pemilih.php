<?php
class M_pemilih extends CI_Model
{
	function getDataBiologi($nim)
	{
		$query = $this->db->query("SELECT * FROM biologi  WHERE nim='$nim' LIMIT 1");
		return $query;
    }
    
    function getDataKimia($nim)
	{
		$query = $this->db->query("SELECT * FROM kimia  WHERE nim='$nim' LIMIT 1");
		return $query;
    }
    
    function getDataFisika($nim)
	{
		$query = $this->db->query("SELECT * FROM fisika  WHERE nim='$nim' LIMIT 1");
		return $query;
    }
    
    function getDataInformatika($nim)
	{
		$query = $this->db->query("SELECT * FROM informatika  WHERE nim='$nim' LIMIT 1");
		return $query;
    }
    
    function getDataMatematika($nim)
	{
		$query = $this->db->query("SELECT * FROM matematika  WHERE nim='$nim' LIMIT 1");
		return $query;
    }
    
    function getDataStatistika($nim)
	{
		$query = $this->db->query("SELECT * FROM statistika  WHERE nim='$nim' LIMIT 1");
		return $query;
    }
    
    function getDataBioteknologi($nim)
	{
		$query = $this->db->query("SELECT * FROM bioteknologi  WHERE nim='$nim' LIMIT 1");
		return $query;
	}

}