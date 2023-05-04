<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Services extends CI_Controller {

	public function index()

	{

		$data['title'] = 'Services';

        $this->load->view('templates/head', $data);

		$this->load->view('services');

		$this->load->view('templates/foot');

	}

}

