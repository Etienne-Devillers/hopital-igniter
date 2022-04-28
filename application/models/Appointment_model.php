<?php


class Appointment_model extends CI_Model {


    public function addNew(){

        $formData = $this->input->post();

        $formData['dateHour'] = $formData['date'].' '.$formData['hour'].':'. $formData['minute'].':00';
        
        
        unset($formData['date']);
        unset($formData['hour']);
        unset($formData['minute']);

        return $this->db->insert('appointments', $formData);
    }
    

    public function get($id = FALSE){
        
        if ($id === FALSE){
            $query = $this->db->get('Appointments');
            return $query->result_array();
        }

        $query = $this->db->get_where('Appointments', array('idPatients' => $id));
        return $query->row_array();

        }
}