<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('full_model');
	}

	public function index(){

			$this->load->view('layout/authhead');
			$this->load->view('auth/login');
			$this->load->view('layout/authfoot');

	}
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()==false){
			$this->load->view('layout/authhead');
			$this->load->view('auth/login');
			$this->load->view('layout/authhead');
		}
		else{
			$this->load->model('Full_Model');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$result=$this->Full_Model->login($email,$password);
			if ($result->num_rows()>0){
				$result=$result->result_array();
				$_SESSION['name']=$result[0]['name'];
				$_SESSION['role']=$result[0]['role'];
				redirect(base_url());
			}
			else{
				redirect(base_url("index.php/login"));
			}
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}


}
