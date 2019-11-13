<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pagos extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  // Trae clientes para el autocompletar
  function getClientes(){

        $i=0;
        $this->db->select('cliente.id_cliente,
                            cliente.nombre,
                            cliente.apellido');
        $this->db->from('cliente');
        $query = $this->db->get();

        foreach ($query->result() as $row){

            $clientes[$i]['value'] = $row->id_cliente;
            $clientes[$i]['label'] = $row->apellido . ', ' . $row->nombre;
            $i++;
        }
        return $clientes;
  }

  //Trae expdientes segun Id de Expediente
  function getExpPorIds($id){

    $this->db->select('expediente.*');
    $this->db->from('expediente');
    $this->db->join('cliente_expediente', 'cliente_expediente.id_expediente = expediente.id_expediente');
    $this->db->join('cliente','cliente.id_cliente = cliente_expediente.id_cliente');
    $this->db->where('cliente.id_cliente',$id);
    $query = $this->db->get();

    if ($query->num_rows()!=0)
    {
      return $query->result_array();
    }
    else{
      return array();
    }
  }

  // Trae extracto de expediente por id de expediente
  function getExtractos($id_exp){

    $this->db->select('expediente.extracto');
    $this->db->from('expediente');

    $this->db->where('expediente.id_expediente',$id_exp);
    $query = $this->db->get();

    if ($query->num_rows()!=0)
    {
      return $query->row();
    }
    else{
      return array();
    }
  }

  //Lista de egresos por cliente y por expediente
  function getEgresoslist($data){

    $id_cliente = $data['id_cli'];
    $id_expediente = $data['id_exp'];

    $this->db->select('ingreso_egreso.id_ingreso_egreso,
                      ingreso_egreso.monto,
                      ingreso_egreso.fecha,
                      ingreso_egreso.concepto,
                      ingreso_egreso.tipo,
                      cliente_expediente.id_cliente_expediente,
                      expediente.caratula,
                      expediente.fecha AS fecha_exp');
    $this->db->from('cliente_expediente');
    $this->db->join('expediente', 'cliente_expediente.id_expediente = expediente.id_expediente');
    $this->db->join('ingreso_egreso', 'cliente_expediente.id_cliente_expediente = ingreso_egreso.id_cliente_expediente');
    $this->db->where('cliente_expediente.id_cliente', $id_cliente);
    $this->db->where('expediente.id_expediente', $id_expediente);
    $this->db->where('ingreso_egreso.tipo', 'E');

    $query = $this->db->get();

    if ($query->num_rows()!=0)
    {
      return $query->result_array();
    }
    else{
      return array();
    }
  }

  //Lista de ingresos por cliente y por expediente
  function getIngresoslist($data){
    $id_cliente = $data['id_cli'];
    $id_expediente = $data['id_exp'];

    $this->db->select('ingreso_egreso.id_ingreso_egreso,
                      ingreso_egreso.monto,
                      ingreso_egreso.fecha,
                      ingreso_egreso.concepto,
                      ingreso_egreso.tipo,
                      cliente_expediente.id_cliente_expediente,
                      expediente.caratula,
                      expediente.fecha AS fecha_exp');
    $this->db->from('cliente_expediente');
    $this->db->join('expediente', 'cliente_expediente.id_expediente = expediente.id_expediente');
    $this->db->join('ingreso_egreso', 'cliente_expediente.id_cliente_expediente = ingreso_egreso.id_cliente_expediente');
    $this->db->where('cliente_expediente.id_cliente', $id_cliente);
    $this->db->where('expediente.id_expediente', $id_expediente);
    $this->db->where('ingreso_egreso.tipo', 'I');

    $query = $this->db->get();

    if ($query->num_rows()!=0)
    {
      return $query->result_array();
    }
    else{
      return array();
    }
  }

  // Trae id de relacion cliente - expediente
  function getIdClienteExpediente($id_exp,$id_clien){

    $this->db->select('cliente_expediente.id_cliente_expediente');
    $this->db->from('cliente_expediente');
    $this->db->where('cliente_expediente.id_cliente',$id_clien);
    $this->db->where('cliente_expediente.id_expediente',$id_exp);
    $query = $this->db->get();

    if ($query->num_rows()!=0)
    {
      return $query->row('id_cliente_expediente');
    }
    else{
      return 0;
    }
  }

  // Guarda egresos en BD
  function setEgresos($data){
    $query = $this->db->insert('ingreso_egreso', $data);
    return $query;
  }
}