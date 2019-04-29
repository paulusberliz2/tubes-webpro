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
    
}