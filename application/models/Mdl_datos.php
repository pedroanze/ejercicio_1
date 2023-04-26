<?php
 
class Mdl_datos extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    


    function obtener_producto_all()
    {
        $consulta="Select * from producto;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function obtener_producto_by($parametros)
    {

        $consulta="Select * from producto where 
                    nombre_producto like '%" .$parametros['cnombre_producto']."%' and 
                    stock like '%" .$parametros['cstock']."%' and
                    precio like '%" .$parametros['cprecio']."%';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }


}