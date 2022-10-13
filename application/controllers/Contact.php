<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		// $this->load->open('services');

		$data['title'] = 'Contact';
        $this->load->view('templates/head', $data);
		$this->load->view('contact');
		// $this->load->view('templates/foot');
	}
}
