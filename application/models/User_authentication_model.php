<?php

class User_authentication_model extends CI_Model{


    public function get_user_credentials($username,$password){

        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 1);

        return $this->db->get('users')->row_object();
    }

  

}?>