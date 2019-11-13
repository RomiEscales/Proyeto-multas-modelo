<!-- <link href='../dist/fullcalendar.css' rel='stylesheet' />
<link href='../dist/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../node_modules/moment/moment.js'></script>
<script src='../node_modules/jquery/dist/jquery.js'></script>
<script src='../node_modules/components-jqueryui/jquery-ui.js'></script>
<script src='../dist/fullcalendar.js'></script> -->
<input type="hidden" id="permission" value="">
<script>
  $(document).ready(function() {
    /* initialize the external events
    -----------------------------------------------------------------*/
    $('#external-events .fc-event').each(function() {
      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true // maintain when user navigates (see docs on the renderEvent method)
      });
      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });
    });
    /* initialize the calendar
    -----------------------------------------------------------------*/
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
      }
    });
  });
</script>
<style>
  /*
  body {
    margin-top: 40px;
    text-align: center;
    font-size: 14px;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
  }
 #wrap {
    width: 1100px;
    margin: 0 auto;
  }*/
  #external-events {
    float: left;
    width: 150px;
    padding: 0 10px;
    border: 1px solid #ccc;
    background: #eee;
    text-align: left;
  }
  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
  }
  #external-events .fc-event {
    margin: 10px 0;
    cursor: pointer;
  }
  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
  }
  #external-events p input {
    margin: 0;
    vertical-align: middle;
  }
  /*#calendar {
    float: right;
    width: 900px;
  }*/
  /* agregue del otro claendario */
  input.prevent{border: none; padding-left: 5px; width: 100%;}
   .selmes{margin-bottom: 10px;}
</style>

<section class="content">
  <div class="col-md-10">
        <div class="box box-primary">
            <div class="box-body">
              <div class="fa fa-fw fa-print" style="color: #A4A4A4; cursor: pointer; margin-left: 15px; border-radius: 18px; " title="Imprimir"  ></div>

              <div id='calendar'></div>
            </div>
        </div>
  </div>



  <div class="col-md-2">
    <div id='external-events'>
      <h4>Nuevos Eventos</h4>
      <div class='fc-event'>Evento 1</div>
      <div class='fc-event'>Evento 2</div>
      <div class='fc-event'>Evento 3</div>
      <div class='fc-event'>Evento 4</div>
      <div class='fc-event'>Evento 5</div>
      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>Programar y borrar</label>
      </p>
    </div>
  </div>


     <div style='clear:both'></div>


</section>