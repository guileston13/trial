<?php

class User extends CI_Model
{
	const ADMIN   = 0;
	const INSTRUCTOR = 1;
	const STUDENT    = 2;

	public function createUser($userType, $username, $password,$confirm_password,$firstName, $middleName, $lastName, $age, $gender, $address)
	{
		$userData = array(
			"username" => $username,
			"password" => $password,
			"confirm_password" => $confirm_password,
			"user_type" => $userType,
			"fname" => $firstName,
			"mname" => $middleName,
			"lname" => $lastName,
			"age" => $age,
			"gender" => ucfirst(strtolower($gender)),
			"address" => $address,
		);
		$this->db->insert("tbl_user", $userData);
	}

	public function updateUser($userData)
	{
		$where = "user_id = " . $userData->user_id;
		$newUpdatedData = array_merge(array(), (array) $userData);
		array_shift($newUpdatedData);
		$query = $this->db->update_string("tbl_user", $newUpdatedData, $where);
		$this->db->query($query);
	}

	public function countUsers($userType)
	{
		$query = $this->db->query("SELECT * FROM `tbl_user`WHERE `user_type` = ".$userType);
		return $query->num_rows();
	}

	public function percentage(){
		$query = $this->db->query("SELECT * from tbl_percentage")->result();
		return $query;
	}

	public function school(){
		$query = $this->db->query("SELECT * from tbl_school")->result();
		return $query;
	}
	
	public function getUser($userID)
	{
		return $this->db->select("*")->from("tbl_user")->where("user_id", $userID)->get()->row();
	}
}