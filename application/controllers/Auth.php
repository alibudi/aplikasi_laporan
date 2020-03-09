<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		if($this->ion_auth->logged_in()){
			redirect('auth/cek_login','refresh');
		} else{
			$this->load->view('login');
		}
	}

	public function login(){
		if($this->ion_auth->logged_in()){
			redirect('auth/cek_login','refresh');
		} else{
			$this->load->view('login');
		}
	}

	public function proses_login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$identity = $this->input->post('username');
			$password = $this->input->post('password');
			$remember = TRUE;
			$login = $this->ion_auth->login($identity, $password, $remember);
			if($login){
				redirect('auth/cek_login');
			} else{
				$this->session->set_flashdata('info', 'Gagal Login! Silahkan cek username dan password!');
				redirect('auth/login','refresh');
			}

		} else {
			$this->load->view('login');
		}		
	}

	public function cek_login(){
		if($this->ion_auth->logged_in()){
			if($this->ion_auth->is_admin()){
				redirect('admin','refresh');
			} else if($this->ion_auth->in_group(2)){
			 redirect('operator/index','refresh');
			} else if($this->ion_auth->in_group(3)){
			 redirect('koordinator','refresh');
			}  else{
				$this->ion_auth->logout();
				redirect('auth/login','refresh');
			}
		} else{
			redirect('login','refresh');
		}
	}

	public function logout(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login','refresh');
		} else{
			$this->ion_auth->logout();
			redirect('auth','refresh');
		}
	}


}
