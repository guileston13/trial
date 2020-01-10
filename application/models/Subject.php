<?php

class Subject extends CI_Model
{
	public function createNewSubject($subject_code, $subject_description, $subject_grade_level, $subject_component)
	{
		$data = array(
			"subj_code" => $subject_code,
			"subj_desc" => $subject_description,
			"subj_grade_level" => $subject_grade_level,
			"acad_id" => $subject_component
		);

		$this->db->insert("tbl_subject", $data);
		return $this->db->insert_id();
	}

	public function countSubjects()
	{
		return $this->db->get("tbl_subject")->num_rows();
	}

	public function getSubjectById($subject_id)
	{
		return $this->db->select("*")->from("tbl_subject")->where("subj_id", $subject_id)->get()->row();
	}
	public function getSubjectByCodeName($subject_code)
	{
		return $this->db->select("*")->from("tbl_subject")->where("subj_code", $subject_codes)->get()->row();
	}

	public function getAllSubjects()
	{
		return $this->db->select("*")->from("tbl_subject")->get()->result();
	}

	public function getAllSubjectsByGradeLevel($grade_level)
	{
		return $this->db->select("*")->from("tbl_subject")->where("subj_grade_level", $grade_level)->get()->result();
	}
}