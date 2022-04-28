<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Appointment extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Patient_Model');

	}

    public function add()
	{
	
		
	
		// if($this->form_validation->run() === TRUE) {

			// $this-Appointment_Model->addNew();
			
		// } else {


            
$data['formData'] = array (

    'hours' =>[
                '8' => '8',
                '9' => '9',
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
                '0' => '0',
                '15' => '15',
                '30' => '30',
                '45' => '45'
    ]
);

$patients = $this->Patient_Model->get();
foreach ($patients as $key => $value) {
    $data['formData']['patients'][$value['id']] = $value['mail'];
}

			$this->load->view('templates/header');
			$this->load->view('addAppointment', $data);
			$this->load->view('templates/footer');
		// }
	}











}