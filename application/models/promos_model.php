<?php

class Promos_model extends CI_Model {
    
    public function __construct(){
        Parent::__construct();
    }
    
    public function get() {
      $query = $this->db->select('*')->from('eg_promociones')->get();
      
      if($query->num_rows() > 0){
          return $query->result_array();
      }
      
      return false;
      
    }
}

