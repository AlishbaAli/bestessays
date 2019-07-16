<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Front_Controller {
	
	public function __construct()
    {
        parent::__construct();
       $this->load->model('order_model');
       // $this->id = $this->session->userdata('user_id');
    }


    public function save_form()
    {
    	
    // 	echo "<pre>";
    //   $count_additional = implode(',',$_POST['count_additional']);
    //   $additional = implode(',',$_POST['additional']);
    // print_r($count_additional);
    // print_r($additional);
    // die;
    
     $user_data=array(
     	'name' => $this->input->post('name'),
     	'email'=> $this->input->post('email'),
     	'phone'=> $this->input->post('phone1_number'),
     	'country'=> $this->input->post('country'),
     	'phone_country'=> $this->input->post('phone1_country'),
     	'password'=> 'my123'

     

     );
    $id= $this->order_model->insert('user',$user_data); 
        



 $order_data=array(
'topic'=> $this->input->post('topic'),
'doctype'=> $this->input->post('doctype'),
'ppt_req'=> implode(',',$_POST['count_additional']),
'no_of_pages'=> $this->input->post('numpages'),
'level'=> $this->input->post('wrlevel'),
'sub_area'=> $this->input->post('order_category'),
'single_spacing'=> $this->input->post('o_interval'),
'urgency'=> $this->input->post('urgency'),
'additional_info'=>  implode(',',$_POST['additional']),
'academic_level'=> $this->input->post('academic_level'),
'style'=> $this->input->post('style'),
'writer_id'=> implode(',',$_POST['preff_wr_id']),
'user_id'=> $id,
'total_price'=> 55,
'discount'=> 2
 );

	
	$this->order_model->insert('orders',$order_data); 
	    
    }

	public function about()
	{
		
		$this->data['title'] = 'About Us';

		$this->load->front_template('pages/about',$this->data);
		
	}

	public function services()
	{
		
		$this->data['title'] = 'Services';

		$this->load->front_template('pages/services',$this->data);
		
	}
	public function contact()
	{
		
		$this->data['title'] = 'Contact';

		$this->load->front_template('pages/contact',$this->data);
		
	}
	public function discount()
	{
		
		$this->data['title'] = 'Get Discount';

		$this->load->front_template('pages/discount',$this->data);
		
	}
public function prices()
	{
		
		$this->data['title'] = 'Prices';

		$this->load->front_template('pages/prices',$this->data);
		
	}
	public function samples()
	{
		
		$this->data['title'] = 'Samples';

		$this->load->front_template('pages/samples',$this->data);
		
	}
		public function glossary()
	{
		
		$this->data['title'] = 'Glossary';

		$this->load->front_template('pages/glossary',$this->data);
		
	}

	public function order()
	{
		
		$this->data['title'] = 'Order';

		$this->load->front_template_services('pages/order',$this->data);
		
	}
	

}