<?php

    class Student extends CI_Controller{
        
        public function index(){
            $this->load->view("Student_form");


        }
        public function storeData(){
            $data= array(
                    's_name'=>$_POST['s_name'],
                    's_age' => $_POST['s_age'],
                    's_gender	' => $_POST['s_gender'],
                    's_email' => $_POST['s_email']
                
            );
            $this->Student_model->storeData($data);
            redirect('/student');
        }
        public function showData(){
            $data['students']=$this->Student_model->showData();
            // print_r($data);die;
            $this->load->view("Student_table",$data);


        }
        public function deleteData(){
            $id=$this->uri->segment(3);
            // print_r($id);die;
            $this->Student_model->deleteData($id);
            redirect("/student/showData");
        }
    } 

?>