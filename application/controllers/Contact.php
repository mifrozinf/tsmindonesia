<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{			
		$this->load->view('frontend/header');
		$this->load->view('frontend/contact');
		$this->load->view('frontend/footer');
	}
}
