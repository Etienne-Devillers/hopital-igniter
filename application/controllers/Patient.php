<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function add()
	{
	
		$this->load->view('templates/header');
		$this->load->view('addPatient');
		$this->load->view('templates/footer');
	}



}
