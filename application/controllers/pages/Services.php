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

	public function researchpaper()
	{
		
		$this->data['title'] = 'Research Paper';

		$this->load->front_template_Services('pages/researchpaper',$this->data);
		
	}
	public function coursework()
	{
		
		$this->data['title'] = 'Coursework';

		$this->load->front_template_Services('pages/coursework',$this->data);
		
	}
	public function termpaper()
	{
		
		$this->data['title'] = 'Team Paper';

		$this->load->front_template_Services('pages/termpaper',$this->data);
		
	}

	public function casestudy()
	{
		
		$this->data['title'] = 'Case Study';

		$this->load->front_template_Services('pages/casestudy',$this->data);
		
		
	}
	public function dissertation_services()
	{
		
		$this->data['title'] = 'Dissertation Services';

		$this->load->front_template('pages/dissertation_services',$this->data);
		
		
	}
	public function admission_services()
	{
		
		$this->data['title'] = 'Admission Services';

		$this->load->front_template('pages/admission_services',$this->data);
		
		
	}
	
	public function extras()
	{
		
		$this->data['title'] = 'Extras';

		$this->load->front_template('pages/extras',$this->data);
		
		
	}

	public function privacy_policy()
	{
		
		$this->data['title'] = 'Privacy Policy';

		$this->load->front_template('pages/extras',$this->data);
		
		
	}
	public function disclaimer()
	{
		
		$this->data['title'] = 'Terms and Conditions';

		$this->load->front_template('pages/disclaimer',$this->data);
		
		
	}
public function sitemap()
	{
		
		$this->data['title'] = 'Sitemap';

		$this->load->front_template('pages/sitemap',$this->data);
		
		
	}
	public function affiliate()
	{
		
		$this->data['title'] = 'Affiliate';

		$this->load->front_template('pages/affiliate',$this->data);
		
		
	}
	public function write_my_essay()
	{
		
		$this->data['title'] = 'Write My Essay';

		$this->load->front_template('pages/write_my_essay',$this->data);
		
		
	}
	public function essay_writers()
	{
		
		$this->data['title'] = 'Essay Writer';

		$this->load->front_template('pages/essay_writers',$this->data);
		
		
	}
	
	

}