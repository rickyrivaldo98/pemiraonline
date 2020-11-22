<?php
class M_departemen extends CI_Model
{
	function getDepartemen()
	{
		return $this->db->query("SELECT * FROM departemen")->result_array();
	}

}