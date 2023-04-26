<?php
 
class Mdl_catalogo extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    function insertar_producto($parametros)
    {
        $campos= array(
            'producto'=> $parametros['cproducto'],
            'stock'=> $parametros['cstock'],
            'precio'=> $parametros['cprecio']
        );
        echo $parametros['cproducto'];
        $this->db->insert('producto',$campos);     
    }

    function modificar_producto($parametros)
    {
        $id =$parametros['cid'];
        $campos= array(
            'producto'=> $parametros['cproducto'],
            'stock'=> $parametros['cstock'],
            'precio'=> $parametros['cprecio']
        );
        
    $this->db->where('id', $id);

    $this->db->update('producto', $campos);

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
                    producto like '%" .$parametros['cproducto']."%' and 
                    stock like '%" .$parametros['cstock']."%' and
                    precio like '%" .$parametros['cprecio']."%';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function eliminar_producto($id)
    {
        
        $consulta="Delete from producto where id= '".$id."';" ;
        $this->db->query($consulta);
        
    }



}
