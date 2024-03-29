<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>RUAVIN</title>

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/Emblema-positivo.ico" type="image/x-icon">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- AdminLTE 2.1.2 - Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">
    <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/skin-green-light.min.css">-->
    <!-- Font Awesome 4.7.0 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <!-- Ionicons 2.0.1 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
    <!-- Jquery UI 1.12.1 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.min.css">
    <!-- DataTables 1.10.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugin/datatables/dataTables.bootstrap.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/plugin/daterangepicker/daterangepicker.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!--<script src="<?php echo base_url();?>assets/js/demo.js"></script>-->
    <!--<script src="<?php echo base_url();?>assets/js/notify.js"></script>-->

    <!-- funciones comunes al sistema -->
    <script src="<?php echo base_url();?>assets/js/propios.js"></script>
    <!-- DataTables 1.10.7 -->
    <script src="<?php echo base_url();?>assets/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugin/datatables/dataTables.bootstrap.min.js"></script>

    <!-- Jquery UI 1.12.1 -->
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <!-- ChartJS 2.5.0 -->
    <script src="<?php echo base_url();?>assets/plugin/chartjs/Chart.min.js"></script>



    <!-- iCheck - ->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/plugin/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/css/square/green.css">-->
    <!-- iCheck - ->
    <script src="<?php  echo base_url();?>assets/plugin/iCheck/icheck.min.js"></script>-->

    <!-- fullcalendar -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/plugin/fullcalendar/fullcalendar.print.css" media="print">

    <!-- Bootstrap Color Picker - ->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/plugin/colorpicker/bootstrap-colorpicker.min.css">
    -->

    <!-- FastClick - ->
    <script src="<?php  echo base_url();?>assets/plugin/fastclick/fastclick.min.js"></script>

    <!-- SlimScroll - ->
    <script src="<?php  echo base_url();?>assets/plugin/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick - ->
    <script src="<?php  echo base_url();?>assets/plugin/fastclick/fastclick.min.js"></script>

    <!-- Select2 - ->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/plugin/select2/select2.css">
    <!-- Select2 - ->
    <script src="<?php  echo base_url();?>assets/plugin/select2/select2.js"></script>

    <!--
    <script src="<?php  echo base_url();?>assets/plugin/input-mask/jquery.inputmask.js"></script>
    <script src="<?php  echo base_url();?>assets/plugin/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php  echo base_url();?>assets/plugin/input-mask/jquery.inputmask.extensions.js"></script>
    -->
    <!--<link rel="stylesheet" href="<?php  echo base_url();?>code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">-->

    <script src="<?php  echo base_url();?>assets/plugin/fullcalendar/moment.min.js"></script>
    <script src="<?php  echo base_url();?>assets/plugin/fullcalendar/fullcalendar.min.js"></script>
    <!-- Daterange picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugin/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.PrintArea.js"></script>

    <script src="bootstrap3-typeahead.js"></script>


    <!-- <script src="<?php  //echo base_url();?>ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="<?php  //echo base_url();?>ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script>- ->

    <!-- bootstrap color picker - ->
    <script src="<?php  echo base_url();?>assets/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>

-->
</head>


<!-- indicador de carga -->
<div class="waiting" id="waiting">
    <div style="top: 45%; left: 45%; position: fixed;">
        <!--<div class="progress progress active">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>-->
        <div class="box box-success" style="width: 200px; text-align: center;">
            <br>
            <br>
            <br>
            <div class="box-header">
                <h3 class="box-title" id="waitingText">Cargando...</h3>
            </div>
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
        </div>
    </div>
</div>

<style>
.waiting {
    background: none;
    display: block;
    position: fixed;
    z-index: 50000;
    overflow: auto;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    display: none;
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000); /* AA, RR, GG, BB */
    /*CSS3*/
    background:rgba(0,0,0,0.5); /*0.5 De Transparencia*/
}
</style>

<script>
/* Inicialización en español para la extensión 'UI date picker' para jQuery. */
/* Traducido por Vester (xvester@gmail.com). */
(function( factory ) {
    if ( typeof define === "function" && define.amd ) {
        // AMD. Register as an anonymous module.
        define([ "../widgets/datepicker" ], factory );
    } else {
        // Browser globals
        factory( jQuery.datepicker );
    }
}(function( datepicker ) {
    datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'],
        monthNamesShort: ['ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic'],
        dayNames: ['domingo','lunes','martes','miércoles','jueves','viernes','sábado'],
        dayNamesShort: ['dom','lun','mar','mié','jue','vie','sáb'],
        dayNamesMin: ['D','L','M','X','J','V','S'],
        weekHeader: 'Sm',
        dateFormat: 'dd-mm-yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    datepicker.setDefaults(datepicker.regional['es']);
    return datepicker.regional['es'];
}));
</script>