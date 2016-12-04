<?php

class Employee_model extends CI_Model{


    public function save_employee($data){
		
		if(!empty($data)){

	        $response = $this->db->insert('employees', $data);
	        $latest_id = $this->db->insert_id();

	    }
	    return $latest_id;

    }

    public function get_latest_id(){
	
		$query = $this->db->query("SELECT employee_id from employees ORDER BY employee_id DESC LIMIT 1");
        return $query->result();
	

    }

    public function get_all_employee(){
	
		$query = $this->db->query("SELECT * from employees ORDER BY employee_id DESC ");
        return $query->result();
	

    }
    
    public function get_employee_data($id){
	
		$query = $this->db->query("SELECT * from employees WHERE employee_id ='".$id."'");
        return $query->result();
	

    }

    public function update_employee($data,$id)
    {
        if(!empty($data))
        {
            $this->db->trans_start();
            $this->db->where('employee_id', $id);
            $this->db->update('employees', $data);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE)
            {
                $response = 0;
            }
            else
            {
                $response = 1;
            }
        }

        return $response;
    }



  

}?>