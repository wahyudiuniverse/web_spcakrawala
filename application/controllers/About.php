<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$data['title'] = 'About';
        $this->load->view('templates/head', $data);
		$this->load->view('about');
		$this->load->view('templates/foot');
	}
}
