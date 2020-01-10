<?php

class form6 extends CI_Controller
{
	public function index()
	{
        $query['form6'] = $this->db->query("SELECT * from tbl_school")->result();
		$this->load->view("form6", $query);
	}
}