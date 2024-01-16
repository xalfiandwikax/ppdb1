<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{


	public function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Landing Page';
		$this->load->view('templates/header', $data);
		$this->load->view('landing');
		$this->load->view('templates/footer');
	}
	public function user()
	{

		$data['User'] = $this->db->get_where('tabel_user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();



		
		if (!empty($data['User'])) {
			$data['title'] ='User';
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('templates/conten', $data);
			$this->load->view('templates/footer_admin');
		}else{

			echo "data tidak ditemukan";
		}
	}

	public function admin()
	{
		$data['User'] = $this->db->get_where('tabel_user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();



		
		if (!empty($data['User'])) {
			$data['title'] ='ADMIN';
			$this->load->view('templates/header_admin', $data);
			$this->load->view('templates/sidebar_admin', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/footer_admin');
		}else{

			echo "data tidak ditemukan";
		}
	}
	public function biodata()
	{

		 // Set rules validasi untuk setiap input
		 $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		 $this->form_validation->set_rules('nik', 'NIK', 'required');
		 $this->form_validation->set_rules('no_kk', 'No. KK', 'required');
		 $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		 $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
		 $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		 $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
	 
		//  $this->form_validation->set_rules('gambar_akta', 'Gambar Akta', 'callback_validate_akta');
        //  $this->form_validation->set_rules('gambar_kk', 'Gambar KK', 'callback_validate_kk');
        //  $this->form_validation->set_rules('gambar_ijazah', 'Gambar Ijazah', 'callback_validate_ijazah');
	 
		 // Jika ada error validasi, tampilkan pesan kesalahan
		 if ($this->form_validation->run() == FALSE) 
		 {
			$data['User'] = $this->db->get_where('tabel_user', [
				'email' =>
					$this->session->userdata('email')
			])->row_array();
			if (!empty($data['User'])) {
			$data['title'] = 'User' ;
			 $this->load->view('templates/header_admin', $data);
			 $this->load->view('templates/sidebar', $data);
			 $this->load->view('templates/topbar', $data);
			 $this->load->view('biodata/biodata');
			 $this->load->view('templates/footer_admin');
			 }else{

				$this->session->set_flashdata('error','Data tidak ditemukan');
				redirect ('Web/user');
			 }
			 
		 }else{

			
		$config['upload_path'] 		=  APPPATH .'file_upload/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size'] 		=  2048;

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		
		
		 // Array untuk menyimpan nama file setelah diunggah
		 $uploaded_files = array();

		 // Loop untuk setiap input file
		 foreach ($_FILES as $key => $value) {
			 if (!empty($_FILES[$key]['name'])) {
				 if (!$this->upload->do_upload($key)) {
					 // Jika unggahan gagal, tampilkan pesan kesalahan
					 $error = $this->upload->display_errors();
					 echo "Gagal mengunggah file $key. $error";
				 } else {
					 // Jika unggahan berhasil, simpan nama file ke array
					 $uploaded_files[$key] = $this->upload->data('file_name');
					
					}
			 }
		 }

			
		$nama = $this->input->post("nama_lengkap");
		$nik = $this->input->post("nik");
		$no_kk = $this->input->post("no_kk");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
		$alamat = $this->input->post("alamat");
		$ttl = $this->input->post("ttl");
		$pendidikan = $this->input->post("pendidikan");
		$gambar_akta = isset($uploaded_files['gambar_akta'])? $uploaded_files['gambar_akta'] :"";

		if(!empty($uploaded_files)){
	
		$data = array (
			'nama_lengkap' => $nama,
			'nik' => $nik,
			'no_kk' => $no_kk,
			'jenis_kelamin' => $jenis_kelamin,
			'ttl' => $ttl,
			'alamat' => $alamat,
			'pendidikan' => $pendidikan,
			'gambar_akta' => $gambar_akta,
			'gambar_kk' => isset($uploaded_files['gambar_kk'])? $uploaded_files['gambar_kk'] : "",
			'gambar_ijazah' => isset($uploaded_files['gambar_ijazah'])? $uploaded_files['gambar_ijazah']: ""
		);
					
			$this->db->insert('biodata', $data);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		
			Berhasil Perbarui Data
			</div>');
			redirect('Biodata/pdf/'.$this->db->insert_id('id_biodata'));
			
		}

		 }


		
	
	}

	
	private function _simpan (){
		
		$config['upload_path'] 		=  './application/file_upload/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size'] 		=  '2048';

		$this->load->library('upload',$config);

		
		
		 // Array untuk menyimpan nama file setelah diunggah
		 $uploaded_files = array();

		 // Loop untuk setiap input file
		 foreach ($_FILES as $key => $value) {
			 if (!empty($_FILES[$key]['name'])) {
				 if (!$this->upload->do_upload($key)) {
					 // Jika unggahan gagal, tampilkan pesan kesalahan
					 $error = $this->upload->display_errors();
					 echo "Gagal mengunggah file $key. $error";
				 } else {
					 // Jika unggahan berhasil, simpan nama file ke array
					 $uploaded_files[$key] = $this->upload->data('file_name');
					
					}
			 }
		 }

		 var_dump($uploaded_files);
			
		$nama = $this->input->post("nama_lengkap");
		$nik = $this->input->post("nik");
		$no_kk = $this->input->post("no_kk");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
		$alamat = $this->input->post("alamat");
		$ttl = $this->input->post("ttl");
		$pendidikan = $this->input->post("pendidikan");

		if(!empty($uploaded_files)){
	
		$data = array (
			'nama' => $nama,
			'nik' => $nik,
			'no_kk' => $no_kk,
			'jenis_kelamin' => $jenis_kelamin,
			'ttl' => $ttl,
			'alamat' => $alamat,
			'pendidikan' => $pendidikan,
			'gambar_akta' => $uploaded_files['gambar_akta'],
			'gambar_kk' => $uploaded_files['gambar_kk'],
			'gambar_ijazah' => $uploaded_files['gambar_ijazah']
		);
					
			$this->db->insert('tabel_biodata', $data);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		
			Berhasil Perbarui Data
			</div>');
			redirect('Biodata/pdf/'.$this->db->insert_id('id_biodata'));
			
		}

	}





	public function ppdb()
	{

		$data['User'] = $this->db->get_where('tabel_user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();

		if (!empty($data['User'])) {
			$data['title'] ='ADMIN';

			// get data tabel biodata

			$data['biodata'] = $this->db->get('biodata')->result_array();
			$this->load->view('templates/header_admin',$data);
			$this->load->view('templates/sidebar_admin',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/ppdb',$data);
			$this->load->view('templates/footer_admin');

		}else{

			echo "data tidak ditemukan";
		}
	}


	public function download($file)
	{
    $file_path = APPPATH. 'file_upload/' . $file;

	echo "File path : $file_path";

    if (file_exists($file_path)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        echo file_get_contents($file_path);
    } else {
        show_404();
    }
	}

}






