<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct(){
        parent::__construct();
      $this->load->library('session');
        $id=$this->session->userdata('login_id');
        // echo $id;
        // die;
        if(empty($id)){
            redirect('auth/login_page');
        }
    }

    public function home()
	{

		$this->load->model('model');
		$services="SELECT * FROM  `entry`";
		$data['get']=$this->model->getarraybyquery($services);
		// $this->load->view('header');
		$this->load->view('admin/home',$data);
		// $this->load->view('footer');
	}

    public function home_delete(){
		$this->load->model('model');
		$id=$this->uri->segment(3);
		$delete=$this->model->do_delete('entry', $id);
		$this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'>delete successfully ..!!</p>");
		redirect('user/home');
	}

	public function edit(){
        $id = $_POST['id'];
		$address="SELECT * FROM  'entry' WHERE id=$id";

		$data=$this->model->getarraybyquery($address);
        
        echo json_encode($data);
	}
	public function cheked(){
        $id = $_POST['id'];
		$address="SELECT * FROM  'entry' WHERE id=$id";

		$data=$this->model->getarraybyquery($address);
        
        echo json_encode($data);
	}
	public function update(){
		$this->load->model('model');
        $id = $_POST['id'];
        
        $data =array('username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'dob' => $_POST['dob'],
	);
            $this->db->where('id', $id);
            $success = $this->db->update('entry',$data);
            if($success==true){
                $this->session->set_flashdata('success', "<p style='color:green; background:#ceeace; width:280px; padding:18px;'> Updated successfully ..!!</p>");
                redirect('user/home');
            }
	}


public function logout(){
		$this->session->unset_userdata('login_id', $user[0]['id']);
		redirect('auth/login');
	}
}


?>