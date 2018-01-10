<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Promos extends REST_Controller {
    
    public function __construct(){
        parent:: __construct();
        $this->load->model('promos_model');
    }
    
    public function index_get(){
        $promos = $this->promos_model->get();
        
        if(!is_null($promos)){
            $this->response(array('response' => $promos), 200);
        } else {
            $this->response(array('error' => 'No hay promociones disponibles'), 404);
        }
    }
    
    //public function find_get($id){
    //    echo 'Ciudad numero' . $id;
    //}
}   