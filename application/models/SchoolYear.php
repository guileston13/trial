<?php

class Schoolyear extends CI_Model
{
	public function createSchoolYear($schoolyear_start, $schoolyear_end)
	{
		$data = array(
			"schoolyear_start" => $schoolyear_start,
			"schoolyear_end" => $schoolyear_end
		);
		$this->db->insert("tbl_schoolyear", $data);
		return $this->db->insert_id();
	}

	public function getSchoolYearByID($schoolyear_id)
	{
		return $this->db->select("schoolyear_start, schoolyear_end")->from("tbl_schoolyear")->where("schoolyear_id", $schoolyear_id)->get()->row();
	}

	public function getSchoolYearID($schoolyear_start, $schoolyear_end)
	{
		return $this->db->select("schoolyear_id")->from("tbl_schoolyear")->where("schoolyear_start", $schoolyear_start)->where("schoolyear_end", $schoolyear_end)->get()->row();
	}

	public function getAllSchoolYear()
	{

		return $this->db->select("*")->from("tbl_schoolyear")->get()->result();
		
	}
}