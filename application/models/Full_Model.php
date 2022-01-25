<?php

class Full_Model extends CI_Model
{
	public function login($email,$password){
		$password=md5($password);
		$query="select * from users where email='$email' and password='$password'";
		return $this->db->query($query);
	}
	public function getStaff(){
		$query="select id,name,email,cnic,role from users";
		return $this->db->query($query);
	}
	public function addStaff($name,$cnic,$email,$password,$role){
		$query="insert into users(name,cnic,email,password,role) VALUES ('$name','$cnic','$email','$password','$role')";
		return $this->db->query($query);
	}

}
