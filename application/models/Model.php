<?php

	class Model extends CI_Model
	{

function insertdata()
		{
$datestring = '%Y-%m-%d';

$date = mdate($datestring);


	$user_data = array(
		'firstname' => $this->input->post('firstname'),
		'lastname' => $this->input->post('lastname'),
		'email' => $this->input->post('email'),
		'password' =>$this->input->post('password'),
		'cpassword' => $this->input->post('cpassword'),
		'phone' =>$this->input->post('phone'),
		'status' => '3',
		'user_id' => random_string('alnum', 4),
		'date' => $date
		
	);
	if($this->db->insert('signup_table',$user_data)){
		return true;
	}else{
		return false;
	}
		}



function validate_login($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('signup_table',1);
    return $result;
  }

function add_property()
{

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
		'thumbnail' => $this->upload->data('cl_name'),
		'image' => $this->upload->data('client_name'),
		'video' => $this->upload->data('client_name'),
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
		'plan' => $this->input->post('plan'),
		'plan_video' => $this->upload->data('file_name'),
		'plan_description' => $this->input->post('plan_description'),
		'date' => $date
		
	);
	if($this->db->insert('property',$data)){
		return true;
	}else{
		return false;
	}
}




function update($dat,$id){
	

  $this->db->where('user_id', $id);
  if($this->db->update('signup_table', $dat)){
  	return true;
  }else{
  	return false;
  }

   }


 public function property_data()
 {
 	$this->db->order_by('date', 'DESC');
	$query = $this->db->get('property');
	return $query->result_array();
 }















	}