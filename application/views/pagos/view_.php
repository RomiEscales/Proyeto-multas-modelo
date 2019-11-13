<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Pagos</h3>
        </div><!-- /.box-header -->
        <div class="box-body">

          <div role="tabpanel" class="tab-pane">
            <div class="form-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title  fa fa-globe">Detalle</h2>
                </div>
                <div class="panel-body">

                    <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
                      <div class="row">
                        <div class="col-xs-8"><label>Cliente: </label>
                          <br>
                          <input id="cliente" class="form-control" value="">
                          <input id="id_cliente" type="hidden">
                        </div>
                        <br>
                        <div class="col-xs-2">
                         <!--  <button type="button" class="btn btn-success btn-xs" id="addempresa" data-toggle="modal" data-target="#modalOrder"><i class="fa fa-plus"> Cliente</i></button> -->
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-8"><label>Expediente:</label>
                          <br>
                          <select  id="caratula" name="caratula" class="form-control" value="" ></select>
                        </div>
                        <br>
                      </div>

                      <div class="row">
                        <div class="col-xs-8"><label>Extracto:</label>
                          <br>
                           <textarea id="extracto" class="form-control" value=""></textarea>
                        </div>
                        <br>
                      </div>

                    </div>
                    <br><br>
                 </div>
              </div><!--fin panel panel-default-->
            </div><!-- <  fin form-group> -->
          </div> <!-- /.tab-pane -->
        </div> <!-- /.box-body -->
      </div>
    </div> <!-- / col-xs-12 -->
  </div> <!-- / row -->

  <div class="row">
    <div class="col-xs-12">

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Egresos
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <?php
              if (strpos($permission,'Add') !== false) {
                echo '<button class="btn btn-block btn-success btn-xs btn_nuevo" style="width: 50px; margin: 10px 0px;" data-toggle="modal" data-target="#nuevo_egr" disabled>Agregar</button>';
              }
              ?>
              <table id="tbl_egresos" class="table table-bordered table-hover" style="text-align: center">
                <thead>
                  <tr>
                    <th width="20%" style="text-align: center">Acciones</th>
                    <th style="text-align: center">Concepto</th>
                    <th style="text-align: center">Monto</th>
                    <th style="text-align: center">Fecha</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Ingresos
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <?php
              if (strpos($permission,'Add') !== false) {
                echo '<button class="btn btn-block btn-success btn-xs btn_nuevo" style="width: 50px; margin: 10px 0px;" data-toggle="modal" data-target="#nuevo_ing" disabled>Agregar</button>';
              }
              ?>
              <table id="tbl_ingresos" class="table table-bordered table-hover" style="text-align: center">
                <thead>
                  <tr>
                    <th width="20%" style="text-align: center">Acciones</th>
                    <th style="text-align: center">Concepto</th>
                    <th style="text-align: center">Monto</th>
                    <th style="text-align: center">Fecha</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Plan de Pago
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">

              <?php
              if (strpos($permission,'Add') !== false) {
                echo '<button class="btn btn-block btn-success btn-xs btn_nuevo" style="width: 50px; margin: 10px 0px;" data-toggle="modal" data-target="#plan" onclick="limpiarCampos()" disabled>Nuevo</button>';
              }
              ?>

              <table id="tbl_planes" class="table table-bordered table-hover" style="text-align: center">
                <thead>
                  <tr>
                    <th width="20%" style="text-align: center">Acciones</th>
                    <th style="text-align: center">Plan Nº</th>
                    <th style="text-align: center">Cuota</th>
                    <th style="text-align: center">Monto</th>
                    <th style="text-align: center">Fecha</th>
                    <th style="text-align: center">Estado</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- / panel-group -->

    </div> <!-- / col-xs-12 -->
  </div> <!-- / row -->
</section>

<script>

// Datepicker
  $("#fecha_pago").datepicker({
      firstDay: 1
  }).datepicker();

   $("#fecha_pago_ing").datepicker({
      firstDay: 1
  }).datepicker();

// Trae Clientes y autocompleta campo
  $(function() {
      $("#cliente").autocomplete({
          source:function(request, response) {
                    $.ajax( {
                      url: "Pago/getCliente",
                      dataType: "json",
                      success: function(data) {
                        response(data);
                      }
                    });
          },
          //delay: 100,
          minLength: 2,
          focus: function(event, ui) {
              // prevent autocomplete from updating the textbox
              event.preventDefault();
              // manually update the textbox
              $(this).val(ui.item.label);
          },
          select: function(event, ui) {
              // prevent autocomplete from updating the textbox
              event.preventDefault();
              // manually update the textbox and hidden field
              $(this).val(ui.item.label);
              $("#id_cliente").val(ui.item.value);
              getExpPorId();
          },

      });
  });

// Trae expedientes con id de cliente y llena select
  function getExpPorId(){
      $('#caratula > option').remove();
      id = $("#id_cliente").val();

      $.ajax({
            type: 'POST',
            data: {id_cli : id },
            url: 'Pago/getExpPorId',
            success: function(data){
              //alert(data[0]['caratula']);
                    var opcion  = "<option value='-1'>Seleccione un Expediente...</option>" ;
                    $('#caratula').append(opcion);

                    for(var i=0; i < data.length ; i++){
                        //var nombre = data[i]['codigo'];
                        var opcion  = "<option value='"+data[i]['id_expediente']+"'>" +data[i]['caratula']+ "</option>" ;
                        $('#caratula').append(opcion);
                    }
                  },
            error: function(result){
                  console.log(result);
                },
               dataType: 'json'
      });
  }

// Cuando cambia la caratula y trae extracto
  $('#caratula').change(function(event) {
      var id_exp = $(this).val();
      //var id_cli = $('#id_cliente').val();
      $.ajax({
            type: 'POST',
            data: {id_exp : id_exp},
            url: 'Pago/getExtracto',
            success: function(data){
                    $('#extracto').html(data.extracto);
                    fillEgreso();     //llena tabla egresos
                    fillIngreso();
                    validarModal();   // habilita botones agregar

                  },
            error: function(result){
                  console.log(result);
                },
            dataType: 'json'
      });
  });

// Activa boton agregar en modal
  function validarModal () {

        $('.btn_nuevo').attr('disabled', false);
  }

// Guarda Egreso
  function setEgreso(){

    var id_exp = $("#caratula").val();
    var id_client = $("#id_cliente").val();
    var concepto = $("#concepto").val();
    var monto = $("#monto").val();
    var fecha_pago = $("#fecha_pago").val();

    var hayError = false;
    if($('#concepto').val() == '')
    {
      hayError = true;
    }
    if($('#monto').val() == '')
    {
      hayError = true;
    }
    if($('#fecha_pago').val() == '')
    {
      hayError = true;
    }

    if(hayError == true){
      $('#error').fadeIn('slow');
      return;
    }else{
      $('#nuevo_egr').modal('hide');
      limpiarModalEgreso();
    }

    $('#error').fadeOut('slow');

    WaitingOpen('Guardando cambios');

    $.ajax({
            type: 'POST',
            data: { id_exp:id_exp,
                    id_client:id_client,
                    monto:monto,
                    concepto:concepto,
                    fecha_pago:fecha_pago,
                    tipo:'E'     // Egreso
                  },
            url: 'Pago/setEgreso',
            success: function(data){
                      WaitingClose();
                      fillEgreso();
                      console.log('essitos');

                  },
            error: function(result){
                  console.log(result);
                },
               dataType: 'json'
      });
  }

// Limpia modal Egreso
  function limpiarModalEgreso(){
    $('#concepto').val("");
    $('#monto').val("");
    $('#fecha_pago').val("");
    $('#error').fadeOut('slow');
  }

// Trae listado de egresos
  function fillEgreso(){
    var id_cli = $("#id_cliente").val();
    var id_exp = $("#caratula").val();

    $.ajax({
            type: 'POST',
            data: {id_exp : id_exp,
                   id_cli : id_cli},
            url: 'Pago/getEgresolist',
            success: function(data){

                    tbl_egreso(data);
                  },
            error: function(result){
                  console.log(result);
                },
            dataType: 'json'
      });
  }

  function tbl_egreso(data){

    var rows = "";
    $.each(data, function(index, elemento) {
      rows += '<tr>'+'<td style= "width:10%;">'+'<i class="fa fa-fw fa-pencil text-light-blue" cursor: pointer; margin-left: 20px;">'+'</i>'+
        '<i class="fa fa-fw fa-times-circle text-light-blue" cursor: pointer; margin-left: 20px;">'+'</i>'+'</td>';
      //rows += '<td class="tareas">'+ elemento['cliente'] +' </td>';
      rows += '<td class="tareas">'+ elemento['concepto'] +' </td>';
      rows += '<td class="tareas">'+ elemento['monto'] +' </td>';
      rows += '<td class="tareas">'+ elemento['fecha'] +' </td>';
      rows += '<tr>';
      '</tr>';
    });
    $('#tbl_egresos > tbody').html(rows);
  }

// Guarda Ingreso
  function setIngreso(){

    var id_exp = $("#caratula").val();
    var id_client = $("#id_cliente").val();
    var concepto_ing = $("#concepto_ing").val();
    var monto_ing = $("#monto_ing").val();
    var fecha_pago_ing = $("#fecha_pago_ing").val();

    var hayError = false;
    if($('#concepto_ing').val() == '')
    {
      hayError = true;
    }
    if($('#monto_ing').val() == '')
    {
      hayError = true;
    }
    if($('#fecha_pago_ing').val() == '')
    {
      hayError = true;
    }

    if(hayError == true){
      $('#erroringreso').fadeIn('slow');
      return;
    }else{
      $('#nuevo_ing').modal('hide');
      limpiarModalIngreso();
    }

    $('#erroringreso').fadeOut('slow');

    WaitingOpen('Guardando cambios');

    $.ajax({
            type: 'POST',
            data: { id_exp:id_exp,
                    id_client:id_client,
                    monto:monto_ing,
                    concepto:concepto_ing,
                    fecha_pago:fecha_pago_ing,
                    tipo:'I'     // Ingreso
                  },
            url: 'Pago/setEgreso',
            success: function(data){
                      WaitingClose();
                      fillIngreso();

            console.log('essitos');

                  },
            error: function(result){
                  console.log(result);
                },
               dataType: 'json'
      });
  }

// Limpia modal Ingreso
  function limpiarModalIngreso(){
    $('#concepto_ing').val("");
    $('#monto_ing').val("");
    $('#fecha_pago_ing').val("");
    $('#erroringreso').fadeOut('slow');
  }

// Trae listado de ingresos
  function fillIngreso(){
    var id_cli = $("#id_cliente").val();
    var id_exp = $("#caratula").val();

    $.ajax({
            type: 'POST',
            data: {id_exp : id_exp,
                   id_cli : id_cli},
            url: 'Pago/getIngresolist',
            success: function(data){

                    tbl_ingreso(data);
                  },
            error: function(result){
                  console.log(result);
                },
            dataType: 'json'
      });
  }

  function tbl_ingreso(data){

    var rows = "";
    $.each(data, function(index, elemento) {
      rows += '<tr>'+'<td style= "width:10%;">'+'<i class="fa fa-fw fa-pencil text-light-blue" cursor: pointer; margin-left: 20px;">'+'</i>'+
        '<i class="fa fa-fw fa-times-circle text-light-blue" cursor: pointer; margin-left: 20px;">'+'</i>'+'</td>';
      //rows += '<td class="tareas">'+ elemento['cliente'] +' </td>';
      rows += '<td class="tareas">'+ elemento['concepto'] +' </td>';
      rows += '<td class="tareas">'+ elemento['monto'] +' </td>';
      rows += '<td class="tareas">'+ elemento['fecha'] +' </td>';
      rows += '<tr>';
      '</tr>';
    });
    $('#tbl_ingresos > tbody').html(rows);
  }

// Calcular plan de pagos
  function calcular(){

    var monto = parseFloat($('#monto_plan').val());
    var interes = parseFloat($('#interes').val());
    var cuotas = parseInt($('#cuotas').val());
    var montoInt = 0;
    var montoCuota = 0;
    var montoTot = 0;

    montoInt = (monto*(interes/100)); //monto del interes
    montoTot = monto + montoInt;
    montoCuota = (montoTot)/cuotas;

    $('#calculado').html(cuotas + ' cuotas de $ ' + montoCuota);
    $('#monto_final').val(montoTot);
    $('#interes_final').val(montoInt);
    $('#cant_cuotas_final').val(cuotas);
    $('#cuotas_final').val(montoCuota);
    $('#frecuencia').val(30);
    $("#fecha_plan").datepicker({
        dateFormat: 'dd/mm/yy',
        firstDay: 1
    }).datepicker("setDate", new Date());
  }

  function limpiarCampos(){

    $('#monto_plan').val('');
    $('#interes').val('');
    $('#cuotas').val('');
    $('#calculado').html('');
    $('#monto_final').val('');
    $('#interes_final').val('');
    $('#cant_cuotas_final').val('');
    $('#cuotas_final').val('');
    $('#fecha_plan').val('');
    $('#frecuencia').val('');
  }

// Guarda plan de pago
  function setPlan(){
    // revisar todo esta sin terminar !!

    var id_exp = $("#caratula").val();
    var id_client = $("#id_cliente").val();
    //var concepto_ing = $("#concepto_ing").val();
    //var monto_ing = $("#monto_ing").val();
    //var fecha_pago_ing = $("#fecha_pago_ing").val();

    var hayError = false;
    if($('#monto_final').val() == '')
    {
      hayError = true;
    }
    if($('#interes_final').val() == '')
    {
      hayError = true;
    }
    if($('#cant_cuotas_final').val() == '')
    {
      hayError = true;
    }
    if($('#cuotas_final').val() == '')
    {
      hayError = true;
    }
    if($('#fecha_plan').val() == '')
    {
      hayError = true;
    }
    if($('#frecuencia').val() == '')
    {
      hayError = true;
    }

    if(hayError == true){
      $('#errorplan').fadeIn('slow');
      return;
    }else{

      // esto va en sucess limpia mpodal si no imprime

      //limpiarModalIngreso();
    }

    $('#errorplan').fadeOut('slow');
    WaitingOpen('Guardando cambios');

    var arraySerialized = $('#form_plan').serializeArray();

    $.ajax({
            type: 'POST',
            data: arraySerialized,
            url: 'Pago/setPlan',
            success: function(data){

                      WaitingClose();
                      if (!confirm("Desea imprimir un comprobante?")){
                        $('#plan').modal('hide'); // no imprime
                      }else{
                        $('#plan').modal('hide');
                        //imprime
                        $("#planPago").printArea();
                      }
                      console.log('essitos');
                    },

            error: function(result){
                      WaitingClose();

                      console.log(result);
                },

            dataType: 'json'
    });
  }

</script>

<!-- Modal Egreso -->
<div class="modal fade" id="nuevo_egr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="row">
        <div class="col-xs-12">
          <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                Revise que todos los campos esten completos
            </div>
        </div>
      </div>
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Nuevo Egreso</h4>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
            <div class="row">
              <div class="col-xs-8"><label>Concepto: </label>
                <br>
                <input id="concepto" class="form-control" value="">
              </div>
              <div class="col-xs-8"><label>Monto: </label>
                <br>
                <input id="monto" class="form-control" value="">

              </div>
              <div class="col-xs-8"><label>Fecha: </label>
                <br>
                <input id="fecha_pago" class="form-control" value="">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarModalEgreso()">Cancelar</button>
        <button type="button" class="btn btn-primary"  onclick="setEgreso()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ingreso -->
<div class="modal fade" id="nuevo_ing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="row">
        <div class="col-xs-12">
          <div class="alert alert-danger alert-dismissable" id="errorplan" style="display: none">
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                Revise que todos los campos esten completos
            </div>
        </div>
      </div>
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Nuevo Ingreso</h4>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
            <div class="row">
              <div class="col-xs-8"><label>Concepto: </label>
                <br>
                <input id="concepto_ing" class="form-control" value="">
              </div>
              <div class="col-xs-8"><label>Monto: </label>
                <br>
                <input id="monto_ing" class="form-control" value="">

              </div>
              <div class="col-xs-8"><label>Fecha: </label>
                <br>
                <input id="fecha_pago_ing" class="form-control" value="">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarModalIngreso()">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="setIngreso()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Plan -->
<div class="modal fade" id="plan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="row">
        <div class="col-xs-12">
          <div class="alert alert-danger alert-dismissable" id="erroringreso" style="display: none">
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                Revise que todos los campos esten completos
            </div>
        </div>
      </div>
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Calcular Plan de Pago</h4>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
            <div class="row">
              <div class="col-xs-8"><label>Importe: </label>
                <br>
                <input id="monto_plan" class="form-control" value="">
              </div>
              <div class="col-xs-8"><label>Interes (%): </label>
                <br>
                <input id="interes" class="form-control" value="">

              </div>
              <div class="col-xs-8"><label>Cant. Cuotas: </label>
                <br>
                <input id="cuotas" class="form-control" value="">
                <br><br>
                <button type="button" class="btn btn btn-primary pull-right" onclick="calcular()">Calcular</button>
              </div>
            </div>
        </div>
        <!-- <div id="suma" class="row">
            <div class="col-lg-6">
              <h4 class="col-md-8 pull-right" id="calculado"></h4><br>
            </div>
            <div class="clearfix"></div>
        </div> -->
        <div id="planPago">
          <h4 class="" id="myModalLabel">Detalle Plan de Pago</h4>
          <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
            <form id="form_plan" role="form" action="" accept-charset="utf-8">
              <div class="row">
                <div class="col-xs-8"><label for="monto_final">Monto Total: </label>
                  <br>
                  <input type="text" name="monto_final" id="monto_final" class="form-control">
                </div>
                <div class="col-xs-8"><label for="interes_final">Interes: </label>
                  <br>
                  <input type="text" name="interes_final" id="interes_final" class="form-control">

                </div>
                <div class="col-xs-8"><label for="cant_cuotas_final">Cant. Cuotas: </label>
                  <br>
                  <input type="text" name="cant_cuotas_final" id="cant_cuotas_final" class="form-control">
                </div>
                <div class="col-xs-8"><label for="cuotas_final">Imp. Cuotas: </label>
                  <br>
                  <input type="text" name="cuotas_final" id="cuotas_final" class="form-control">
                </div>
                <div class="col-xs-8"><label for="fecha_plan">Fecha 1º pago: </label>
                  <br>
                  <input type="text" name="fecha_plan" id="fecha_plan" class="form-control">
                </div>
                <div class="col-xs-8"><label for="frecuencia">Cada (dias): </label>
                  <br>
                  <input type="text" name="frecuencia" id="frecuencia" class="form-control">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" >Cancelar</button>
        <button type="button" class="btn btn-success" onclick="setPlan()">Guardar</button>
      </div>
    </div>
  </div>
</div>