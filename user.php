<?php  
 
 class User extends CI_Model
 {
 	
	 function create_user() {
	$username=$this->input->post('username');
	$new_user_data=array(
		'uname'=> $this->input->post('username'),
		'pwd'=> md5($this->input->post('pwd')),
		'mail'=> $this->input->post('email'),
		'mob_no'=> $this->input->post('mobno'),
		'gender'=> $this->input->post('gender')
	);
	$insert = $this->db->insert('register',$new_user_data);
	return $insert;
}
}