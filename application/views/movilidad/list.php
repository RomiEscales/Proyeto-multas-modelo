<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Movilidades Registradas</h3>
            <?php
              if (strpos($permission,'Add') !== false) { 
                echo '<button class="btn btn-block btn-primary" style="width: 150px; margin-top: 10px;" data-toggle="modal" data-target="#modalexp" id="btnAgre">Agregar Movilidad</button>';
              }
            ?>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="expediente" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="10%">Acciones</th>
                <th width="5%">Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Tipo</th>
                <th>Pais</th>
                <th>Institucion Destino</th>
                <th>Fecha Desde</th>
                <th>Fecha Hasta</th>           
              </tr>
            </thead>
            <tbody>
              <?php
              	foreach($list as $c){
	               // $id=$c['id_mov'];

                    //echo '<tr id="'.$id.'" class="'.$id.'" >';
                    echo '<td>';
                    if (strpos($permission,'Edit') !== false) {
	                	echo '<i class="fa fa-fw fa-pencil" style="color: #1b00ff; style=cursor: pointer; margin-left: 15px;" ></i>';
                    }

                    if (strpos($permission,'Del') !== false) {
	                	echo '<i class="fa fa-fw fa-times-circle" style="color: #ff1100 ; style=cursor: pointer; margin-left: 15px;" title="Eliminar"></i>';
                    }
                   
	                echo '</td>';
	                echo '<td style="text-align: left">'.$c['nombre'].'</td>';
                    echo '<td style="text-align: left">'.$c['apellido'].'</td>';
                    echo '<td style="text-align: left">'.$c['dni'].'</td>';
                    echo '<td style="text-align: left">'.$c['domicilio'].'</td>';
                    echo '<td style="text-align: left">'.$c['email'].'</td>';
                    echo '<td style="text-align: left">'.$c['tipo'].'</td>';
                    echo '<td style="text-align: left">'.$c['tipo'].'</td>';
                    echo '<td style="text-align: left">'.$c['tipo'].'</td>';
                    echo '</tr>';
	               

    		        }
              ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<script>
    var idCli = 0;
    var acCli = '';

$('#btnAgre').click( function cargarVista(){
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Movilidad/cargarexp/<?php echo $permission; ?>");
    WaitingClose();
});

//$("#content").load("<?php echo base_url(); ?>index.php/Expediente/cargarexp/<?php echo $permission; ?>");


    var ed="";
    //eliminar cliente
    $(".fa-times-circle").click(function (e) {
        console.log("Esto eliminando");
        var idcli = $(this).parent('td').parent('tr').attr('id');
        console.log(idcli);
        ed=idcli;

        $.ajax({
            type: 'POST',
            data: { idcli: idcli},
            url: 'index.php/Empresa/baja_cliente', //index.php/
            success: function(data){
                //var data = jQuery.parseJSON( data );
                console.log(data);
                //$(tr).remove();
                alert("Cliente Eliminado");
                regresa();
            },
            error: function(result){
                console.log(result);
            },
            // dataType: 'json'
        });
    });

  

 // Guardar la relacion del iniciador recien cargado y de el expediente existente 
    // function relacionarexp(){
        
    //     console.log("Estoy Guardando ");
    //     var dni = $('#dniini').val();
    //     var exp = $('#numexp').val();
    //     var caratula= $('#caratula').val();
    //     var extracto = $('#extracto').val();
    //     var observacion = $('#observacion').val();
    //     var tipo = $('#tipo').val();
    //     var fecha_inicio = $('#fechaini').val();
    //     var nufolio = $('#nufolio').val();
    //     console.log(dni);
    //     console.log(exp);
    //     console.log(caratula);
    //     console.log(observacion);
    //     console.log(tipo);
    //     console.log(fecha_inicio);
    //     console.log(nufolio);                                     
    //     $.ajax({
    //       type:"POST",
    //       url: "index.php/Expediente/GuardarExp", //controlador /metodo
    //       data:{dni:dni, exp:exp, caratula:caratula, extracto:extracto, observacion:observacion, tipo:tipo, fecha_inicio:fecha_inicio, nufolio:nufolio},
    //       success: function(data){
    //         console.log("exito");
    //         regresa(); 
    //         },
          
    //       error: function(result){
    //           console.log("entro por el error");
    //           console.log(result);
    //       },
    //        dataType: 'json'
    //     });
    // }
    function regresa(){
        $('#content').empty();
        $("#content").load("<?php echo base_url(); ?>index.php/Movilidad/index/<?php echo $permission; ?>");
        WaitingClose();
    }
   

$(function(){
    /* cargo plugin DataTable (debe ir al final de los script) */
    $("#expediente").DataTable({
        "aLengthMenu": [ 10, 25, 50, 100 ],
        "autoWidth": true,
        "info": true,
        "ordering": true,
        "order": [[1, "asc"]],
        "paging": true,
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Sig.",
                "sPrevious": "Ant."
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
            },
            "lengthChange": true,
            "searching": true,
            "sPaginationType": "full_numbers",
            "columnDefs": [ {
                "targets": [ 0 ], //no busco en acciones
                "searchable": false
            },
            {
                "targets": [ 0 ], //no ordena columna 0
                "orderable": false
            } ]
    });
});
</script>

<style type="text/css">
    .contenedor{ width: 350px; float: center;}
    #camara, #foto, #imgCamera{
        width: 320px;
        min-height: 240px;
        border: 1px solid #008000;
    }
</style>

