<?php

class User_model extends CI_Model{

    public function save_user($data){
       
	    if(!empty($data))
	    {
	        $response = $this->db->insert('users', $data);
	        $latest_id = $this->db->insert_id();

	    }
	    return $latest_id;

	}

	public function get_user_information($id){

        $this->db->select('*');
        $this->db->where('user_id', $id);
        return $this->db->get('users')->row_object();
    }

    public function get_all_user(){

     	$query = $this->db->query("SELECT * FROM users WHERE position = '1'");
        return $query->result();
    }

   	public function update_user($data,$id)
    {
        if(!empty($data))
        {
            $this->db->trans_start();
            $this->db->where('user_id', $id);
            $this->db->update('users', $data);
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