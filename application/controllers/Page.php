<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function registrasi()
	{
		$this->load->view('registrasi');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function dashboardUser()
	{
		$this->load->view('dashboardUser');
	}

	public function dashboardAdmin()
	{
		$this->load->view('admin/dashboardAdmin');
	}

	public function voting()
	{
		$this->load->view('voting');
	}

	public function hasilvote()
	{
		$this->load->view('hasilvote');
	}

	public function verifikasi()
	{
		$this->load->view('admin/verifikasi');
	}

	public function listcalonketuabem()
	{
		$this->load->view('admin/listcalonketuabem');
	}

	public function tambahcalonketuabemundip()
	{
		$this->load->view('admin/tambahcalonketuabemundip');
	}

	public function tambahcalonketuabemf()
	{
		$this->load->view('admin/tambahcalonketuabemf');
	}

	public function editcalonketuabemundip()
	{
		$this->load->view('admin/editcalonketuabemundip');
	}

	public function editcalonketuabemf()
	{
		$this->load->view('admin/editcalonketuabemf');
	}

	public function hasilvoteAdmin()
	{
		$this->load->view('admin/hasilvoteadmin');
	}
}
