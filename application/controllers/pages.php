<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function view($page = 'home')
	{
		$this->load->helper("url");
		
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
		//$data['dog'] = "dogs";
		//$this->load->view('welcome_message');
	}
}


/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
?>