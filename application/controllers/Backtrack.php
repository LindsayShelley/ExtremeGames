<?php

class  Backtrack extends CI_Controller{
  public function _construct(){
    parent::costruct();
    $this->load->database();
    $this->load->helper('url');


    $this->load->library('grocery_CRUD');
  }
  public function index(){
    $output=(object) array ('output' => '', 'js_files' => array(), 'css_files'=> array());
    $this->cargar_vistas($output);
  }

  function cargar_vistas($output=null){
    $this->load->view('backtrack.php', $output);
  }

  public function eg_consolas()
  {
    try{
      $crud = new grocery_CRUD();

      $crud->set_theme('flexigrid');
      $crud->set_table('eg_consolas');
      $crud->columns('nombre');
      $crud->set_language("spanish");


      $output = $crud->render();

      $this->cargar_vistas($output);

    }catch(Exception $e){
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }

  public function eg_catalago()
  {
    try{
      $crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('eg_catalago');
			$crud->set_relation('nu_consola','eg_consolas','nombre');
			$crud->display_as('nu_consola','Consolas');
			$crud->set_subject('nombre');
      $crud->set_language("spanish");


			$crud->required_fields('nombre');

			$crud->set_field_upload('imagen','assets/uploads/images_catalago');

			$output = $crud->render();

			$this->cargar_vistas($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
  }

  }
