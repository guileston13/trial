<?php

class Form1 extends CI_Controller
{
	public function index()
	{
		$query['form1'] =   $this->db->query("SELECT * from tbl_student")->result();
		$this->load->view("form1", $query);
	}

	public function trial(){
		echo "hello";
		$a = 'HELLO';
		$b = 'hello';
		if($a = $b){
			echo "ok";	
		}else{
			echo "bad";
		}
	}


	public function msc(){
		$msc_trial2 = $this->db->query("SELECT * from msc_trial2")->result();
		foreach($msc_trial2 as $key){
			$msc_trial_search = $this->db->query("SELECT * from msc_trial 
				where lastname = '$key->lastname'
				AND middlename = '$key->middlename'
				AND firstname = '$key->firstname' ");
			if($msc_trial_search->num_rows()==1){
				
			}else{
				$data = array(
					'lastname'  => $key->lastname,
					'middlename'=> $key->middlename,
					'firstname' => $key->firstname,
					'gender'	=> $key->gender,
					'yearlevel' => $key->yearlevel,
					'parentname'=> $key->parentname,
					'parentaddress'=> $key->parentaddress,
					'contact'   => $key->contact
				);
				$this->db->insert('msc_trial',$data);
			}
			echo "dope"; echo "<br>";
		}
	}
		public function update_delmar(){
			$query = $this->db->query("SELECT * from msc_trial")->result();
			foreach($query as $key){
				if($key->middlename == 'KINDER 1'){
					$update_yearlevel = 1;
					$update_program = 5;
					$update_curriculum = 8;
				}else if($key->middlename == 'KINDER 2'){
					$update_yearlevel = 2;
					$update_program = 5;
					$update_curriculum = 8;
				}else if($key->middlename == 'GRADE 1'){
					$update_yearlevel = 4;
					$update_program = 2;
					$update_curriculum = 1;
				}else if($key->middlename == 'GRADE 2'){
					$update_yearlevel = 5;
					$update_program = 2;
					$update_curriculum = 1;
				}else if($key->middlename == 'GRADE 3'){
					$update_yearlevel = 6;
					$update_program = 2;
					$update_curriculum = 1;
				}else if($key->middlename == 'GRADE 4'){
					$update_yearlevel = 7;
					$update_program = 2;
					$update_curriculum = 1;
				}else if($key->middlename == 'GRADE 5'){
					$update_yearlevel = 8;
					$update_program = 2;
					$update_curriculum = 1;
				}else if($key->middlename == 'GRADE 6'){
					$update_yearlevel = 9;
					$update_program = 2;
					$update_curriculum = 1;
				}else if($key->middlename == 'GRADE 7'){
					$update_yearlevel = 10;
					$update_program = 1;
					$update_curriculum = 3;
				}else if($key->middlename == 'GRADE 8'){
					$update_yearlevel = 11;
					$update_program = 1;
					$update_curriculum = 3;
				}else if($key->middlename == 'GRADE 9'){
					$update_yearlevel = 12;
					$update_program = 1;
					$update_curriculum = 3;
				}else if($key->middlename == 'GRADE 10'){
					$update_yearlevel = 13;
					$update_program = 1;
					$update_curriculum = 3;
				}else if($key->middlename == 'GRADE 11'){
					$update_yearlevel = 14;
					$update_program = 12;
					$update_curriculum = 4;
				}else if($key->middlename == 'GRADE 12'){
					$update_yearlevel = 15;
					$update_program = 12;
					$update_curriculum = 4;
				}
				$data = array(
					'firstname' => $update_curriculum,
					'gender'	=> $update_program,
					'yearlevel' => $update_yearlevel
				);
				$this->db->where('id',$key->id);
				$this->db->update('msc_trial',$data);
				echo $key->id;
			}
		}
		public function update_late(){
		$msc_trial = $this->db->query("SELECT * from msc_trial2")->result();
			
			foreach($msc_trial as $key){
				
				if($key->yearlevel == 'JK'){
					$update = 'JK';	
				}else if($key->yearlevel == 'SK'){
					$update = 'JK';	
				}else if($key->yearlevel == '1'){
					$update = 'SK';	
				}else if($key->yearlevel == '2'){
					$update = '1';	
				}else if($key->yearlevel == '3'){
					$update = '2';	
				}else if($key->yearlevel == '4'){
					$update = '3';	
				}else if($key->yearlevel == '5'){
					$update = '4';	
				}else if($key->yearlevel == '6'){
					$update = '5';	
				}else if($key->yearlevel == '7'){
					$update = '6';	
				}else if($key->yearlevel == '8'){
					$update = '7';	
				}else if($key->yearlevel == '9'){
					$update = '8';	
				}else if($key->yearlevel == '10'){
					$update = '9';	
				}else if($key->yearlevel == '11'){
					$update = '10';	
				}else if($key->yearlevel == '12'){
					$update = '11';	
				}
				echo $update; echo "<br>";
				$data = array('yearlevel'=> $update);
				$this->db->where('id',$key->id);
				$this->db->update('msc_trial2',$data);
			}
		}

			public function update_employees(){
				$query = $this->db->query("SELECT * from msc_trial2")->result();
				foreach($query as $key){
						
						if($key->firstname == 'TEACHER '){
							echo $key->firstname;
						if($key->gender == 'GRADE 1 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == 'GRADE 2 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == 'GRADE 3 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == 'GRADE 4 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == 'GRADE 5 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == 'GRADE 6 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == ' KINDERGARTEN '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == 'GRADE 5 & 6 '){
							$update_department = 2;
							$update_position = 108;
						}else if($key->gender == '0'){
							$update_department = 0;
							$update_position = 108;
						}
						echo $update_position;
						echo "<br>";
						echo $update_department;
						}else{

						if($key->firstname == 'CASHIER '){
							$update_position  = 39;
							$update_department = 6;
						}else if($key->firstname == 'LIBRARIAN '){
							$update_position = 41;
							$update_department = 6;
						}else if($key->firstname == 'MAINTENACE '){
							$update_position = 212;
							$update_department = 6;
						}else if($key->firstname == 'TREASURER '){
							$update_position = 211;
							$update_department = 6;
						}else if($key->firstname == 'BOOKKEEPER '){
							$update_position = 214;
							$update_department = 6;
						}else if($key->firstname == 'SECURITY GUARD '){
							$update_position = 84;
							$update_department = 6;
						}else if($key->firstname == 'MUSIC TEACHER '){
							$update_position = 108;
							$update_department = 2;
						}else if($key->firstname == 'PRINCIPAL '){
							$update_position = 8;
							$update_department = 2;	
						}else if($key->firstname == NULL){
							$update_department = 0;
							$update_position = 0;
						}
						}
					echo $update_department;
					echo $update_position;
					echo "<br>";
					$data = array(
						'yearlevel' => $update_department,
						'parentname'=> $update_position
					);
					$this->db->where('id',$key->id);
					$this->db->update('msc_trial2',$data);
				}
			}
}
