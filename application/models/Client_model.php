<?php

class Client_model extends CI_Model{


    public function save_client($data){
		
		if(!empty($data)){

	        $response = $this->db->insert('clients', $data);
	        $latest_id = $this->db->insert_id();

	    }
	    return $latest_id;

    }

    public function get_latest_id(){
	
		$query = $this->db->query("SELECT client_id from clients ORDER BY client_id DESC LIMIT 1");
        return $query->result();
	

    }

    public function get_all_clients(){
	
		$query = $this->db->query("SELECT * from clients ORDER BY client_id DESC ");
        return $query->result();
	

    }
    
    public function get_client_data($id){
	
		$query = $this->db->query("SELECT * from clients WHERE client_id ='".$id."'");
        return $query->result();
	

    }

    public function update_client($data,$id)
    {
        if(!empty($data))
        {
            $this->db->trans_start();
            $this->db->where('client_id', $id);
            $this->db->update('clients', $data);
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



  

}?>s