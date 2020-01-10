<?php

class Assign_Subject extends CI_Model
{
	public function assignSubject($subject_id, $grade_level_id)
	{
		$data = array(
			"subj_id" => $subject_id,
			"grade_level_id" => $grade_level_id
		);
		$this->db->insert("tbl_assigned_subjects", $data);
		return $this->db->insert_id();
	}

	public function view_curriculum(){
		$query = $this->db->query("SELECT * from tbl_curriculum,tbl_subject,tbl_schoolyear WHERE
						tbl_curriculum.subj_id = tbl_subject.subj_id
					AND tbl_schoolyear.schoolyear_id = tbl_curriculum.schoolyear_id")->result();
		return $query;
	}
}