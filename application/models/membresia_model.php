<?php

class Membresia_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
        
    public function get_eg_saldo()
    {
        $consulta = $this->db->query('SELECT * FROM eg_saldos');
        return $consulta->result();
    }
    
    public function add_eg_membresia()
    {
        $data = array(
            'nu_extra' => $this->input->post('extra'),
            'nu_saldo' => $this->input->post('saldo'),
            'nu_puntos' => $this->input->post('puntos'),
            'nu_user' => $this->input->post('user'),
        );
        $this->db->insert('eg_membresia', $data);
    }
}
