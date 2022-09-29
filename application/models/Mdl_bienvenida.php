<?php

class Mdl_bienvenida extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    function insertar_persona($parametros)
    {
        $campos= array(
            'nombres'=> $parametros['cnombre'],
            'apellidop'=> $parametros['capellidop'],
            'apellidom'=> $parametros['capellidom']
        );
        $this->db->insert('persona',$campos);     
    }

    function modificar_registro($parametros)
    {
        $consulta="Update persona set nombres='".$parametros['cnombre']."', apellidop='".$parametros['capellidop']."', apellidom='".$parametros['capellidom']."' where id='".$parametros['cid']."';";
        $this->db->query($consulta);
    }

    function obtener_persona_all()
    {
        $consulta="Select * from persona;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function buscar_persona($id)
    {
        $consulta="Select * from persona where id='".$id."';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function borrar_persona($id){
        $this->db->delete('persona',array('id'=>$id));      
    }

}
