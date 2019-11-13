<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago extends CI_Controller {

    public function __construct(){
        parent::__construct();
       $this->load->model('Pagos');
    }

    public function index($permission){
      $data['permission'] = $permission;      // envia permisos
      $this->load->view('pagos/view_',$data);
    }

    public function getCliente(){
      $response = $this->Pagos->getClientes();
      echo json_encode($response);
    }

    public function getExpPorId(){
      $response = $this->Pagos->getExpPorIds($this->input->post('id_cli'));
      echo json_encode($response);
    }

    public function getExtracto(){
      $response = $this->Pagos->getExtractos($this->input->post('id_exp'));
      echo json_encode($response);
    }

    public function getEgresolist(){
      $response = $this->Pagos->getEgresoslist($this->input->post());
      echo json_encode($response);
    }

    public function getIngresolist(){
      $response = $this->Pagos->getIngresoslist($this->input->post());
      echo json_encode($response);
    }

    public function setEgreso(){

      $id_exp   = $this->input->post('id_exp');
      $id_clien = $this->input->post('id_client');
      $monto    = $this->input->post('monto');
      $concepto = $this->input->post('concepto');
      $tipo     = $this->input->post('tipo');
      $fecha    = $this->input->post('fecha_pago');
      $fecha = explode('-', $fecha);

      $indice = $this->Pagos->getIdClienteExpediente($id_exp,$id_clien);

      $data = array('monto' => $monto,
                     'fecha'=> $fecha[2].'-'.$fecha[1].'-'.$fecha[0],
                     'concepto'=>$concepto,
                     'tipo'=> $tipo,
                     'id_cliente_expediente'=>$indice
                     );

      $response = $this->Pagos->setEgresos($data);
      echo json_encode($response);
    }

    public function setPlan(){
       $data = $this->input->post();
       //dump_exit($data);
       echo json_encode('true');
    }
}