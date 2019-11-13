
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeMovilidad extends CI_Controller {

	function __construct()
    {
		parent::__construct();
		$this->load->model('InformeMovilidades');
	}

	public function index($permission)
	{
		//$data['list'] = $this->Movilidades->Empresas_List();
		$data['permission'] = $permission;
		
		$this->load->view('informeMovilidad/list', $data);
	}
	
	

	

}