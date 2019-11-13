<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Personas'); 
		//$this->load->view('persona/list');  /* sintaxis usada siempre para llamar al modelo */
	}
	public function index($permission){
		/*$data['list'] = $this->Persona->Persona();*/
		$data['permission'] = $permission;
		$this->load->view('persona/list', $data);
	}
	public function guardarPersona(){
	    
	    $dni=$_POST['dni'];
	    $nombre=$_POST['nombre'];
	    $apellido=$_POST['apellido'];
	    $telefono=$_POST['telefono'];
	    $direccion=$_POST['direccion'];
	    $email=$_POST['email'];
	    $tipopers=$_POST['tipopers'];
	   
	    $datos = array(
		        	 'dni'=>$dni, 
		        	 'nombre'=>$nombre,
		        	 'apellido'=>$apellido,
		        	 'domicilio'=>$direccion,
		        	 'email'=>$email,
		        	 'tipo'=>$tipopers	        	 

		        	);	
	  /* Las variables de color amarillo del arreglo datos, deben ir con el mismo nombre de la base de datos*/

    	$result = $this->Personas->guardarPersonas($datos);
    	/*print_r(true);*/
    	if ($result){
			echo "Guardado";
		}
		else
		{
			echo "Error";
		}
	}

	public function traerTituloAcademico(){
	
		$result = $this->Personas->traertituloacademico();
		if ($result){
			echo json_encode($result);
		}
		else{
			echo "Error";
		}
	}
	public function traerCarrera(){

		$result = $this->Personas->traerCarreras();
		if ($result){
			echo json_encode($result);
		}
		else{
			echo "Error";
		}
	}


}
