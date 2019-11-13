        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright © <?php echo date('Y'); ?> <a href="#">BrainWork</a>.</strong> Todos los derechos reservados.
        </footer>

    </body>

    <script>
        //Esto dispara un evento para que se cargue el Dash en forma automatica cuando ingreso.
        cargarView('<?php echo $grpDash; ?>', 'index', 'View');
    </script>