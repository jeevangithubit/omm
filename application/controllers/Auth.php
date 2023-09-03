<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login_page()
	{

		
	    //$this->load->view('header');
		$this->load->view('admin/login');
		//$this->load->view('footer');
	}
	public function login(){
		 $value;
    $this->load->library('session');
    $this->load->model('model');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $data="SELECT * FROM entry WHERE username='$username' AND password='$password'";
        $user['get']=$this->model->getarraybyquery($data);
        print_r($user);
        if ($user['get']==true) {
            foreach($user['get'] as $value){}
          $this->session->set_userdata('login_id', $value['id']);
            $this->session->set_flashdata('success','user login successfully');

          redirect('user/home');
        }else{
            $this->session->set_flashdata('error', "<p style='color:red; background:#f7d4d4; width:280px; padding:18px;'>Invalide Login Details ..!!</p>");
          redirect('auth/login_page');
        }
}
// public function forword(){
//      $this->load->library('session');
//      $this->load->model('model');
//    if($this->input->post('forword_pass'))
//         {
//             $email=$this->input->post('email');
//             $que=$this->db->query("select pass,email from user_login where email='$email'");
//             $row=$que->row();
//             $user_email=$row->email;
//             if((!strcmp($email, $user_email))){
//             $pass=$row->pass;
//                 /*Mail Code*/
//                 $to = $user_email;
//                 $subject = "Password";
//                 $txt = "Your password is $pass .";
//                 $headers = "From: jeevankumawat434@gmail.com" . "\r\n" .
//                 "CC: jeevankumawat434@gmail.com";

//                 mail($to,$subject,$txt,$headers);
//                 }
//             else{
//             $data['error']="
// Invalid Email ID !
// ";
//             }
        
//     }

//      $this->load->view('admin/forword_pass');
// }
}
