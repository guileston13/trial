<?php

class Grade extends CI_Model
{
	public function createNewGrade($subject_offer_id, $student_id, $grade_QA, $grade_QB, $grade_QC, $grade_QD)
	{
		$data = array(
			"subject_offer_id" => $subject_offer_id,
			"student_id" => $student_id,
			"grade_QA" => $grade_QA,
			"grade_QB" => $grade_QB,
			"grade_QC" => $grade_QC,
			"grade_QD" => $grade_QD,
			"grade_total_percentage" => $this->calculateGradePercentage($grade_QA, $grade_QB, $grade_QC, $grade_QD)
		);

		$this->db->insert("tbl_grade", $data);
		return $this->db->insert_id();
	}

	private function calculateGradePercentage($QA, $QB, $QC, $QD)
	{
		return ($QA + $QB +$QC + $QD) / 4;
	}

	public function lockGrade($grade_id)
	{
		$data = array(
			"grade_status" => 0
		);
		$where = "grade_id = " . $grade_id;
		$query = $this->db->update_string("tbl_grade", $data, $where);
		$this->db->query($query);
	}
	public function unlockGrade($grade_id)
	{
		$data = array(
			"grade_status" => 1
		);
		$where = "grade_id = " . $grade_id;
		$query = $this->db->update_string("tbl_grade", $data, $where);
		$this->db->query($query);
	}

	public function updateGrade($gradeData)
	{
		$gradeDataClone = array_merge(array(), (array) $gradeData);
		array_shift($gradeDataClone);
		$gradeDataClone = (object) $gradeDataClone;
		$gradeDataClone->grade_total_percentage = $this->calculateGradePercentage($gradeData->grade_QA, $gradeData->grade_QB, $gradeData->grade_QC, $gradeData->grade_QD);
		$where = "grade_id = " . $gradeData->grade_id;
		$query = $this->db->update_string("tbl_grade", $gradeDataClone, $where);
		$this->db->query($query);
	}

	public function getGrade($grade_id)
	{
		return $this->db->select("*")->from("tbl_grade")->where("grade_id", $grade_id)->get()->row();
	}
}