
<div class="row">
	<div class="col-xs-12">
		<div class="alert alert-danger alert-dismissable" id="errorCust" style="display: none">
	        <h4><i class="icon fa fa-ban"></i> Error!</h4>
	        Revise que todos los campos esten completos
      </div>
	</div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success"  id="mostrar" style="display: none">
        <center><h4><label>DNI Encontrado!!</label> </h4></center>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success"  id="exp2" style="display: none">
        <center><h4><label>NUMERO DE EXPEDIENTE Existente!!</label> </h4></center>         
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success"  id="exp3" style="display: none">
        <center><h4><label>NUMERO DE EXPEDIENTE e INICIADOR Existente!!</label></h4></center>
         
      </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success"  id="exp4" style="display: none">
        <center><h4><label>NUMERO DE EXPEDIENTE e INICIADOR No Existente!!</label></h4></center>
         
      </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success"  id="nomos" style="display: none">
      <center><h4><label>DNI No encontrado, Ingrese datos del cliente!!</label></h4></center>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success"  id="exp1" style="display: none">
        <center><h4><label>EXPEDIENTE No encontrado!!</label> 
        </h4></center>
         
      </div>
  </div>
</div>
<!--  -->
<section class="content">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="box">
        <br>
        <div  class="panel panel-default">
          <div class="panel-heading">     
            <h4 ><label>  Nuevo Expediente</label></h4>
          </div>
        </div><!-- /.box-header -->
        <div class="panel-body">
          <div class="row" >
            <div class="col-sm-12 col-md-12">
              <div id="dniexp" style="display: block;">
                  <div class="row">
                      <div class="col-xs-4">
                          <label style="margin-top: 10px;">DNI de Iniciador<strong style="color: #dd4b39">*</strong>: </label>
                      </div>
                      <div class="col-xs-4">
                          <input type="text" class="form-control" id="dniini" name="dniini"  placeholder="Ingrese DNI del iniciador" >
                      </div>
                      <div class="col-xs-2">
                          <button class="btn btn-primary btn-sm"   style="width: 100px; margin-top: 7px; font-size:15px;" data-toggle="modal"  id="buscar"> Buscar</button>
                      </div>
                  </div>
              </div>
            </div>
          </div>
            <br>
            <div id="noap" style="display: none;">
                <div class="row">
                    <div class="col-xs-4">
                        <label style="margin-top: 10px;">Nombre y Apellido: </label>
                        
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="iniciadorno" name="iniciadorno" style="border:none;"  disabled>
                    </div>

                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="iniciadorap" name="iniciadorap" style="border:none;"  disabled>
                    </div>      
                </div>
            </div>
            <div id="cliente" style="display: none;">
                <div class="row">
                    <div class="col-xs-4">
                        <label style="margin-top: 10px;">Nombre y Apellido: </label>   
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="nombrecli" name="iniciadorno" >
                        <!-- style="border:none;"  disabled -->
                    </div>

                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="apellidocli" name="iniciadorap">
                        <!-- style="border:none;"  disabled -->
                    </div>
                    <br>
                    <div class="col-xs-4">
                        <label style="margin-top: 10px;">Dni: </label>
                        <input type="text" class="form-control" id="dnicli" name="iniciadorno" >
                        <!-- style="border:none;"  disabled -->
                    </div>
                    <br>
                    <div class="col-xs-4">
                        <label style="margin-top: 10px;">Direccion</label>
          
                        <input type="text" class="form-control" id="direccioncli" name="iniciadorno" >
                        <!-- style="border:none;"  disabled -->
                    </div>
                    <br>                
                    <center>
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-sm"   style="width: 100px; margin-top: 7px; font-size:15px;" data-toggle="modal"  id="guardarcli"> Guardar</button>
                    </div> 
                    </center>     
                </div>
            </div>                        
            <div id="mostrar1" style="display: none;">
                <div class="row">
                    <div class="col-xs-4">
                        <label style="margin-top: 10px;">Nro de Expediente <strong style="color: #dd4b39">*</strong>: </label>
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="numexp" name="numexp"  placeholder="Ingrese DNI del iniciador" >
                    </div>
                    <div class="col-xs-2">
                        <button class="btn btn-block btn-success" style="width: 100px; margin-top: 7px;" data-toggle="modal"  id="buscarexp"> Buscar</button>
                    </div>
                </div>  
            </div>
            <br>          
            <div id="nue" style="display: none;">
               <h4><label>Ingrese datos de NUEVO EXPEDIENTE:</label></h4> 
            </div>
            <div class="panel panel-default" id="nuevexp" style="display: none;">
              <div class="panel-heading">
                <h3 class="panel-title"> <label>Ingrese datos del NUEVO EXPEDIENTE:</label></h3>
              </div>
              <div class="panel-body">
                <div class="row" >
                    <div class="col-sm-12 col-md-12">
                        <div class="col-xs-3"> <label style="margin-top: 10px;">Nro de expediente: </label>
                            <input type="text" class="form-control" id="nro" name="nro"  placeholder="Ingrese Nombre" style="border:none;" disabled>
                        </div>
                        <div class="col-xs-3">
                            <label style="margin-top: 10px;">Fecha: </label>
                            <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo date_format(date_create(date("Y-m-d")), 'd-m-Y') ; ?>" style="border:none;" disabled>
                        </div>
                        <br>
                        <div class="col-xs-3"><label style="margin-top: 10px;">Caratula: </label></div>
                        <div class="col-xs-10"> 
                            
                            <textarea name="textarea" rows="10" cols="200" id="caratula" name="caratula"  placeholder="Ingrese Caratula"></textarea>
                        </div>
                        <br>
                        <div class="col-xs-10">
                            <label style="margin-top: 10px;">Extracto: </label>
                            <textarea name="textarea" rows="3" cols="90" id="extracto" name="extracto" placeholder="Ingrese Extracto"></textarea>
                        </div>
                        <br>
                        <div class="col-xs-10">
                            <label style="margin-top: 10px;">Observación: </label>
                              <textarea name="textarea" rows="3" cols="90" id="observacion" name="observacion" placeholder="Ingrese Observación"></textarea>
                        </div>
                        <div class="col-xs-4">
                            <label style="margin-top: 10px;">Tipo: </label>
                            <input type="text" class="form-control" id="tipo" name="tipo"  placeholder="Ingrese Direccion" >
                        </div>
                        <div class="col-xs-4">
                            <label style="margin-top: 10px;">Fecha de Inicio: </label>
                            <input type="date" class="form-control" id="fechaini" name="fechaini" >
                        </div>
                        <div class="col-xs-4">
                            <label style="margin-top: 10px;">Numero de folio: </label>
                            <input type="text" class="form-control" id="nufolio" name="nufolio"  placeholder="Ingrese Nro folio" >
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div   id="datos" style="display: none;">
              <div  class="panel panel-default">
              <h4> <label>Datos de Expediente:</label></h4>
              </div>
              <div class="row" >
                 <!-- <div class="col-sm-12 col-md-12">-->
                      <div class="col-xs-4"> <label style="margin-top: 10px;">Nro de expediente: </label>
                          <input type="text" class="form-control" id="nro1" name="nro1"  placeholder="Ingrese Nombre" style="border:none;" disabled>
                      </div>
                      <div class="col-xs-4">
                          <label style="margin-top: 10px;">Fecha: </label>
                          <input type="text" class="form-control" id="fecha1" name="fecha1" value="<?php echo date_format(date_create(date("Y-m-d")), 'd-m-Y') ; ?>" style="border:none;" disabled>
                      </div>
                      <br>
                      <div class="col-xs-10"> <label style="margin-top: 10px;">Caratula: </label>
                          <br>
                          <textarea name="textarea" rows="3" cols="150" id="caratula1" name="caratula1"  placeholder="Ingrese Caratula" disabled></textarea>
                      </div>
                      <br>
                      <div class="col-xs-10">
                          <label style="margin-top: 10px;">Extracto: </label>
                          <textarea  rows="3" cols="150" id="extracto1" name="extracto1" placeholder="Ingrese Extracto" disabled></textarea>
                      </div>
                      <br>
                      <div class="col-xs-10">
                          <label style="margin-top: 10px;">Observación: </label>
                            <textarea  rows="3" cols="150" id="observacion1" name="observacion1" placeholder="Ingrese Observación" disabled></textarea>
                      </div>
                      <div class="col-xs-4">
                          <label style="margin-top: 10px;">Tipo: </label>
                          <input type="text" class="form-control" id="tipo1" name="tipo1"  placeholder="Ingrese Direccion" disabled>
                      </div>
                      <div class="col-xs-4">
                          <label style="margin-top: 10px;">Fecha de Inicio: </label>
                          <input type="text" class="form-control" id="fechaini1" name="fechaini1" disabled>
                      </div>
                      <div class="col-xs-4">
                          <label style="margin-top: 10px;">Numero de folio: </label>
                          <input type="text" class="form-control" id="nufolio1" name="nufolio1"  placeholder="Ingrese Nro folio" disabled>
                      </div>
                  <!--</div>-->
              </div>  
            </div>
 
        </div><!--fin de body-->
        <br>
        <center>             
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;" onclick="limpiar()" >Cancelar</button>
        
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px;" onclick="guardarexp()">Relacionar</button>
        </center>  
        <br>      
      </div>
    </div>
  </div>
</section>
      
<script type="text/javascript">
  //Buscar 
  $("#buscar").click(function(evento){
      evento.preventDefault();
      $("#mostrar").css("display", "none");
      $("#nomos").css("display", "none");
      var dni=$("#dniini").val();
      console.log("DNI del iniciador a buscar");
      console.log(dni);
      $.ajax({
          type: 'POST',
          data: {
              dni :dni
          },
          url: 'index.php/Expediente/BuscarIniciador',
          success: function(result){
              if (result == true){
                  console.log("true");
                  //$("#mostrar").css("display", "block");
                  $('#mostrar').fadeIn('slow'); //muestra el cartel - dni encontrado
                  $("#mostrar1").css("display", "block"); //muestra el imput -ing num exp
             
              }
              else {
                  console.log("false");
                 // $("#nomos").css("display", "block"); //muestra cartel -dni no encontrado
                  $("#nomos").fadeIn('slow'); //muestra cartel -dni no encontrado
                  $("#cliente").css("display", "block"); //muestra el imput -ing datos del cliente
                 // $("#guacli").css("display", "block"); //muestra el boton para guardar datos del cliente
             
              }
          },
          error: function(result){
           
              alert("error");
          },
          dataType: 'json'
      });
  });
  //Buscar expediente 
  $("#buscarexp").click(function(evento){

      evento.preventDefault();
      //$("#mostrar").css("display", "none");
      //$("#nomos").css("display", "none");
      var num=$("#numexp").val();
      console.log("Numerode expediente a buscar");
      console.log(num);
      var dni=$("#dniini").val();
      console.log("DNI del iniciador a buscar");
      console.log(dni);
      $.ajax({
          type: 'POST',
          data: {
              num :num
          },
          url: 'index.php/Expediente/BuscarExpediente',
          success: function(result){
              if (result == true){
                  console.log("true - Nro de expediente encontrado");
                  $('#exp2').fadeIn('slow');
                  //llamamo a una funcion que busque el iniciador y el expediente  si estan relacionados
                  BuscarExpIniciador(dni, num);
              }
              else {
                  console.log("false -Nro de exp no encontrado");                  
                  $('#exp1').fadeIn('slow'); //activo cartel - Exp no encontrado
                  $("#nue").css("display", "block"); //activo cartel - Ingrese datos de exp
                  CompletarExpediente(num, dni); //Aca va aparecer los campos para cartar el exp
              }
          },
          error: function(result){
           
              alert("error");
          },
          dataType: 'json'
      });
  });
  //Guardar Iniciador 
  $("#guardarcli").click(function(evento){
      evento.preventDefault();
      var dni=$("#dnicli").val();
      var nombre=$("#nombrecli").val();
      var apellido=$("#apellidocli").val();
      var direccion=$("#direccioncli").val();
      console.log("DNI del iniciador a buscar");
      console.log(dni);
      console.log("Nombre");
      console.log(nombre);
      console.log("Apellido");
      console.log(apellido);
      console.log("Direccion");
      console.log(direccion);
      $.ajax({
          type: 'POST',
          data: {
              dni :dni,
              nombre : nombre,
              apellido : apellido,
              direccion : direccion
          },
          url: 'index.php/Expediente/GuardarIniciador',
          success: function(result){
                  console.log("true");
                  //regresa();
                  $("#dnicli").val(dni);
                  $("#mostrar1").css("display", "block"); //muestra el imput -ing num exp
   
          },
          error: function(result){
              console.log("Problemas al guardar los datos del iniciador");
              alert("error");
          },
          dataType: 'json'
      });
  });

  function BuscarExpIniciador(dni, num){

      console.log("Numerode expediente a buscar");
      console.log(num);
      console.log("DNI del iniciador a buscar");
      console.log(dni);  
      $.ajax({
          type: 'POST',
          data: {
              num :num, dni:dni
          },
          url: 'index.php/Expediente/BuscarExpIniciador',
          success: function(result){
              if (result == true){
                  console.log("true - Nro de exp e Iniciador relacionados");
                  $("#mostrar1").css("display", "block");
                  $('#exp2').fadeIn('slow'); // cartel -num de expediente encontrado
                  $('#exp3').fadeIn('slow'); // cartel -num de exp e iniciador existente
                 
              }
              else {
                  console.log("false - Nro de exp e Iniciador no relacionados");
                  $('#exp4').fadeIn('slow'); // cartel - num exp e iniciador  no encotrado
                  // Aca tendriamos q mostrar los datos d el expediente y preguntar si hay q inicializarlo y en esa funcion saco los carteles exp2 ,exp4
                  mostrarDatosExp(num, dni);
             
              }
          },
          error: function(result){
           
              alert("error");
          },
          dataType: 'json'
      });
     
  }  
  function CompletarExpediente(num, dni){

      $('#mostrar').fadeOut('slow'); //saco cartel- Dni  encontrado
      $('#exp1').fadeOut('slow'); //saco cartel- Exp no encontrado
      $("#nue").fadeOut('slow'); //sacocartel -ingrese datos de exp       
      $("#nuevexp").css("display", "block"); //cartel -ingrese datos de exp

      $.ajax({
          type: 'POST',
          data: {
              dni :dni
          },
          url: 'index.php/Expediente/BuscarDatosIniciador',
          success: function(result){
              console.log("Datos del cliente -iniciador");
              console.log(result);
              console.log(result[0]['apellido']);
              for(var i=0; i < result.length ; i++){
                  $("#nro").val(num);
                  $("#iniciadorno").val(result[i]['nombre']);
                  $("#iniciadorap").val(result[i]['apellido']);
                  $("#fecha").val();
              }    

              
          },
          error: function(result){
           
              alert("error");
          },
          dataType: 'json'
      });
     
  }
  //Funcion muestra datos de exp existente y relaciona el dni del iniciador con el expdiente 
  function mostrarDatosExp(num, dni){

      console.log("muestra datos de exp existente y relaciona el dn");
      console.log(num);
      console.log("DNI del iniciador a buscar");
      console.log(dni);  
      $.ajax({
          type: 'POST',
          data: {
              num :num, dni:dni
          },
          url: 'index.php/Expediente/MostrarDatosExp',
          success: function(result){
             // if (result == true){
                  console.log("true - Nro de exp e Iniciador no relacionados");
                  console.log(result);
                  console.log(result['cliente'][0]['nombre']);
                  
                  $('#exp2').fadeOut('slow'); //Saco el cartel- Num exp encontrado
                  $('#exp4').fadeOut('slow'); //Saco el cartel- Num exp e Iniciador No encontrado
                  //$('#dniexp').css("display", "none"); //Saco el cartel- Ingrese DNI
                  $('#mostrar').fadeOut('slow'); //Saco input donde dice ing dni
                  $('#mostrar1').fadeOut('slow'); //Saco el cartel- Ingrese num de exp
                  $("#datos").css("display", "block"); //cartel -ingrese datos de exp  
                  $('#noap').fadeIn('slow'); // cartel -num de exp e iniciador existente
                  for(var i=0; i < result['datos'].length ; i++){
                      $("#nro1").val(num);
                      $("#iniciadorno").val(result['cliente'][i]['nombre']);
                      $("#iniciadorap").val(result['cliente'][i]['apellido']);
                      $("#fecha1").val();
                      $("#caratula1").val(result['datos'][i]['caratula']);
                      $("#extracto1").val(result['datos'][i]['extracto']);
                      $("#observacion1").val(result['datos'][i]['observacion']);
                      $("#tipo1").val(result['datos'][i]['tipo']);
                      $("#fechaini1").val(result['datos'][i]['fecha_inicio']);
                      $("#nufolio1").val(result['datos'][i]['numero_folio']);
                  } 
             // }
              //else {
                //  console.log("falsee - no entre ");
             //}
          },
          error: function(result){
           
              alert("error - en mostrar datos de exp");
          },
          dataType: 'json'
      });
  }
  // Guardar nuevo exp con iniciador ya registrado
  function guardarexp(){
      
      console.log("Estoy Guardando ");
      var dni = $('#dniini').val();
      var exp = $('#numexp').val();
      var caratula= $('#caratula').val();
      var extracto = $('#extracto').val();
      var observacion = $('#observacion').val();
      var tipo = $('#tipo').val();
      var fecha_inicio = $('#fechaini').val();
      var nufolio = $('#nufolio').val();
      console.log(dni);
      console.log(exp);
      console.log(caratula);
      console.log(observacion);
      console.log(tipo);
      console.log(fecha_inicio);
      console.log(nufolio);                                     
      $.ajax({
        type:"POST",
        url: "index.php/Expediente/GuardarExp", //controlador /metodo
        data:{dni:dni, exp:exp, caratula:caratula, extracto:extracto, observacion:observacion, tipo:tipo, fecha_inicio:fecha_inicio, nufolio:nufolio},
        success: function(data){
          console.log("exito");
          regresa(); 
          },
        
        error: function(result){
            console.log("entro por el error");
            console.log(result);
        },
         dataType: 'json'
      });
  }
</script>
   


   