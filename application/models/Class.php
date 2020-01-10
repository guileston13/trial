<?php

class Class extends CI_Model
{
	public function createNewClass($student_id, $subject_offer_id, $grade_id)
	{
		$data = array(
			"student_id" => $student_id,
			"subject_offer_id" => $subject_offer_id,
			"grade_id" => $grade_id
		);

		$this->db->insert("tbl_class", $data);
		return $this->db->insert_id();
	}

	public function getClass($class_id)
	{
		return $this->db->select("*")->from("tbl_class")->where("class_id", $class_id)->get()->row();
	}
}