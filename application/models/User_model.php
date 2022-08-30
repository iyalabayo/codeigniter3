<?php

class User_model extends CI_Model{
    
    public function getUser(){
        $query = $this->db->query('SELECT * FROM User');

        return $query->result();
    }
}

?>