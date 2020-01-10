<?php 
    class create_book extends CI_controller{
        public function index(){
            $data['subj'] = $this->db->query("SELECT * from tbl_subject")->result();
            //$this->load->view('template/header_admin');
            $this->load->view('template/latest/header');
            $this->load->view('update/create_book',$data);
            $this->load->view('template/latest/footer');
            //$this->load->view('template/footer_admin');
        }

        public function create_book_final(){
            $sub = $this->input->post('subj_id');
            $subj_code = $this->db->query("SELECT * from tbl_subject where subj_id ='$sub'")->result();
            $subj_count= $this->db->query("SELECT * from tbl_book where subj_id ='$sub'");
            $count = $subj_count->num_rows();
            $c = $count+1;
            $sb = $subj_code[0]->subj_code;
            $num = $this->input->post('num_book');
            $fnum = $c + $num;
            
            for($i = $c; $i < $fnum; $i++){
                echo $sb.'-'.$i; echo "<br>";
                $data = array(
                    'book_name' => $sb.'-'.$i,
                    'subj_id'   => $sub,
                );      
                $this->db->insert('tbl_book',$data);
            }
            redirect('create_book');
        }
    }
?>