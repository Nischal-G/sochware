<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('SW_CRUD');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');	
	}

	public function index()
	{
		$data['about'] = $this->SW_CRUD->getAbout();
		$data['blog'] = $this->SW_CRUD->getBlog();
		$data['service'] = $this->SW_CRUD->getService();
		$data['achievements'] = $this->SW_CRUD->getAchievements();
		$data['slider'] = $this->SW_CRUD->getHomeslider();
		$this->load->view('home_page/home_dashboard',$data);
	}
}
