<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$chkAdminExist = $this->queries->chkAdminExist();
		$this->load->view('home', ['chkAdminExist'=>$chkAdminExist]);
	}

	public function adminRegister(){//admin register control
		$this->load->model('queries');
		$roles = $this->queries->getRoles();
		$this->load->view('register', ['roles'=>$roles]);
	}

	public function adminSignup(){
		$this->form_validation->set_rules('username','Username','required');
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
					if( $this->queries->registerAdmin($data) ){
						$this->session->set_flashdata('message','Admin Register Successfully');
						return redirect("welcome/adminRegister");

					}
					else{
						$this->session->set_flashdata('message','Failed to Admin Register');
						return redirect("welcome/adminRegister");

					}
		
	}
		else {
			$this->adminRegister();
		}


	}
	public function login(){
		if( $this->session->userdata("user_id"))
			return redirect("admin/dashboard");
		$this->load->view('login');
	}
	public function signin(){
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if ( $this->form_validation->run() ) {
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));
			$this->load->model('queries');
			$userExist = $this->queries->adminExist($email,$password);
			if($userExist){
				$sessionData = [
					'user_id' => $userExist->user_id,
					'username' => $userExist->username,
					'email' => $userExist->email,
					'role_id' => $userExist->role_id,
				];
				$this->session->set_userdata($sessionData);
				return redirect("admin/dashboard");

			}
			else{
				$this->session->set_flashdata('message', 'Email or Password is Incorrect');
				return redirect("welcome/login");
			}
		}
		else{
			$this->login();
		}
	}

	public function logout(){
		$this->session->unset_userdata("user_id");
		return redirect("welcome/login");
	}

	
     public function about(){
      $this->load->view('about');
     }#about us

     public function contact(){
     $this->load->view('contact');
     }#contct

     public function sendcontact(){
     	$this->form_validation->set_rules('contactname','Contactname','required');
     	$this->form_validation->set_rules('contactemail','Contactemail','required');
     	$this->form_validation->set_rules('subject','Subject','required');
     	$this->form_validation->set_rules('message','Message','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if ( $this->form_validation->run() ) {
			$data = $this->input->post();
			$this->load->model('queries');
			if( $this->queries->sendcontact($data)){
                $this->session->set_flashdata('message','Message Send Successfully!');
			}else{
                $this->session->set_flashdata('message','Message Send Failed!');
			}
			return redirect("welcome/contact");
		}else{
			$this->contact();
		}
     }

  

}
