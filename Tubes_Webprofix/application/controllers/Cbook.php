<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbook extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_book');
  	}


	public function index()
	{
		$this->load->view('page_header');
		$this->load->view('page_index');
		$this->load->view('page_footer');
    }

    public function advance()
	{
		$this->load->view('page_header');
		$this->load->view('page_search');
		$this->load->view('page_footer');
	}

  	public function buku()
	{
		$this->load->view('page_header');
		$this->load->view('page_addBook');
		$this->load->view('page_footer');
	}

	public function help()
	{
		$this->load->view('page_header');
		$this->load->view('page_help');
		$this->load->view('page_footer');
	}

	public function sigPage()
	{
		$this->load->view('page_header');
		$this->load->view('page_signup');
		$this->load->view('page_footer');
    }
    
    public function logPage()
	{
		$this->load->view('page_header');
		$this->load->view('page_login');
		$this->load->view('page_footer');
	}

	public function reportPage()
	{
		$this->load->view('page_header');
		$this->load->view('page_report');
		$this->load->view('page_footer');
    }
    
    public function tambahbuku()
	{
		$title = $this->input->post('judul');
		$author = $this->input->post('autor');
		$penerbit = $this->input->post('publiser');
		$waktuTerbit = $this->input->post('waktu_publis');
		$tipe = $this->input->post('select');
		$idNumber = $this->input->post('num');
		$data = array(
			'title' => $title,
			'author' => $author,
			'publisher' => $penerbit,
			'waktu_publish' => $waktuTerbit,
			'tipe' => $tipe,
			'id_number' => $idNumber,
		);
		$this->M_book->tambah_buku($data);

		redirect('index.php/Cbook/buku');	

	}
    
}