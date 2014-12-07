<?php

class Blog_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	
	public function get_blogs($slug = FALSE) 
	{
		
		if ($slug === FALSE) {
			$query = $this->db->get('blogs');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('blogs', array('slug' => $slug));
		return $query->row_array();
	}
	
	public function get_recent_blogs($last = 5) 
	{
		$sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT ?";
		$query = $this->db->query($sql, $last);
		return $query->result_array();
	}
	
	public function set_blogs() 
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content')
		);
		
		return $this->db->insert('blogs', $data);
	}
}