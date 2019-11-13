<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">INFORME PERSONA MOVILIZDAS</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-4">
                 <label style="margin-top: 10px;">Nro Fila:</label>
                <input type="text" class="form-control" id="nroFila" name="nroFila" placeholder="Ingrese Apellido" >
            </div>
            <div class="col-xs-4">
                <label style="margin-top: 10px;">Tipo de Persona:</label>
                <select type="text" class="form-control" id="tipoPer" name="tipoPer" >
                    <option>Persona Unsj</option>
                    <option>Persona Extranjero</option>
                </select> 
            </div>
            <div class="col-xs-4">
                <label style="margin-top: 10px;">Actividad Generica</label>
                <select type="text" class="form-control" id="actGenerica" name="actGenerica" placeholder="Ingrese Apellido" >
                    <option value="-1">Selecione actividad génerica</option>
                    <option value="1">Persona Unsj</option>
                    <option value="2">Persona Extranjero</option>
                </select> 
            </div>
            <div class="col-xs-4">
                <label style="margin-top: 10px;">Pais</label>
                <select type="text" class="form-control" id="actGenerica" name="actGenerica" placeholder="Ingrese Apellido" > 
                </select> 
            </div>
            <div class="col-xs-4">
                <label style="margin-top: 10px;">Fecha Desde</label>
                <input type="date" class="form-control" id="fechaDesde" name="fechaDesde"> 
            </div>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<script>
 

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

