<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = 'PT Siprama Cakrawala';
		$this->load->view('templates/head', $data);
		$this->load->view('home');
		$this->load->view('templates/foot');
	}
}
