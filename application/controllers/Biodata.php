
<?php
use function App\Helpers\generatepdf;

defined('BASEPATH') or exit('No direct script access allowed');


class Biodata extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('helperpdf_helper');
	}

	public function index()
	{
		$data['title'] = 'Landing Page';
		$this->load->view('templates/header', $data);
		$this->load->view('landing');
		$this->load->view('templates/footer');
	}
	


	public function pdf($id_biodata = NULL){

		if	(!$id_biodata){

			show_404();
		}else{

		$data['setdata'] = $this->db->get_where('biodata', ['id_biodata' => $id_biodata])->row_array();

		$html = $this->load->view('view_pdf', $data, true);
		generatepdf($html);

	}
	}
}
