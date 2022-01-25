<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

//	public function __construct()
//	{
//		parent::__construct();
//		$this->load->model('Full_Model');
//	}

	public function index()
	{
		if (isset($_SESSION['role'])!=null){
			$this->load->view('layout/header');
			$this->load->view('index');
			$this->load->view('layout/footer');
		}
		else{
			redirect(base_url('index.php/login'));
		}
	}
	public function showStaff(){
		$data['staff']=$this->First->getStaff();
//		var_dump($result->result_array());
		$this->load->view('layout/header');
		$this->load->view('staff/staff',$data);
		$this->load->view('layout/footer');
	}
	public function addstaff(){
		$this->load->view('layout/header');
		$this->load->view('staff/add');
		$this->load->view('layout/footer');
	}
	public function savestaff(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('cnic', 'Cnic', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run()==false){
			$this->load->view('layout/header');
			$this->load->view('staff/add');
			$this->load->view('layout/footer');
		}
		else{
			$name=$this->input->post('name');
			$cnic=$this->input->post('cnic');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$role=$this->input->post('role');
			$password=md5($password);
			$result=$this->First->addStaff($name,$cnic,$email,$password,$role);
			if ($result){
				redirect(base_url('index.php/Welcome/showStaff'));
			}
			else{
				redirect(base_url('index.php/Welcome/addstaff'));
			}
		}
	}
	public function deleteStaff($id){
		$query="delete from users where id=$id";
		$this->db->query($query);
		redirect(base_url('index.php/Welcome/showStaff'));
	}
	public function editStaff($id){
		$query="select * from users where id=$id";
		$result=$this->db->query($query);
		$data['user']=$result->result_array();
		$this->load->view('layout/header');
		$this->load->view('staff/edit',$data);
		$this->load->view('layout/footer');
	}
	public function updateStaff($id){
		$name=$this->input->post('name');
		$cnic=$this->input->post('cnic');
		$email=$this->input->post('email');
		$role=$this->input->post('role');
		$this->db->set('name',$name);
		$this->db->set('cnic',$cnic);
		$this->db->set('email',$email);
		$this->db->set('role',$role);
		$this->db->where('id',$id);
		$result=$this->db->update('users');
		if ($result){
			redirect(base_url('index.php/Welcome/showStaff'));
		}
		else{
			redirect(base_url('index.php/Welcome/editStaff/'.$id));
		}
	}
}
