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
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;


		


		$this->Mdl_catalogo->insertar_persona($parametros);
	}
	public function modificar()
	{
		$id=$this->input->post('vid');
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cid']=$id;	
		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;


		


		$this->Mdl_catalogo->modificar_persona($parametros);
	}





	public function eliminar()
	{

		$id=$this->input->post('vid');
		$this->Mdl_catalogo->eliminar_persona($id);
	}

	public function obtener_todas_las_personas()
	{
		echo json_encode($this->Mdl_catalogo->obtener_persona_all());		
	}

	public function obtener_personas_by(){
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;
		$this->Mdl_catalogo->obtener_persona_by($parametros);
		echo json_encode($this->Mdl_catalogo->obtener_persona_by($parametros));
	}
}