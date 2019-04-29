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
    
}