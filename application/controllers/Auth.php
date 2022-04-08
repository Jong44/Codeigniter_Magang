<?php

class Auth extends CI_Controller
{
	public function __construct()		
	{
		parent::__construct();
	}

	public function register()
	{
		$this->load->view('user/register');
	}

	public function saveRegister()
		{
			$this->load->model('auth_model');
			$this->auth_model->register();
			redirect ()-> base_url();
		}

	public function process(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$this->load->model('auth_model');
			$query = $this->auth->login($post);
			if($query->num_rows() > 0){
				redirect('Welcome/index');
			} else {
				echo "login gagal";
			}

		}

	}

	public function index()
	{
	
			$this->load->view('user/login');
	}
}