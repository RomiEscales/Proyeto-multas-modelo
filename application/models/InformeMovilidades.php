<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class InformeMovilidades extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function Empresas_List()
	{
		//$query= $this->db->get('expediente');
		$this->db->select('*');		
		$this->db->from('personaunsj');
		
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

?>