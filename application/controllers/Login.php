<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	
	}

	   function auth()
	   {
    $email    = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->model->validate_login($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $firstname  = $data['firstname'];
        $lastname  = $data['lastname'];
        $phone  = $data['phone'];
        $email = $data['email'];
        $status = $data['status'];
         $user_id  = $data['user_id'];
        $password  = $data['password'];
        $date = $data['date'];

           $location  = $data['location'];
        $about_me  = $data['about_me'];
        $facebook  = $data['facebook'];
        $instagram = $data['instagram'];
        $twitter = $data['twitter'];
         $linkedin  = $data['linkedin'];
        $image  = $data['image'];
       
        $sesdata = array(
            'firstname'  => $firstname,
            'lastname'  => $lastname,
            'email'     => $email,
            'status'     => $status,
            'status'  => $status,
            'phone'     => $phone,
            'user_id' => $user_id,
           'password'     => $password,
            'date'     => $date,

            'location'  => $location,
            'about_me'     => $about_me,
            'facebook' => $facebook,
           'instagram'     => $instagram,
            'twitter'     => $twitter,
            'linkedin'  => $linkedin,
            'image'     => $image,
           

            'logged_in' => TRUE  
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($status === '1'){
            redirect('admin');
 
        // access login for staff
        }elseif($status === '2'){
            redirect('user');
 
        // access login for author
        }elseif($status === '3'){
            redirect('agent');
 
        // access login for author
        }


        else{
          
            echo '<center><h3>Account not found! If you need to signup click below</h3>
            <p><i class = "fa  fa-hand-o-down" style = "color: blue; font-size: 20px"></i></p>
                 <a href="./register"><button class="btn btn-primary">Sign Up</button></a></center>';
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }


   function logout(){
      $this->session->sess_destroy();
      redirect('site');
  }












}

