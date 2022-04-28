<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Appointment extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Patient_Model');
		$this->load->model('Appointment_Model');

	}

    public function add()
	{
	
		$this->load->library('form_validation');

        $this->form_validation->set_rules('idPatients','ID du patient','trim|required|max_length[155]|numeric|encode_php_tags');
        $this->form_validation->set_rules('date','date du RDV','trim|required|regex_match[/^[0-9-]+$/]|encode_php_tags');
        $this->form_validation->set_rules('hour','heure','required|max_length[55]|encode_php_tags');
        $this->form_validation->set_rules('minute','minutes','required|max_length[55]|encode_php_tags');
        
		if($this->form_validation->run() === TRUE) {

			$this->Appointment_Model->addNew();
			$data['message'] = 'le patient a bien était ajouté.';

            $data['appointments'] = $this->Appointment_Model->get();
            $data['patients']= $this->Patient_Model->get();

            $this->load->view('templates/header');
			$this->load->view('listAppointments', $data);
			$this->load->view('templates/footer');
		} else {
            $data['formData'] = array (
                'hours' =>[
                            '08' => '08',
                            '09' => '09',
                            '10' => '10',
                            '11' => '11',
                            '12' => '12',
                            '13' => '13',
                            '14' => '14',
                            '15' => '15',
                            '16' => '16',
                            '17' => '17',
                            '18' => '18'
                ],
                    
                'minutes' =>[
                            '00' => '00',
                            '15' => '15',
                            '30' => '30',
                            '45' => '45'
                ]
            );

            $patients = $this->Patient_Model->get();
            foreach ($patients as $key => $value) {
                $data['formData']['patients'][$value['id']] = $value['mail'];
            }

            $date = new Datetime;
            $data['date'] = $date->format('Y-m-d');

            $date = new Datetime('+2 years') ;
            $data['maxDate'] = $date->format('Y-m-d');

			$this->load->view('templates/header');
			$this->load->view('addAppointment', $data);
			$this->load->view('templates/footer');
		}
    }

        public function list() {

            $data['appointments'] = $this->Appointment_Model->get();
            $data['patients']= $this->Patient_Model->get();
    
            $this->load->view('templates/header');
            $this->load->view('listAppointments', $data);
            $this->load->view('templates/footer');
    
        }

	}



