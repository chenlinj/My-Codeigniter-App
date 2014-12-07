<?php

class Blog extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('blog_model');
	}
	
	public function index() 
	{
		$this->load->library('form_validation');
		
		$data['title'] = 'Blog';
		$data['blogs'] = $this->blog_model->get_blogs();
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('blogs/blog', $data);
			$this->load->view('templates/footer');
		} else {
			$this->blog_model->set_blogs();
			
			$data['title'] = "Success posting blog!";
			
			$this->load->view('templates/header', $data);
			$this->load->view('blogs/success');
			$this->load->view('templates/footer');
		}
		

	}
	
	public function view($slug) 
	{
		$data['blogs_item'] = $this->blog_model->get_blogs($slug);
		$data['blogs'] = $this->blog_model->get_recent_blogs();
		
		if (empty($data['blogs_item'])) {
			show_404();
		}
		
		$data['title'] = $data['blogs_item']['title'];
		
		$this->load->view('templates/header', $data);
		$this->load->view('blogs/view', $data);
		$this->load->view('templates/footer');
	}
	
	
}