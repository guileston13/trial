<?php

class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	public function index()
	{
		// Handle logout session
		session_destroy();
		redirect("login");
	}
}