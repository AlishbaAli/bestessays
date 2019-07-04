<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Front_Controller {
	
	public function __construct()
    {
        parent::__construct();
       // $this->load->model('About_model');
    }

	public function essay()
	{
		
		$this->data['title'] = 'Essay';

		$this->load->front_template_Services('pages/essay',$this->data);
		
	}

	public function research_paper()
	{
		
		$this->data['title'] = 'Research Paper';

		$this->load->front_template_Services('pages/research_paper',$this->data);
		
	}
	public function course_work()
	{
		
		$this->data['title'] = 'Coursework';

		$this->load->front_template_Services('pages/course_work',$this->data);
		
	}
	public function team_paper()
	{
		
		$this->data['title'] = 'Team Paper';

		$this->load->front_template_Services('pages/team_paper',$this->data);
		
	}

	public function case_study()
	{
		
		$this->data['title'] = 'Case Study';

		$this->load->front_template_Services('pages/case_study',$this->data);
		
		
	}
	public function dissertation_services()
	{
		
		$this->data['title'] = 'Dissertation Services';

		$this->load->front_template_Services('pages/samples',$this->data);
		
		
	}
	public function admission_services()
	{
		
		$this->data['title'] = 'Admission Services';

		$this->load->front_template_Services('pages/samples',$this->data);
		
		
	}
	public function resume()
	{
		
		$this->data['title'] = 'Resume';

		$this->load->front_template_Services('pages/samples',$this->data);
		
		
	}
	public function extras()
	{
		
		$this->data['title'] = 'Extras';

		$this->load->front_template_Services('pages/samples',$this->data);
		
		
	}

	
	

}