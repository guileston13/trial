<?php

class Section extends CI_Model
{
	public function createNewSection($section_name, $grade_level_id)
	{
		$data = array(
			"section_name" => $section_name,
			"grade_level_id" => $grade_level_id
		);

		$this->db->insert("tbl_section", $data);
	}

	public function getSection($section_id)
	{
		return $this->db->select("*")->from("tbl_section")->where("section_id", $section_id)->get()->row();
	}
}