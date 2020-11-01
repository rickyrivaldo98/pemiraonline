<?php
class M_login extends CI_Model
{
	function auth_user($username, $password)
	{
		$query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_biologi($username, $password)
	{
		$query = $this->db->query("SELECT * FROM biologi WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_bioteknologi($username, $password)
	{
		$query = $this->db->query("SELECT * FROM bioteknologi WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_kimia($username, $password)
	{
		$query = $this->db->query("SELECT * FROM kimia WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_fisika($username, $password)
	{
		$query = $this->db->query("SELECT * FROM fisika WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_informatika($username, $password)
	{
		$query = $this->db->query("SELECT * FROM informatika WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_matematika($username, $password)
	{
		$query = $this->db->query("SELECT * FROM matematika WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function auth_statistika($username, $password)
	{
		$query = $this->db->query("SELECT * FROM statistika WHERE nim='$username' AND password='$password' LIMIT 1");
		return $query;
	}

}