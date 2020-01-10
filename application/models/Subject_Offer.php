<?php

class Subject_Offer extends CI_Model
{

	public function createNewSubjectOffer($subj_id, $instructor_id, $section_id)
	{
		$data = array(
			"subj_id" => $subj_id,
			"instructor_id" => $instructor_id,
			"section_id" => $section_id
		);

		$this->db->insert("tbl_subject_offer", $data);
	}

	public function getSubjectOffer($subject_offer_id)
	{
		return $this->db->select("*")->from("tbl_subject_offer")->where("subj_offer_id", $subject_offer_id)->get()->row();
	}
}