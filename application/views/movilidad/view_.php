<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <center>
          <h3 class="box-title"></h3>
          </center>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <!-- -->
   
            <!--- -->
            <div class="col-xs-12">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <center>
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <label>Registrar Movilidad</label>
                      </a></center>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <div class="row" >
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Nombre: </label>
                          <input type="text" class="form-control" id="nombrecli" name="nombrecli" placeholder="Ingrese Nombre" disabled>
                        </div>
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Apellido:</label>
                          <input type="text" class="form-control" id="apellidocli" name="apellidocli" placeholder="Ingrese Apellido" disabled>
                        </div>
                      </div>
                      <div class="row">                  
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Pais destino: </label>
                          <select class="form-control" id="iniciadorap" name="iniciadorap"></select>
                        </div> 
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Institucion destino: </label>
                          <input type="text" class="form-control" id="iniciadorap" name="iniciadorap">
                        </div>           
                        <div class="col-xs-2">
                          <br>                          
                          <button class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px; margin-top: 15px;"  data-toggle="modal"  id="buscarexp"> Nuevo</button>
                        </div>
                      </div>

                      <br>
                      <!-- --> 
                      <div class="container mt-10">
                        <div class="col-md-12">
                          <center>
                            <div class="col-md-10">
                              <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                                            Fecha de movilidad
                                        </a>
                                    </h4>
                                  </div>
                                  <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                                    <div class="panel-body">
                                      <div class="row">
                                        <div class="col-xs-6">
                                          <label>Fecha Desde:</label>
                                          <input type="date" class="form-control" id="fechaDesde" name="fechaDesde">
                                        </div> 
                                        <div class="col-xs-6">
                                          <label>Fecha Hasta:</label>
                                          <input type="date" class="form-control" id="fechaHasta" name="fechaHasta">
                                        </div> 
                                        <div class="col-xs-6">
                                          <label>Descripcion del objetivo:</label>
                                          <textarea type="date" class="form-control" id="fechaHasta" name="fechaHasta"></textarea>
                                        </div> 
                                        <div class="col-xs-6">
                                          <label>Descripcion del resultado:</label>
                                          <textarea type="date" class="form-control" id="fechaHasta" name="fechaHasta"></textarea>
                                        </div> 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo2">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                        Patrocinador
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                  <div class="panel-body">
                                    <div class="row">
                                      <div class="col-xs-4">
                                        <label> Seleccione Patrocinador </label>
                                        <select  class="form-control" id="zonaId" placeholder="Tipo de persona">
                                            <option value="" disabled selected>Seleccione nombre</option>
                                            <option value="1">Persona unsj</option>
                                            <option value="2">Persona Extranjero</option>
                                        </select>
                                      </div>
                                      <br>
                                      <div class="col-xs-2">
                                        <button class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px;" data-toggle="modal"  id="buscarexp"> Nuevo</button>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-4">
                                        <button class="btn btn-default" style="width: 300px; margin-top: 10px;"  id="buscarexp" ><i class="glyphicon glyphicon-plus"></i> Agregar patrocinador</button>
                                      </div>
                                    </div>
                                    <br>
                                    <table id="tbl_ingresos" class="table table-bordered table-hover" style="text-align: center">
                                      <thead>
                                        <tr>
                                          <th width="20%" style="text-align: center"></th>
                                          <th style="text-align: center">Nombre de los patrocinadores</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--</div>-->
                          </center>
                        </div>
                      </div>
                      <!-- -->
                      <div class="col-xs-4">
                        <label style="margin-top: 10px;">Actividad Generica </label>
                        <select  class="form-control" id="zonaId" >
                        </select>
                      </div>
                      <div class="col-xs-4">
                        <label style="margin-top: 10px;">Titulo de la actividad </label>
                        <select  class="form-control" id="zonaId" >
                        </select>
                      </div>
                      <div class="col-xs-4">
                        <br>                          
                        <button class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px; margin-top: 15px;"  data-toggle="modal"  id="buscarexp"> Nuevo</button>
                      </div>
                      <br>
                      <br>
                      <center>
                      <div class="row">
                        <br>
                        <br>

                        <div class="col-md-10">   
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;" onclick="limpiar()" >Cancelar</button>
                        
                          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px;" onclick="guardarexp()">Guardar</button> 
                        </div>
                      </div> 
                      </center>
                      
                      


                    </div>
                  </div>
                 
                </div>
              </div>
            </div> <!-- / panel-group -->
          </div> <!-- / col-xs-12 -->
        </div> <!-- / row -->
        <!-- -->
      </div> <!-- /.box-body -->
    </div> <!-- / col-xs-12 -->
  </div> <!-- / row -->
</section>

<script>
  
// Datepicker
  $("#fechainiexp").datepicker({
      firstDay: 1
  }).datepicker();

   $("#fecha_pago_ing").datepicker({
      firstDay: 1
  }).datepicker();


//json-genarator.com for mock data
$.get("https://next.json-generator.com/api/json/get/V1cGoKmDV", function(data){
    console.log(data);
    // use a data source with 'id' and 'name' keys
    $("#query").typeahead({ source:data });
},'json');






    // use a data source with 'id' and 'name' keys
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

