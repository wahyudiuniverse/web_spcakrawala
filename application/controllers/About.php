<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		// $this->load->open('services');

        // $this->load->view('templates/head');
		$data['title'] = 'About';
		$this->load->view('about', $data);
		// $this->load->view('templates/foot');
	}
}
