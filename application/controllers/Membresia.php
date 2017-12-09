<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membresia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('membresia_model');
    }

    public function index()
	{
            $data = array(
                
                  'eg_saldo' => $this->membresia_model->get_eg_saldo()
                    
            );
            
            
        $this->load->view('membresia',$data);
       
        
        }
        
        
        
        public function add_eg_membresia()
{
    if($this->input->post('submit'))
    {
        $this->membresia_model->add_eg_membresia();
        redirect(base_url().'membresia');
    }
}
}