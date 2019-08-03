<?php


class Login extends MY_Controller
{
	
	public function index()
	{
		
		$this->load->view('public/login');

	}

	public function admin_login()
	{
		
		$this->form_validation->set_rules('username','User Name','required|alpha|trim');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		
		if($this->form_validation->run()) {
			echo "success";
		}
		else {
			$this->load->view('public/login');
			//echo validation_errors();

		}
	}
	public function user_register() {
		$this->load->view('public/register');
	}
	public function create_user() {
		$this->form_validation->set_rules('username','User Name','required|alpha_dash|min_length[4]|max_length[20]|trim|is_unique[register.uname]');
		$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('password1','Password Confirmation','trim|matches[password]');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[register.mail]');
		$this->form_validation->set_rules('mobno','Mobile Number','required|trim|is_natural|min_length[10]|max_length[10]|is_unique[register.mob_no]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		$this->form_validation->set_message('is_natural', 'The Mobile number field must contain only numbers.');
		$this->form_validation->set_message('matches', 'The Password field does not match.');
		
		
		if($this->form_validation->run()) {

			$this->load->model('user');
			if($query=$this->user->create_user()) {
				$data['account_created']='Your account has been created.<br>You may now login.';
				$this->load->view('public/login',$data);
			}
			else {
				$this->load->view('public/register');
			}

			
		}
		else {
			$this->load->view('public/register');
			//echo validation_errors();

		}

	}
}