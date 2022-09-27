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




}
