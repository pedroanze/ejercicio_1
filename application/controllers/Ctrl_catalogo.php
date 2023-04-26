<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_catalogo extends CI_Controller {

	/** 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
    {
        parent ::__construct();
		$this->load->model('Mdl_catalogo');
    }   	


	public function index()
	{
		$this->load->view('View_head');
		$this->load->view('View_catalogo');
		$this->load->view('View_footer');
		
	}
	
	public function guardar()
	{
		$nombre_producto=$this->input->post('vnombre_producto');
		$stock=$this->input->post('vstock');
		$precio=$this->input->post('vprecio');

		$parametros['cnombre_producto']=$nombre_producto;
		$parametros['cstock']=$stock;
		$parametros['cprecio']=$precio;


		


		$this->Mdl_catalogo->insertar_producto($parametros);
	}
	public function modificar()
	{
		$id=$this->input->post('vid');
		$nombre_producto=$this->input->post('vnombre_producto');
		$stock=$this->input->post('vstock');
		$precio=$this->input->post('vprecio');

		$parametros['cid']=$id;	
		$parametros['cnombre_producto']=$nombre_producto;
		$parametros['cstock']=$stock;
		$parametros['cprecio']=$precio;


		


		$this->Mdl_catalogo->modificar_producto($parametros);
	}





	public function eliminar()
	{

		$id=$this->input->post('vid');
		$this->Mdl_catalogo->eliminar_producto($id);
	}

	public function obtener_todas_las_productos()
	{
		echo json_encode($this->Mdl_catalogo->obtener_producto_all());		
	}

	public function obtener_productos_by(){
		$nombre_producto=$this->input->post('vnombre_producto');
		$stock=$this->input->post('vstock');
		$precio=$this->input->post('vprecio');

		$parametros['cnombre_producto']=$nombre_producto;
		$parametros['cstock']=$stock;
		$parametros['cprecio']=$precio;
		$this->Mdl_catalogo->obtener_producto_by($parametros);
		echo json_encode($this->Mdl_catalogo->obtener_producto_by($parametros));
	}
}