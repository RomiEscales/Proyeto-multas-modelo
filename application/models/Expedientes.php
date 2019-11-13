<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Expedientes extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function Empresas_List()
	{
		//$query= $this->db->get('expediente');
		$this->db->select('*');		
		$this->db->from('mov');
		
		
		$query= $this->db->get();


		if ($query->num_rows()!=0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	function getEmpresa($data = null)
	{
		if($data == null)
		{
			return false;
		}
		else
		{
			$action = $data['act'];
			$idemp = $data['id'];

			$data = array();
			//dump_exit($data);
			//Datos de la familia
			$query= $this->db->get_where('expediente',array('id_expediente'=>$idemp));
			if ($query->num_rows() != 0)
			{
				$f = $query->result_array();
				$data['empresa'] = $f[0];
			} else {
				$Empresa = array();
				$Empresa['id_empresa'] = '';
				$Empresa['descripcion'] = '';
				$Empresa['empcuit'] = '';
				$Empresa['empdir'] = '';
				$Empresa['emptelefono'] = '';
				$Empresa['empcelular'] = '';
				$Empresa['empemail'] = '';
				$data['empresa'] = $Empresa;
			}

			//Readonly
			$readonly = false;
			if($action == 'Del' || $action == 'View'){
				$readonly = true;
			}
			$data['read'] = $readonly;

			//Zonas
			$query= $this->db->get('confzone');
			if ($query->num_rows() != 0)
			{
				$data['zone'] = $query->result_array();
			}

			return $data;
		}
	}

	function setEmpresa($data = null)
	{
		if($data == null)
		{
			return false;
		}
		else
		{
			$id = $data['id'];
			$name = $data['name'];
			$cuit = $data['cuit'];
			$dir = $data['dom'];
			$mail = $data['mail'];
			$tel = $data['tel'];
			$mov = $data['movil'];
			$zon = $data['zona'];

			$act = $data['act'];

			$data = array(
					   'descripcion' => $name,
					   'empcuit' => $cuit,
					   'empdir' => $dir,
					   'empemail' => $mail,
					   'emptelefono' => $tel,
					  'empcelular' => $mov,
 					   'zonaId' => $zon

					);

			switch($act)
			{
				case 'Add':
					//Agregar familia
					if($this->db->insert('empresas', $data) == false) {
						return false;
					}
					break;

				case 'Edit':
					//Actualizar nombre
					if($this->db->update('empresas', $data, array('id_empresa'=>$id)) == false) {
						return false;
					}
					break;

				case 'Del':
					//Eliminar familia
					if($this->db->delete('empresas', $data, array('id_empresa'=>$id)) == false) {
						return false;
					}

					break;
			}

			return true;

		}
	}


	function eliminacion($data)
    {
       	$this->db->where('id_empresa', $data);
		$query =$this->db->delete('empresas');
        return $query;
    }
    
    function BuscarIniciadores($dni)
    {

    	$query= $this->db->get_where('cliente',array('dni'=>$dni));
			if ($query->num_rows() != 0)
			{
				return 1;
			} else {
				return 0;
			}
       	
    }
    
    function BuscarExpedientes($num)
    {

    	$query= $this->db->get_where('expediente',array('numero_expediente'=>$num));
			if ($query->num_rows() != 0)
			{	

				return 1;
			} else {
				return 0;
			}
       	
    }
    
    function BuscarExpIniciadors($num,$dni)
    {
    	$this->db->select('*');			
		$this->db->from('cliente_expediente');
		$this->db->join('cliente','cliente.id_cliente = cliente_expediente.id_cliente');	
		$this->db->join('expediente','expediente.id_expediente = cliente_expediente.id_expediente');
		$this->db->where('cliente.dni',$dni);
		$this->db->where('expediente.numero_expediente',$num);
		$query= $this->db->get();

			if ($query->num_rows() != 0)
			{	

				return 1;
			} else {
				return 0;
			}
       	
    }

    function BuscarDatosIniciadores($dni){


		$this->db->select('*');			
		$this->db->from('cliente');
		$this->db->where('cliente.dni',$dni);
		$query= $this->db->get();

		if($query->num_rows()>0){
		    return $query->result();
		}
		else{
		    return false;
		    }

	}

	function GuardarExpedientes($datos, $dni){

		$query1 = $this->db->insert("expediente",$datos); //insertoo exp y traigoel id insertado y desp busco el segun el dni el id d cliente looo triago e inserto el id de cliente e id d dni el la tableexp_cliente
		$ultimo = $this->db->insert_id();
		 if ( $ultimo>0 ){

		 	$this->db->select('id_cliente');			
			$this->db->from('cliente');
			$this->db->where('cliente.dni',$dni);
			$query= $this->db->get();

			if($query->num_rows()>0){
			   
			    foreach ($query->result_array() as $row){

           			$data['id_cliente'] = $row['id_cliente'];

		        }
		        $datos2 = array(
		        	 'id_cliente'=>$data['id_cliente'], 
		        	 'id_expediente'=>$ultimo
		        	 
		        	);	
		        $query = $this->db->insert("cliente_expediente",$datos2);
			}
			else{
			    return false;
			    }
		 }


        //$query= $this->db->query($sql);
         return 1;

	}

	function GuardarClientes($datos){

		if($data != null){

		 	$query = $this->db->insert("cliente",$datos);

			if($query->num_rows()>0){
			    return $query->result();
			}
			else{
			    return false;
			    }
		}   
	}
	
	function MostrarDatosExpedientes($exp){

    	$this->db->select('*');			
		$this->db->from('expediente');
		$this->db->where('numero_expediente',$exp);
		$query= $this->db->get();

		if($query->num_rows()>0){
		    return $query->result();
		}
		else{
		    return false;
		    }   	
    }
    
    function MostrarDatosclientes($dni){

    	$this->db->select('*');			
		$this->db->from('cliente');
		$this->db->where('dni',$dni);
		$query= $this->db->get();

		if($query->num_rows()>0){
		    return $query->result();
		}
		else{
		    return false;
		    }   	
    }

}

?>