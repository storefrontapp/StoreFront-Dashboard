<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		/// Check If User Logged in otherwise redirect to login Page
		$this->user->checkUser();


		$this->load->view('common/header');
		$this->load->view('dashboard');
		$this->load->view('common/footer');
	}

	public function password(){

		/// Check If User Logged in otherwise redirect to login Page
		$this->user->checkUser();


		$data = array();


		/* START ACTION = FORM SUBMIT */
		if($this->input->post('sf')=='1'):

			$pass1 = $this->input->post('pass1');
			$pass2 = $this->input->post('pass2');
			$pass3 = $this->input->post('pass3');

			$errors = "";
			if($pass1== "" || $pass2=="" || $pass3==""){
				$errors .= '<li>All fields are required to be filled.</li>';
			}


			if($errors!=''){
				$data['error'] = '<div class="alert alert-danger"><ul>'.$errors.'</ul></div>';
			}else{

				$pass_status = $this->user->changePassword($this->user->userdata->id,$pass1,$pass2,$pass3);

				if($pass_status!='OK'){
					$data['error'] = '<div class="alert alert-danger">'.$pass_status.'</div>';
				}else{
					$data['error'] = '<div class="alert alert-success">Password changed successfully</div>';
				}

			}


		endif;
		/* END ACTIOn = FORM SUBMIT */


		$this->load->view('common/header');
		$this->load->view('password',$data);
		$this->load->view('common/footer');
	}

	public function logout(){
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('hash');
        redirect(base_url('login')."?logout=true");
    }
}
