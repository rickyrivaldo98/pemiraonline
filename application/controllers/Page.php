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
		$this->load->model('m_registrasi');
		$data['title'] = 'Registrasi';
		$config = array(
			array(
				'field' => 'nim',
				'label' => 'Nim',
				'rules' => 'required',
				'errors' => array(
					'required' => 'NIM Tidak Boleh Kosong',              
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
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Email Tidak Boleh Kosong',
				),
			),
   
		);
		$this->form_validation->set_rules($config);
		if( $this->form_validation->run() == FALSE){
			$this->load->view('registrasi');
		}else{

			$nim = $this->input->post('nim', true);
			$tabel = $this->input->post('departemen', true);
			$password = $this->input->post('password', true);
			$email = $this->input->post('email', true);

			$lokasi = './ktm/';
			$foto = $_FILES['foto'];
        	$nama_foto = $nim;
        	if ($_FILES['foto']['name']) {
	            $config['upload_path'] = $lokasi;
	            $config['allowed_types'] = 'jpeg|jpg|png';
	            $config['file_name'] = $nama_foto;
	            $config['overwrite']     = true;
	            $config['max_size']      = 2048;

	            $this->load->library('upload', $config);
	            if (!$this->upload->do_upload('foto')) {
	                $this->session->set_flashdata('gagal_upload_foto', 'Tidak Sesuai Format');
	                redirect('Page/registrasi');
	            } else {
	                //unlink($lokasi."/$row->foto");
	                $foto = $this->upload->data("file_name");
	            }
	        }else{
	        	$this->session->set_flashdata('no_foto', 'Harap Masukan Foto!');
	            redirect('Page/registrasi');
			}

			
			if ($tabel == 'Biologi'){
				$this->m_registrasi->updateDataBiologi($nim, $password, $email, $foto);
			}elseif($tabel == 'Bioteknologi'){
				$this->m_registrasi->updateDataBioteknologi($nim, $password, $email, $foto);
			}elseif($tabel == 'Kimia'){
				$this->m_registrasi->updateDataKimia($nim, $password, $email, $foto);
			}elseif($tabel == 'Fisika'){
				$this->m_registrasi->updateDataFisika($nim, $password, $email, $foto);
			}elseif($tabel == 'Matematika'){
				$this->m_registrasi->updateDataMatematika($nim, $password, $email, $foto);
			}elseif($tabel == 'Informatika'){
				$this->m_registrasi->updateDataInformatika($nim, $password, $email, $foto);
			}elseif($tabel == 'Statistika'){
				$this->m_registrasi->updateDataStatistika($nim, $password, $email, $foto);
			}
			$this->session->set_flashdata('request_berhasil', 'berhasil');
			redirect('Page/index');

		}
	}

	public function get_data_pemilih()
	{
		$this->load->model('m_pemilih');
		$nim = $this->input->post('nim');

		$get_Biologi=$this->m_pemilih->getDataBiologi($nim);
		$get_Kimia=$this->m_pemilih->getDataKimia($nim);
		$get_Fisika=$this->m_pemilih->getDataFisika($nim);
		$get_Matematika=$this->m_pemilih->getDataMatematika($nim);
		$get_Informatika=$this->m_pemilih->getDataInformatika($nim);
		$get_Statistika=$this->m_pemilih->getDataStatistika($nim);
		$get_Bioteknologi=$this->m_pemilih->getDataBioteknologi($nim);

		if ($get_Biologi->num_rows() != 0) {
			$data=$get_Biologi->result();
		}elseif ($get_Bioteknologi->num_rows() != 0) {
			$data=$get_Bioteknologi->result();
		}elseif ($get_Fisika->num_rows() != 0) {
			$data=$get_Fisika->result();
		}elseif ($get_Informatika->num_rows() != 0) {
			$data=$get_Informatika->result();
		}elseif ($get_Kimia->num_rows() != 0) {
			$data=$get_Kimia->result();
		}elseif ($get_Matematika->num_rows() != 0) {
			$data=$get_Matematika->result();
		}elseif ($get_Statistika->num_rows() != 0) {
			$data=$get_Statistika->result();
		}else{
			$data=false;
		}

		echo json_encode($data);

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
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'biologi';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}elseif ($cek_bioteknologi->num_rows() != 0) {
				$data=$cek_bioteknologi->row_array();
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'bioteknologi';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}elseif ($cek_fisika->num_rows() != 0) {
				$data=$cek_fisika->row_array();
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'fisika';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}elseif ($cek_informatika->num_rows() != 0) {
				$data=$cek_informatika->row_array();
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'informatika';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}elseif ($cek_kimia->num_rows() != 0) {
				$data=$cek_kimia->row_array();
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'kimia';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}elseif ($cek_matematika->num_rows() != 0) {
				$data=$cek_matematika->row_array();
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'matematika';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}elseif ($cek_statistika->num_rows() != 0) {
				$data=$cek_statistika->row_array();
				if($data['registrasi'] == 2){
					$nim=$data['nim'];
					$nama =$data['nama'];
					$role='pemilih';
					$jurusan = 'statistika';
					$this->session->set_userdata('login', true);
					$this->session->set_userdata('akses', $role);
					$this->session->set_userdata('nama', $nama);
					$this->session->set_userdata('jurusan', $jurusan);
					
					redirect('Page/dashboardUser');
				}elseif ($data['registrasi'] == 1){
					$this->session->set_flashdata('diproses','data sedang diproses');
					redirect('Page/login');
				}else{
					$this->session->set_flashdata('not_found','gagal login');
					redirect('Page/login');
				}
				
			}else{  // jika username dan password tidak ditemukan atau salah
				$this->session->set_flashdata('not_found','gagal login');
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
		if ($this->session->userdata('login') != true || $this->session->userdata('akses') == 'pemilih' ){
			redirect('Page/index');
		}
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
		$this->load->model('m_verifikasi');
		$biologi = $this->m_verifikasi->getBiologi();
		$bioteknologi = $this->m_verifikasi->getBioteknologi();
		$kimia = $this->m_verifikasi->getKimia();
		$fisika = $this->m_verifikasi->getFisika();
		$informatika = $this->m_verifikasi->getInformatika();
		$statistika = $this->m_verifikasi->getStatistika();
		$matematika = $this->m_verifikasi->getMatematika();
		$data['pemilih'] = array_merge($biologi, $bioteknologi, $kimia, $fisika, $informatika, $statistika, $matematika);

		$this->load->view('admin/verifikasi', $data);
	}

	public function verifikasi_email(){
		$this->load->model('m_verifikasi');
		$nim = $this->input->get('nim');
		$nama = $this->input->get('nama');
		$fakultas = $this->input->get('fakultas');
		$tabel = $this->input->get('departemen');


		//untuk kirim email
		$from = 'andyanjordan1153@gmail.com';
		$to = $this->input->get('email', true);
		$subject = 'Verifikasi berkas Calon Pemilih Pemira FSM 2020';
		$link_pemira = base_url() . "Page/login";

        $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:none;margin: auto;border-spacing:0;"><tr><td style="background:#b93b48;padding:2%; text-align:center; vertical-align : middle; color: black; font-weight: bold; font-size: 15px;">PEMIRA ONLINE  </td></tr><tr><td style="background:#b93b48;padding:2%; text-align:center; vertical-align : middle; color: black; font-weight: bold; font-size: 15px;">UNIVERRSITAS DIPONEGORO</td></tr>';
        $emailContent .= '<tr><td style="height:20px"></td></tr>';


        $emailContent .= '<div style: "margin-left: 20px; margin-right:20px;">' . '<p> Selamat akun : <br>
		Atas Nama : ' . $nama . '  <br>  
		NIM : ' . $nim . '  <br> 
		Departemen : ' . $tabel . '  <br> 
        Fakultas : ' . $fakultas . '   <br>
		<h3 style="text-align:center;" > <strong> SUDAH DIVERIFIKASI ! </strong> </h3></p> <br>'; 
		
        $emailContent .= '<p> Pemira online Fakultas Sains dan Matematika dapat diakses melalui link berikut:  </p>';
        $emailContent .=  "<p style='text-align: center;'><a href='" . $link_pemira . "'> <button type='button' style='color:#fff;background-color:#16aaff;border-color:#16aaff; font-weight: bold;'>PEMIRA UNDIP</button></a></p> </div>";

        $emailContent .= '<tr><td style="height:20px"></td></tr>';
        $emailContent .= "<tr><td style='background:#b93b48;color: black;padding: 2%;text-align: center;font-size: 10px;'>PEMIRA ONLINE UNDIP <br> <small> <i>mari menjadi pemilih yang baik</i> </small></td></table></body></html>";

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '60';

        $config['smtp_user'] = 'andyanjordan1153@gmail.com';
        $config['smtp_pass'] = '#';

        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
		$config['validation'] = true;

		$this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($emailContent);
		$this->email->send();
		
		$debug = $this->email->print_debugger();
		$this->session->set_flashdata('debug', $debug);

		//update data 
		if ($tabel == 'Biologi'){
			$this->m_verifikasi->verifikasiDataBiologi($nim);
		}elseif($tabel == 'Bioteknologi'){
			$this->m_verifikasi->verifikasiDataBioteknologi($nim);
		}elseif($tabel == 'Kimia'){
			$this->m_verifikasi->verifikasiDataKimia($nim);
		}elseif($tabel == 'Fisika'){
			$this->m_verifikasi->verifikasiDataFisika($nim);
		}elseif($tabel == 'Matematika'){
			$this->m_verifikasi->verifikasiDataMatematika($nim);
		}elseif($tabel == 'Informatika'){
			$this->m_verifikasi->verifikasiDataInformatika($nim);
		}elseif($tabel == 'Statistika'){
			$this->m_verifikasi->verifikasiDataStatistika($nim);
		}


		$this->session->set_flashdata('verifiksi_berhasil','berhasil');
		redirect('Page/verifikasi');

	}

	public function tolak_email(){
		$this->load->model('m_verifikasi');
		$nim = $this->input->get('nim');
		$nama = $this->input->get('nama');
		$fakultas = $this->input->get('fakultas');
		$tabel = $this->input->get('departemen');


		//untuk kirim email
		$from = 'andyanjordan1153@gmail.com';
		$to = $this->input->get('email', true);
		$subject = 'Verifikasi berkas Calon Pemilih Pemira FSM 2020';
		$link_pemira = base_url() . "Page/registrasi";

        $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:none;margin: auto;border-spacing:0;"><tr><td style="background:#b93b48;padding:2%; text-align:center; vertical-align : middle; color: black; font-weight: bold; font-size: 15px;">PEMIRA ONLINE  </td></tr><tr><td style="background:#b93b48;padding:2%; text-align:center; vertical-align : middle; color: black; font-weight: bold; font-size: 15px;">UNIVERRSITAS DIPONEGORO</td></tr>';
        $emailContent .= '<tr><td style="height:20px"></td></tr>';


        $emailContent .= '<div style: "margin-left: 20px; margin-right:20px;">' . '<p> Verifikasi akun : <br>
		Atas Nama : ' . $nama . '  <br>  
		NIM : ' . $nim . '  <br> 
		Departemen : ' . $tabel . '  <br> 
        Fakultas : ' . $fakultas . '   <br>
		<h3 style="text-align:center;" > <strong> Ditolak ! </strong> </h3></p> <br>'; 
		
        $emailContent .= '<p> Anda dapat melakukan registrasi ulang melalui link berikut:  </p>';
        $emailContent .=  "<p style='text-align: center;'><a href='" . $link_pemira . "'> <button type='button' style='color:#fff;background-color:#16aaff;border-color:#16aaff; font-weight: bold;'>REGISTRASI PEMIRA UNDIP</button></a></p> </div>";

        $emailContent .= '<tr><td style="height:20px"></td></tr>';
        $emailContent .= "<tr><td style='background:#b93b48;color: black;padding: 2%;text-align: center;font-size: 10px;'>PEMIRA ONLINE UNDIP <br> <small> <i>mari menjadi pemilih yang baik</i> </small></td></table></body></html>";

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '60';

        $config['smtp_user'] = 'andyanjordan1153@gmail.com';
        $config['smtp_pass'] = '#';

        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html';
		$config['validation'] = true;

		$this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($emailContent);
		$this->email->send();
		

		//update data 
		if ($tabel == 'Biologi'){
			$this->m_verifikasi->tolakDataBiologi($nim);
		}elseif($tabel == 'Bioteknologi'){
			$this->m_verifikasi->tolakDataBioteknologi($nim);
		}elseif($tabel == 'Kimia'){
			$this->m_verifikasi->tolakDataKimia($nim);
		}elseif($tabel == 'Fisika'){
			$this->m_verifikasi->tolakDataFisika($nim);
		}elseif($tabel == 'Matematika'){
			$this->m_verifikasi->tolakDataMatematika($nim);
		}elseif($tabel == 'Informatika'){
			$this->m_verifikasi->tolakDataInformatika($nim);
		}elseif($tabel == 'Statistika'){
			$this->m_verifikasi->tolakDataStatistika($nim);
		}


		$this->session->set_flashdata('verifiksi_ditolak','berhasil');
		redirect('Page/verifikasi');

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
