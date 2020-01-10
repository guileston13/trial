<?php

class Grade_Level extends CI_Model
{
	public function createGradeLevels($schoolyear_id, $grade_levels=12)
	{
		$data = array(
			"schoolyear_id" => $schoolyear_id,
			"grade_level" => 1
		);
		for($x=0; $x < $grade_levels; $x++)
		{
			$data["grade_level"] = $x+1;
			$this->db->insert("tbl_grade_level", $data);
		}
	}

	public function getId($schoolyear_id, $grade_level)
	{
		$result = $this->db->select("*")->from("tbl_grade_level")->where("schoolyear_id", $schoolyear_id)->where("grade_level", $grade_level)->get();
		if($result->num_rows() > 0)
		{
			return $result->row()->grade_level_id;
		}else
		{
			return -1;
		}
	}

	public function getGradeLevels($schoolyear_id)
	{
		return $this->db->select("*")->from("tbl_grade_level")->where("schoolyear_id", $schoolyear_id)->get()->result();
	}
}