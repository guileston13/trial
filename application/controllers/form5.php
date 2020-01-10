<?php

class form5 extends CI_Controller
{
	public function index()
	{
        $query['form5'] = $this->db->query("SELECT * from tbl_school")->result();
		$this->load->view("form5", $query);
	}
}