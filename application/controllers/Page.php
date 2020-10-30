<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		
	}
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
		$this->load->model('m_login');
		$data['title'] = 'Login';
		$config = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required',
				'errors' => array(
					'required' => 'NIM / ID Tidak Boleh Kosong',              
				),
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Password Tidak Boleh Kosong',
				),
			),
   
		);
		$this->form_validation->set_rules($config);
   
   
	   	if( $this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{//jalankan fungsi
			$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        	$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

			//untuk auth admin or super admin
			$cek_user=$this->m_login->auth_user($username,$password);

			//untuk auth pemilih
			$cek_biologi=$this->m_login->auth_biologi($username,$password);
			$cek_bioteknologi=$this->m_login->auth_bioteknologi($username,$password);
			$cek_fisika=$this->m_login->auth_fisika($username,$password);
			$cek_informatika=$this->m_login->auth_informatika($username,$password);
			$cek_kimia=$this->m_login->auth_kimia($username,$password);
			$cek_matematika=$this->m_login->auth_matematika($username,$password);
			$cek_statistika=$this->m_login->auth_statistika($username,$password);

			if($cek_user->num_rows()!= 0){
				$data=$cek_user->row_array();
				$nama =$data['nama'];
				$role=$data['role'];
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
	
				redirect('Page/dashboardAdmin');
			}elseif ($cek_biologi->num_rows() != 0) {
				$data=$cek_biologi->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'biologi';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}elseif ($cek_bioteknologi->num_rows() != 0) {
				$data=$cek_bioteknologi->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'bioteknologi';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}elseif ($cek_fisika->num_rows() != 0) {
				$data=$cek_fisika->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'fisika';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}elseif ($cek_informatika->num_rows() != 0) {
				$data=$cek_informatika->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'informatika';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}elseif ($cek_kimia->num_rows() != 0) {
				$data=$cek_kimia->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'kimia';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}elseif ($cek_matematika->num_rows() != 0) {
				$data=$cek_matematika->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'matematika';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}elseif ($cek_statistika->num_rows() != 0) {
				$data=$cek_statistika->row_array();
				$nim=$data['nim'];
				$nama =$data['nama'];
				$role='pemilih';
				$jurusan = 'statistika';
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('akses', $role);
				$this->session->set_userdata('nama', $nama);
				$this->session->set_userdata('jurusan', $jurusan);
				
				redirect('Page/dashboardUser');
			}else{  // jika username dan password tidak ditemukan atau salah
				$this->session->set_flashdata('msg','Username Atau Password Salah');
				redirect('Page/login');
			}
			

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Page/index');
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
