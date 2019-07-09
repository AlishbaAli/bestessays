<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Front_Controller {
	
	public function __construct()
    {
        parent::__construct();
       // $this->load->model('About_model');
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
	

}