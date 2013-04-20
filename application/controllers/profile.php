<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
	}
	
	function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
			$this->data['user'] = $this->ion_auth->user()->row();
			
			$this->load->view('template/header');
			$this->load->view('template/layout1_open');
			$this->load->view('profile/index',$this->data);
			$this->load->view('template/layout1_close');
			$this->load->view('template/footer');
		}
	}
	
	function edit()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('template/layout1_open');
			$this->load->view('profile/edit');
			$this->load->view('template/layout1_close');
			$this->load->view('template/footer');
		}
	}
}