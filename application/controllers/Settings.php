<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('settings/settings');
		$this->load->view('layout/footer');
	}
	public function imgUpload(){
		if (!empty($_FILES['image']['name'])){
//		$upload_path=base_url('public/uploads');
		$config['upload_path']          = 'public/uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
//		$config['max_width']            = 1024;
//		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
//			$this->load->view('upload_form', $error);
		}
		else
		{
			$data=$this->upload->data();
			$site_name=$this->input->post('sitename');
			$filename=$data['file_name'];
//			$fields=array(
//				'image'=>$filename
//			);
//			$result=$this->db->insert('settings',$fields);
			$this->db->set('image',$filename);
			$this->db->set('site_name',$site_name);
			$this->db->where('id',1);
			$result=$this->db->update('settings');

			if ($result){
				redirect(base_url('index.php/Settings'));
			}
			else{
				redirect(base_url());
			}

//			$this->load->view('upload_success', $data);
		}
		}
		else{
			$site_name=$this->input->post('sitename');
			$this->db->set('site_name',$site_name);
			$this->db->where('id',1);
			$result=$this->db->update('settings');

			if ($result){
				redirect(base_url('index.php/Settings'));
			}
			else{
				redirect(base_url());
			}
		}
	}
}
