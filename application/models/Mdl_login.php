<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_login extends CI_Model {
  
  public function autenticarUsuario($nombreUsuario, $contraseña) {
    // Realizar la consulta en la base de datos para verificar las credenciales
    $this->db->where('nombre_usuario', $nombreUsuario);
    $this->db->where('contraseña', $contraseña);
    $query = $this->db->get('usuarios');
    
    if ($query->num_rows() == 1) {
      return true;
    } else {
      return false;
    }
  }
}
?>
