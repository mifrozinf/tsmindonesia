<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_product');
	}

	public function index()
	{			
		$data['dataProduct'] = $this->M_product->select_all();

		$this->load->view('frontend/header');
		$this->load->view('frontend/products', $data);
		$this->load->view('frontend/footer');
	}
}
