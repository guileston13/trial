<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class mycontroller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("grade", "", TRUE);
	}

	public function hehe()
	{
		$mygrade = $this->grade->getGrade(1);
		$mygrade->grade_QA = 89;
		$mygrade->grade_QB = 92;
		$mygrade->grade_QC = 85;
		$this->grade->updateGrade($mygrade);
		$data["grade"] = $this->grade->getGrade(1);
		$this->load->view("index.php", $data);
	}
}
