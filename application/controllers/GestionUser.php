<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionUser extends CI_Controller {

	function __construct() { 
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->database(); 
	 } 
	
	public function index()
	{
		$query = $this->db->get("Profil"); 
		$data['profil'] = $query->result();
		
		$this->load->helper('url'); 

			$this->load->view('vue_page_index.php', $data);
	}

	
}
