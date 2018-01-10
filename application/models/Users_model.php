<?php

class Users_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function login($username) {
        $this->db->select('*');
  $this->db->from('users');
  $this->db->where('username', $username);
  $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $result = $query->result();
            return $result[0]->id;
        }
        return false;
    }
}

