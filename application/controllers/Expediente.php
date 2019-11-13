<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expediente extends CI_Controller {

	function __construct()
    {
		parent::__construct();
		$this->load->model('Expedientes');
	}

	public function index($permission)
	{
		$data['list'] = $this->Expedientes->Empresas_List();
		$data['permission'] = $permission;
		$this->load->view('expediente/list', $data);
	}
	
	public function cargarexp($permission)
	{
		//$data['list'] = $this->Expedientes->Empresas_List();
		$data['permission'] = $permission;
		$this->load->view('expediente/view_', $data);
	}

	public function getEmpresa()
	{
		$data['data'] = $this->Expedientes->getEmpresa($this->input->post());
		$response['html'] = $this->load->view('expediente/view_', $data, true);

		echo json_encode($response);
	}

	public function setEmpresa()
	{
		$data = $this->Empresas->setEmpresa($this->input->post());
		if($data  == false)
		{
			echo json_encode(false);
		}
		else
		{
			echo json_encode(true);
		}
	}

	public function baja_cliente()
	{
	    $idcliente=$_POST['idcli'];

    	$result = $this->Empresas->eliminacion($idcliente);
    	print_r(true);
	}
	
	public function BuscarIniciador()
	{
	    $dni=$_POST['dni'];

    	$result = $this->Expedientes->BuscarIniciadores($dni);
    	if ($result == 1){
			echo json_encode(true);
		}
		else
		{
			echo json_encode(false);
		}
	}
	
	public function BuscarExpediente()
	{
	    $num=$_POST['num'];

    	$result = $this->Expedientes->BuscarExpedientes($num);
    	if ($result == 1){
			echo json_encode(true);
		}
		else
		{
			echo json_encode(false);
		}
	}
	
	public function BuscarExpIniciador()
	{
	    $num=$_POST['num'];
	    $dni=$_POST['dni'];

    	$result = $this->Expedientes->BuscarExpIniciadors($num, $dni);
    	if ($result == 1){
			echo json_encode(true);
		}
		else
		{
			echo json_encode(false);
		}
	}
	
	public function BuscarDatosIniciador(){
	    
	    $dni=$_POST['dni'];
    	$result = $this->Expedientes->BuscarDatosIniciadores($dni);

    	if($result!=false)
		{	
			$arre=array();
	        foreach ($result as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

	public function GuardarExp(){
	    
	    $dni=$_POST['dni'];
	    $exp=$_POST['exp'];
	    $caratula=$_POST['caratula'];
	    $extracto=$_POST['extracto'];
	    $observacion=$_POST['observacion'];
	    $tipo=$_POST['tipo'];
	    $fecha_inicio=$_POST['fecha_inicio'];
	    $nufolio=$_POST['nufolio'];

	    $datos = array(
		        	 'numero_expediente'=>$exp, 
		        	 'caratula'=>$caratula,
		        	 'extracto'=>$extracto,
		        	 'observacion'=>$observacion,
		        	 'tipo'=>$tipo,
		        	 'fecha'=>'date Y-m-d',
		        	 'fecha_inicio'=>$fecha_inicio,
		        	 'numero_folio'=>$nufolio,
		        	 'estado'=>'C'

		        	);	
	  

    	$result = $this->Expedientes->GuardarExpedientes($datos, $dni);
    	if ($result == 1){
			echo json_encode(true);
		}
		else
		{
			echo json_encode(false);
		}
	}

	public function GuardarIniciador(){
	    
	    $dni=$_POST['dni'];
	    $nombre=$_POST['nombre'];
	    $apellido=$_POST['apellido'];
	    $direccion=$_POST['direccion'];

	    $datos = array(
		        	 'nombre'=>$nombre, 
		        	 'apellido'=>$apellido,
		        	 'dni'=>$dni,
		        	 'direccion'=>$direccion,
		        	 'estado'=>'A'
		        	);	
	  

    	$result = $this->Expedientes->GuardarClientes($datos);
    	if ($result == 1){
			echo json_encode(true);
		}
		else
		{
			echo json_encode(false);
		}
	}
	public function MostrarDatosExp(){
	
		$dni=$_POST['dni'];
	    $exp=$_POST['num'];
	    $result = $this->Expedientes->MostrarDatosExpedientes($exp);

			if($result){ 
				$arre['datos']=$result;
       			$cliente = $this->Expedientes->MostrarDatosclientes($dni);
		        if($cliente)
		        {
		          $arre['cliente']=$cliente;
		        }
		        else $arre['cliente']=0;
		    
		     echo json_encode($arre);
      		}
      		else echo "nada";
	}

}