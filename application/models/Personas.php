<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
/**
 * 
 */
class Personas extends CI_Model
{
	
	function __construct(){
		# code...
	}

	function guardarPersonas($datos){

			if($datos != null)
			{

			 	$query = $this->db->insert("personaunsj",$datos);
			 	/*return $query;*/

				

				    return $query;
				
			}  

	}

	function traertituloacademico(){

		$this->db->select('nombretitulo');		
		$this->db->from('tituloacademico');
		
		
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

}
	function traerCarreras(){

		$this->db->select('*');		
		$this->db->from('carrera');		
		$query= $this->db->get();

		if ($query->num_rows()!=0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

}

?>
