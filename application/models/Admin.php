<?php
class Admin extends CI_Model
{
	function validate($user,$pass)
	{
		$this->db->select('username,password,user_type,user_id');
		$this->db->from('tbl_user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}
		else
		{
			return false;		
		}
	}
}

