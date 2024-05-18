<?php
    class Student_model extends CI_Model{
        public function storeData($data){
            $this->load->database();
            $this->db->insert(" student",$data);

        }
        public function showData(){
            $this->load->database();

            $query=$this->db->get('student');
            $data= $query->result_array();
            return $data;
        }
        public function deleteData($id){
            $this->load->database();

            $this->db->where('id',$id);
            $this->db->delete('student');
        }
    }
?>