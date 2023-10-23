<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

   function __construct(){
    parent::__construct();
  
  }

	public function index()
	{
		$data['property']  = $this->model->property_data();
		$this->load->view('head', $data);
		$this->load->view('home', $data);
		$this->load->view('foot', $data);
	}


	public function user()
	{
		$this->load->view('head');
		$this->load->view('home');
		$this->load->view('foot');
	}

	public function agent()
	{
		$this->load->view('head');
		$this->load->view('home');
		$this->load->view('foot');
	}

public function dash()
	{

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }

		$this->load->view('head');
		$this->load->view('agent/dash');
		$this->load->view('foot');
	}

	public function profile()
	{

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
		$this->load->view('head');
		$this->load->view('agent/profile');
		$this->load->view('foot');
	}

	function update_profile()
{


    $config['upload_path']          = '/var/www/html/estate/uploads/';
             $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 3300000;
                $config['max_width']            = 3500000;
                $config['max_height']           = 3500000;

                $this->upload->initialize($config);
                

   

  if($this->upload->do_upload('image'))
  { 

  	  $dat = array(
            'firstname'  =>  $this->input->post('firstname'),
            'lastname'  =>  $this->input->post('lastname'),
            'phone'  =>  $this->input->post('phone'),
            'email'     =>  $this->input->post('email'),
            'location'  =>  $this->input->post('location'),
            'about_me'  =>  $this->input->post('about_me'),
            'facebook'     =>  $this->input->post('facebook'),
            'instagram'     =>  $this->input->post('instagram'),
            'linkedin'     =>  $this->input->post('linkedin'),
            'twitter'     =>  $this->input->post('twitter'),
            'image' => $this->upload->data('file_name'),
          
        );
     //$id = $this->uri->segment(3);
     $id = $this->session->userdata('user_id');
               
 
     if($this->model->update($dat,$id)){
      if ($this->session->set_userdata($dat)) {
       
      $this->session->set_flashdata('info', "Profile Updated");
    
       }else{
      $this->session->set_flashdata('info', "Profile Not Updated");
      
     }
      }
  }

  redirect('agent/profile');



     
        
      
}


public function add_property()
	{

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
		$this->load->view('head');
		$this->load->view('agent/add-property',  array('error' => ' ' ));
		$this->load->view('foot');
	}



 function upload_property()
{
    

$config['upload_path']          = '/var/www/html/estate/uploads/';
             $config['allowed_types']        = 'gif|jpg|png|jpeg|mp4';
                $config['max_size']             = 20971520;
               $config['max_width']            = 20971520;
                $config['max_height']           = 20971520;

                $this->upload->initialize($config);
                
               
$uploaded_files = array();
foreach ($_FILES as $field => $file){
  if($this->upload->do_upload($field))
  { 
  	$uploaded_files[$field] = $this->upload->data('file_name');
  }


}

$datestring = '%Y-%m-%d - %h:%i %a';
$time = time();
$date = mdate($datestring,$time);

	$data = array(
		'fullname' => $this->session->userdata('firstname') ,
		'email' => $this->session->userdata('email'),
		'user_id' => $this->session->userdata('user_id'),
		'phone' => $this->session->userdata('phone'),
		'title' =>$this->input->post('title'),
		'slug' =>$this->input->post('slug'),
		'type' => $this->input->post('type'),
		'purpose' => $this->input->post('purpose'),
		'rent_period' => $this->input->post('rent_period'),
		'price' => $this->input->post('price'),
		'area' => $this->input->post('area'),
		'bedroom' => $this->input->post('bedroom'),
		'bathroom' => $this->input->post('bathroom'),
		'garage' => $this->input->post('garage'),
		'kitchen' => $this->input->post('kitchen'),
		'description' => $this->input->post('description'),
		'thumbnail' => $uploaded_files['thumbnail'],
		'image' => $uploaded_files['image'],
		'video' => $uploaded_files['video'],
		'youtube_video' => $this->input->post('youtube_video'),
		'video_description' => $this->input->post('video_description'),
		'city' => $this->input->post('city'),
		'address' => $this->input->post('address'),
		'address_detail' => $this->input->post('address_detail'),
		'map' => $this->input->post('map'),
		'item1' => $this->input->post('item1'),
		'item2' => $this->input->post('item2'),
		'item3' => $this->input->post('item3'),
		'item4' => $this->input->post('item4'),
		'item5' => $this->input->post('item5'),
		'nearest_location' => $this->input->post('nearest_location'),
		'distance' => $this->input->post('distance'),
		'plan' => $uploaded_files['plan'],
		'plan_video' => $this->input->post('plan_video'),
		'plan_description' => $this->input->post('plan_description'),
		'date' => $date
		
	);
	if($this->db->insert('property',$data)){
		  $this->session->set_flashdata('info', "Property Added");
    redirect('agent/add_property');
	}else{
		  $this->session->set_flashdata('info', "Property Not Added");
    redirect('agent/add_property');
	}
	


  
 


}
















































	public function signup()
	{
		$this->load->view('signup');
	
	}



	public function signup_verify()
	{ 

		 

				$this->form_validation->set_error_delimiters('<div style = "color: red">', '</div>');
                $this->form_validation->set_rules('phone', 'Phone Phone', 'required|numeric|min_length[8]');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]',
                	array( 'matches' => 'Password does not match')

            );
                $this->form_validation->set_rules('email', 'Email', 'required|is_unique[signup_table.email]',
                	array( 'is_unique' => 'This %s already exist')
                );

                $this->form_validation->set_rules('firstname', 'First Name', 'required');
                $this->form_validation->set_rules('lastname', 'Last Name', 'required');
      

                
                
                if ($this->form_validation->run() == FALSE)
                {
      ;
		$this->load->view('signup');
	
		
                }else{
                	   if($this->input->post('firstname')){

    		if($this->model->insertdata()){
    				$this->session->set_flashdata('info', "signup successful");
    				redirect('login');
			}else{
				
				$this->session->set_flashdata('info', "Something Wrong, Try Again");
			}
			
    	}
                }
                
               
		
	}



} 