<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends CI_Controller
{
	public function index(){
		$this->load->view('templates/layout/header');
		$this->load->view('templates/support');
		$this->load->view('templates/layout/footer');
	}
	public function statement(){
		$this->load->view('templates/layout/header');
		$this->load->view('templates/statement');
		$this->load->view('templates/layout/footer');
	}
}
