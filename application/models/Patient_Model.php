<?php


class Patient_Model extends CI_Model {


    public function addNew(){

        $formData = $this->input->post();

        return $this->db->insert('patients', $formData);
    }
    

    public function get($id = FALSE){
        
        if ($id === FALSE){
            $query = $this->db->get('patients');
            return $query->result_array();
        }

        $query = $this->db->get_where('patients', array('id' => $id));
        return $query->row_array();

        }
}