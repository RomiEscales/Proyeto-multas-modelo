<input type="hidden" id="permission" value="<?php echo $permission;?>">
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error1" style="display: none">
          <h4><i class="icon fa fa-ban"></i> ALERTA!</h4>
          <center>Persona no registrada</center>
          <center>REGISTRAR PERSONA ANTES DE REGISTRAR MOVILIDAD</center>
      </div>
  </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <center><h3 class="box-title"><p><label> Ingrese documento de la persona a registrar en la movilidad</label></p></h3></center>
          <h4></h4>     
        </div><!-- /.box-header -->
       
        <div class="box-body">
            <div class="row">
              <div class="col-xs-4">
                <label>Tipo Documento: </label>
                <select id="tipoDoc" name="tipoDoc" class="typeahead form-control"> 
                  <option value="-1">Seleccione tipo de documento</option>
                  <option value="1">Documento Único</option>
                  <option value="2">Libreta de Enrolamiento</option>
                  <option value="3">Cédula de identidad</option>
                  <option value="4">Pasaporte</option>
                  <option value="5">Otros</option>
                </select>  
              </div>
              <div class="col-xs-4">
                <label >Documento: </label>
                <input id="dni" name="dni" class="typeahead form-control" type="text" placeholder="Ingrese Documento sin puntos" required>    
              </div>

              <div class="col-xs-2">
              <button class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px; margin-top: 15px;"  data-toggle="modal"  id="buscarPersona" onclick="buscarPersona()"> Buscar</button> 
            </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <button class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px; margin-top: 15px;"  data-toggle="modal"  id="buscarUnsj" style="display:none;"> Registrar persona UNSJ</button>
              </div>
              <div class="col-xs-4">
                <button class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px; margin-top: 15px;"  data-toggle="modal"  id="buscarExtran" style="display:none;"> Registrar persona Extranjera</button>
              </div>
            </div>        
            <br>
            <br>
        </div><!-- /.box-body -->
       
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
<style>
#buscarUnsj{display:none;}
#buscarExtran{display:none;}
</style>
<script>
  function buscarPersona(){
    var nroDocumento= $('#dni').val();
    console.log(nroDocumento);
    $.ajax({
          type: 'POST',
          data: { nroDocumento: nroDocumento},
          url: 'index.php/Movilidad/buscarPersona', //index.php/
          success: function(data){
             
              console.log(data);
              
               if(data==1){
                 // si ya existe la persona ahora voy a registrar la movilidad 
                 WaitingOpen();
                $('#content').empty();
                $("#content").load("<?php echo base_url(); ?>index.php/Movilidad/registrarMovilidad/<?php echo $permission; ?>");
                 WaitingClose();
               }
               else{
                //muestro un cartel que diga registre persona antes de registrar movilidad
                 $('#error1').fadeIn('slow');
                 $("#buscarUnsj").css("display", "block");
                 $("#buscarExtran").css("display", "block");
               }                           
          },
          error: function(result){
              console.log(result);
          }
      });
    }

</script>


