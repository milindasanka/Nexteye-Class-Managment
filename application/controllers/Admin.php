<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

     public function dashboard(){
      $this->load->model('queries');
      $users = $this->queries->viewAllColleges();
     	$this->load->view('dashboard', ['users' => $users]);
     }

     public function addCollege(){
     	$this->load->view('addCollege');
     }

     public function addStudent(){
      $this->load->model('queries');
      $colleges = $this->queries->getColleges();
      $this->load->view('addStudent', ['colleges' => $colleges]);
      
     }

     public function createCollege(){
          $this->form_validation->set_rules('collegename','Collegename','required');
          $this->form_validation->set_rules('branch','Branch','required');
          $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
          if( $this->form_validation->run() ){
              $data = $this->input->post();
              $this ->load->model('queries');
              if( $this->queries->makeCollege($data) ){
               $this->session->set_flashdata('message','Class Created Successfully.');

              }else{
               $this->session->set_flashdata('message','Failed to Create College!');
              }
              return redirect("admin/addCollege");

          }else{
                $this->addCollege();
          }
     }

     public function addCoadmin(){
         $this->load->model('queries');
          $roles = $this->queries->getRoles();
          $colleges = $this->queries->getColleges();
          $this->load->view('addCoadmin', ['roles'=>$roles, 'colleges'=>$colleges]);
     }

     public function createCoadmin(){
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('college_id','college Name','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('gender','Gender','required');
          $this->form_validation->set_rules('role_id','Role','required');
          $this->form_validation->set_rules('password','Password','required');
          $this->form_validation->set_rules('confpwd','Password Again','required');
          $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

          if ( $this->form_validation->run() ) {
                         $data = $this->input->post();
                         $data['password'] = sha1($this->input->post('password'));
                         $data['confpwd'] = sha1($this->input->post('confpwd'));
                         $this->load->model('queries');
                         if( $this->queries->registerCoadmin($data) ){
                              $this->session->set_flashdata('message','Teacher Register Successfully');
                              

                         }
                         else{
                              $this->session->set_flashdata('message','Failed to Teacher Register');
                              

                         }
       return redirect("admin/addCoadmin"); 
     }
          else {
              $this->addCoadmin();
          }
     }

     public function createStudent(){
      $this->form_validation->set_rules('studentname','Student Name','required');
          $this->form_validation->set_rules('college_id','College Name','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('gender','Gender','required');
          $this->form_validation->set_rules('course','Course','required');
          $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

          if ( $this->form_validation->run() ) {
            $data = $this->input->post();
                            $this->load->model('queries');
                         if($this->queries->insertStudent($data) ){
                            $this->session->set_flashdata('message','Student Added Successfully');
                              

                         }
                         else{
                              $this->session->set_flashdata('message','Failed Add Student');
                              

                         }
       return redirect("admin/addStudent"); 

          }else {
            $this->addStudent();
          
          }
     }

     public function viewStudents($college_id){
      $this->load->model('queries');
      $students = $this->queries->getStudents($college_id);
      $this->load->view('viewStudents', ['students' => $students]);
     }

     public function deleteStudent($id){
        $this->load->model('queries');
        if( $this->queries->removeStudent($id) ){
          return redirect("admin/dashboard");
        }
      }

     

     public function __construct(){
     	parent::__construct();
     	if (!$this->session->userdata("user_id"))
     		return redirect("welcome/login");
     }
     

}