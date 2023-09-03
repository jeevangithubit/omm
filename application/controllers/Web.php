<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function form()
	{
	 $this->load->model('model');
		 $address="SELECT * FROM  `entry`";
		  $data['get']=$this->model->getarraybyquery($address);
		$this->load->helper('url');

		$this->load->view('form',$data);
	}

	public function js(){
		$this->load->view('js');
	}
	


	public function save()
	{

		$this->load->model('model');
		$data=array('username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'dob' => $_POST['dob']
	);
		$insert=$this->model->save('form', $data);

		redirect('auth/login_page');
	}


}
