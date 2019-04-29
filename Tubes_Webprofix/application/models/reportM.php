<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reportM extends CI_Model {
	

	public function tambah_report($data)
	{
		$sql = $this->db->set($report_data)->get_compiled_insert('tb_report');
		echo $sql;
	}
}
