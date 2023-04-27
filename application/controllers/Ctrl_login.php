<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_login extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    
    // Cargar el modelo
    $this->load->model('Mdl_login');
  }
  
  public function index()
  {
	  $this->load->view('View_login');
	  
  }
  public function autenticarUsuario() {
    $nombreUsuario = $this->input->post('username');
    $contraseña = $this->input->post('password');
    
    $autenticado = $this->Mdl_login->autenticarUsuario($nombreUsuario, $contraseña);
    
    if ($autenticado) {
      echo "success";
    } else {
      echo "error";
    }
  }
}
?>
