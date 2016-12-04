<?php

class Reports_model extends CI_Model{

    public function get_active_employees(){
        $result = $this->db->query("SELECT employee_id, CONCAT(family_name,', ',given_name,' ',middle_initial) AS full_name, contact_number, sex, client, branch, position FROM employees ORDER BY employee_id ASC;");
        $output = array();
        if ($result->num_rows() > 0){
            $output = $result->result_array();
        }else{
            $output = array();
        }

        $data = array('report' => $output);

        return $data;
    }

    public function get_active_clients(){
        $result = $this->db->query("SELECT name, address, contact_person, telephone_number, DATE_FORMAT(effective,'%M %d, %Y') AS effective FROM clients ORDER BY name ASC;");
        $output = array();
        if ($result->num_rows() > 0){
            $output = $result->result_array();
        }else{
            $output = array();
        }

        $data = array('report' => $output);

        return $data;
    }
}
?>