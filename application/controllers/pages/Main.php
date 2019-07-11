<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Front_Controller {
	
	public function __construct()
    {
        parent::__construct();
       $this->load->model('order_model');
    }


    public function save_form()
    {
    	
    // 	echo "<pre>";
    // print_r($_POST);
    // die;
     $name = $this->input->post('name');
     $email = $this->input->post('email');
     $phone = $this->input->post('phone1_number');
    
     
  
 //    $topic=$this->input->post('topic');
	// $doc_type=$this->input->post('doctype');
	// $ppt_req=$this->input->post('additional[303]');
	// $urgency=$this->input->post('urgency');
	// $level=$this->input->post('wrlevel');
	// $no_of_pages=$this->input->post('numpages');
	// $doc_type=$this->input->post('doctype');
	
	// $order_data=array(
	// 'topic'=>$_POST["topic"],
	// 'doctype'=>$_POST["doctype"],  
	// 'ppt_req'=>$_POST["ppt_req"],
	//  'urgency' =>$_POST["urgency"],
	//  'level' =>$_POST["level"],
 //     'no_of_pages' => $_POST["no_of_pages"],
 //     'spacing' => $_POST["spacing"],
 //     'sub_area' => $_POST["sub_area"],
 //     'instructions' => $_POST["instructions"],
 //     'attachment' => $_POST["attachment"],
 //     'additional_info' => $_POST["additional_info"],
 //     'academic_level' => $_POST["academic_level"],
 //     'style' => $_POST["style"],
 //     'writer_id' => $_POST["writer_id"],
 //     'user_id' => $_POST["user_id"],
 //     'total_price' => $_POST["total_price"],
 //     'discount' => $_POST["discount"],

	//);
     $user_data=array(
     	'name' => $this->input->post('name'),
     	'email'=> $this->input->post('email'),
     	'phone'=> $this->input->post('phone1_number'),
     	'country'=> $this->input->post('country'),
     	'phone_country'=> $this->input->post('phone1_country'),
     	'password'=> 1

     

     );
//  $order_data=array(
// 'topic'=> $this->input->podt('topic'),
// 'doctype'=> $this->input->podt('doctype'),
// 'urgency'=> $this->input->podt('urgency')

//  );

	$this->order_model->insert('users',$user_data); 
	    
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