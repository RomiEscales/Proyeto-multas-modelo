<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo base_url(); ?>"><span> <img src="<?php echo base_url();?>assets/img/Emblema-positivo.ico ?>" style="width: 100px;"></span> </a>
            <h1>RUAVIN</h1>
            <hr style="color: #00008B;" />
            <h3>Registro Único de Acciones de vinculación Interbacional</h3>
            <h5 style="color: gray;"><label>Secretaría de posgrado y Relaciones Internacionales</label></h5>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingreso</p>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-danger alert-dismissable" id="errorLgn" style="display: none">
                            <h4><i class="icon fa fa-ban"></i> Error!</h4>
                            Revise los datos de acceso ingresados
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Usuario" id="usrName">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña" id="usrPassword">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">

                    </div><!-- /.col -->
                    <div class="col-xs-4" align ="center">
                        <center>
                            <button  class="btn btn-primary btn-block btn btn-primary" id="login">Ingresar</button>
                        </center>
                    </div><!-- /.col -->
                  
                </div>
            </div>

        </div><!-- /.login-box-body -->
        <center>
          <h5  style="color: gray;"><label>INTERENALIZACIÓN DE LA EDUCACIÓN SUPERIOR</label></h5>
        </center>
    </div><!-- /.login-box -->
</body>

<script>
//A este script despùes llevarlo a un archivo js
$('#login').click(function(){
    var hayError = false;
    if($('#usrName').val() == '')
    {
        hayError = true;
    }

    if($('#usrPassword').val() == ''){
        hayError = true;
    }

    if(hayError == true){
        $('#errorLgn').fadeIn('slow');
        return;
    }

    $('#errorLgn').fadeOut('hide');

    WaitingOpen('Validando datos');
    $.ajax({
        type: 'POST',
        data: {
            usr: $('#usrName').val(),
            pas: $('#usrPassword').val()
        },
        url: 'index.php/login/sessionStart_',
        success: function(result){
            WaitingClose();
            console.log("ok");
            if(result == 0){
                $('#errorLgn').fadeIn('slow');
            }else{
                window.location.href = 'dash';
            }
        },
        error: function(result){
            WaitingClose();
            console.log("error ajax");
            $('#errorLgn').fadeIn('slow');
        },
        dataType: 'json'
    });
});
</script>