<?php
	if (!function_exists('getImage')){
		function getImage(){
			$CI =& get_instance();
			$result=$CI->db->query('select * from settings where id=1');
			$result=$result->result_array();
			return $result[0]['image'];
		}
	}
	if (!function_exists('getProductName')){
		function getProductName(){
			$CI=& get_instance();
			$result=$CI->db->query('select * from settings where id=1');
			$result=$result->result_array();
			return $result[0]['site_name'];
		}
	}

