<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Patient extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Patient_Model');

	}

	public function add()
	{
	
		$this->load->library('form_validation');
        $this->form_validation->set_rules('firstname','prénom','trim|required|max_length[55]|alpha|encode_php_tags');
        $this->form_validation->set_rules('lastname','nom','trim|required|max_length[55]|alpha|encode_php_tags');
        $this->form_validation->set_rules('birthdate','date de naissance','trim|required|regex_match[/^[0-9-]+$/]|encode_php_tags');
        $this->form_validation->set_rules('phone','n° de téléphone','trim|required|max_length[15]|regex_match[/^[0-9-]+$/]|encode_php_tags');
        $this->form_validation->set_rules('mail','E-mail','trim|required|max_length[155]|valid_email|encode_php_tags');
		
		
	
		if($this->form_validation->run() === TRUE) {

			$this->Patient_Model->addNew();
			
		} else {

			$this->load->view('templates/header');
			$this->load->view('addPatient');
			$this->load->view('templates/footer');
		}
	}

	public function list() {

		$data['patients'] = $this->Patient_Model->get();


		$this->load->view('templates/header');
		$this->load->view('listPatient', $data);
		$this->load->view('templates/footer');

	}
}
