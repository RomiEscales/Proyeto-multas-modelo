<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <center>
          <h3 class="box-title">Registro Persona de UNSJ</h3>
          </center>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-12">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Datos Personales
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <div class="row" >
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Nombre: </label>
                          <input type="text" class="form-control" id="nombrepers" name="nombrepers" placeholder="Ingrese Nombre" >
                        </div>
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Apellido:</label>
                          <input type="text" class="form-control" id="apellidopers" name="apellidopers" placeholder="Ingrese Apellido">
                        </div>
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Dni: </label>
                          <input type="text" class="form-control" id="dnipers" name="dnipers" placeholder="Ingrese Dni">
                        </div>
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Teléfono: </label>
                          <input type="text" class="form-control" id="telefonopers" name="telefonopers" placeholder="Ingrese Teléfono" >
                        </div>
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Dirección: </label>
                          <input type="text" class="form-control" id="direccionpers" name="direccionpers" placeholder="Ingrese Dirección">
                        </div>
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;">Correo electrónico: </label>
                          <input type="text" class="form-control" id="correopers" name="correopers" placeholder="Ingrese dirección de correo electrónico">
                        </div> 
                        <div class="col-xs-4">
                          <label style="margin-top: 10px;"> Tipo Persona: </label>
                          <select name="tipopers" class="form-control" id="tipopers" placeholder="Ingrese tipo de persona UNSJ">
                            <option value="" selected> Seleccione una opción</option>
                            <option value="Docente">Docente</option>
                            <option value="NoDocente">NoDocente</option>
                            <option value="Investigador">Investigador</option>
                            <option value="Alumnos">Alumno</option>                     
                          </select>                          
                        </div> 
                      </div>
                    </div>
                  </div>  
                  <div role="tabpanel" class="tab-pane">
                    <div class="form-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2 class="panel-title">Datos Académicos</h2>
                        </div>                   
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <center>
                                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Titulo/s Académico/s Obtenido/s 
                                  </a> 
                                </center>
                              </h4>
                            </div>                                     
                            <div class="panel-body">
                              <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
                                <div class="row">
                                  <div class="col-xs-4"> 
                                    <label style="margin-topcol-md-12: 30px;"> Titulo Académico: </label>
                                    <select name="tituloacademico" class="form-control" id="tituloacademico"></select>
                                  </div> 
                                  <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;"id="agregartitulotabla" >Agregar</button>
                                    <br>
                                    </br>
                                    <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;" onclick="mostrarvistatituloacademico()" >Registrar Nuevo Titulo</button>
                                  </div> 
                                </div>
                                <br>  
                                <div class="row">
                                  <div class="col-xs-10 col-xs-offset-1">
                                    <table class="table table-bordered" id="tablatituloacademico"> 
                                      <thead>
                                        <tr>                      
                                        <br>
                                          <th width="35px"></th>
                                          <th>Titulo Académico</th>
                                         
                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>  
                                  </div>
                                </div>                                                                     
                                </br>   
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </br>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <center>
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Carrera/s a la que Pertenece o Estudia (Alumno) 
                              </a> 
                            </center>
                          </h4> 
                        </div>        
                        <div class="panel-body">
                          <div class="col-sm-12 col-md-12" style="margin-bottom: 30px;">
                            <div class="row">
                              <div class="col-xs-4"> 
                                <label style="margin-topcol-md-12: 30px;"> Nombre Carrera: </label>
                                <select class="form-control" id="carrera" name="carrera" > </select>
                              </div>
                              <br>
                              <div class="col-xs-4">
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;" id="Agregarcarrera" >Agregar </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;" onclick="mostrarvistacarrera()" >Registrar Nueva Carrera</button>                                  
                              </div > 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>         
                </div><!--fin panel panel-default-->
              </div><!-- <  fin form-group> -->
            </div> <!-- /.tab-pane -->       
            <br>
            <br>
            <center>             
              <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px;" onclick="limpiar()" >Cancelar</button> 
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="font-size:15px;" onclick="guardarpersona()">Guardar</button>
            </center>  
            <br>   
          </div>
        </div>
      </div> <!-- / panel-group -->
    </div> <!-- / col-xs-12 -->
  </div> <!-- / row -->
</section>
<script>
//traer_tituloacademico(); //$ carga automaticamente el select, son funicones anonimas
//traer_carrera();

  function traer_tituloacademico(){   
    $.ajax({
            type: 'POST',
            data: {},
            url: 'Persona/traerTituloAcademico',
            success: function(data){ 
                console.log(data);// data  es un arreglo q tiene informacion de la bd
                // console.log(data[0]);
                // console.log(data[0]['nombretitulo']);
                var option = "<option value='-1'> Seleccione Titulo </option>"; //$ en una variable javascrip var option, guardo codigo html
                $("#tituloacademico").append(option);
               for (var i =0 ; i<=data.length; i++) {
                var op= data[i]['nombretitulo'];
                var option= "<option value='"+i+"'>"+op+"</option>"; // para concatenar html con javascrip
                $("#tituloacademico").append(option);
               }
            },
            error: function(data){
                  console.log(data);
            },
            dataType: 'json'
    });
  }
  /* metodo que trae todas las carreras
   * param 
   * @author: isabel castro
   */
 /* function traer_carrera(){      
    $.ajax({
            type: 'POST',
            data: {},
            url: 'Persona/traerCarrera',
            success: function(data){ 
              console.log(data);// data  es un arreglo q tiene informacion de la bd
             console.log(data[0]);*/
             // console.log(data[0]['nombretitulo']);
             /* var option = "<option value='-1'> Seleccione Carrera </option>"; //$ en una variable javascrip var option, guardo codigo html
             $("#carrera").append(option);
             for (var i =0 ; i<=data.length; i++) {
              var op= data[i]['nombrecarrera'];
              var option= "<option value='"+i+"'>"+op+"</option>"; // para concatenar html con javascrip
              $("#carrera").append(option);
             }*/
          /*  },
            error: function(data){
                  console.log(data);
                },
              dataType: 'json'
      });
  }*/


  function guardarpersona(){
      //$('#caratula > option').remove();
      var nombre = $("#nombrepers").val();
      var apellido = $("#apellidopers").val();
      var telefono = $("#telefonopers").val();
      var dni= $("#dnipers").val();
      var direccion = $("#direccionpers").val();
      var email = $("#correopers").val();
      var tipopers = $("#tipopers").val();
      console.log(nombre);
      console.log (apellido);
      console.log (telefono);
      console.log (dni); 
      console.log (email);
      console.log (direccion);
      console.log (tipopers);

     $.ajax({
            type: 'POST',
            data: {nombre:nombre,apellido:apellido,telefono:telefono,dni:dni,email:email,direccion:direccion, tipopers:tipopers },
            url: 'Persona/guardarPersona',
            success: function(data){ 
              console.log(data);
             
                  },
            error: function(data){
                  console.log(data);
                }
              /*dataType: 'json'*/
      });
  }
$("#agregartitulotabla").click(function(e){ // llamamos al id de boton agregar titulo, del cual al hacer click llama a un evento fuction e
  var tituloid = $("#tituloacademico").val(); // aca traigo el id
  var titulovalor= $("select#tituloacademico option:selected").html(); // aca traigo el valor del id, valor html
  console.log (tituloid);
  console.log (titulovalor);
  var tr = "<tr id='"+tituloid+"'>"+ 
            "<td> <i class='fa fa-ban elirow' style='color: #f39c12'; cursor: 'pointer' title='Eliminar'></i> </td>"+
            "<td>"+titulovalor+"</td>"+
            "</tr>"
            ; // clase para agregar un boton eliminar

  $("#tablatituloacademico tbody").append(tr);
  $(document).on("click",".elirow",function(){  // funcion para eliminar una celda de la tabla si la agrege mal
    var parent = $(this).closest('tr');
    $(parent).remove();
    });

}); 

  
</script>