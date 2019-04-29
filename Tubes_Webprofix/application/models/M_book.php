<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_book extends CI_Model {


	public function tambah_buku($data)
	{
		$this->db->insert('buku',$data);
	    return;
	}

	public function tambah_report($report_data)
	{
		$this->db->insert('tb_report',$report_data);
	    return;
	}
}