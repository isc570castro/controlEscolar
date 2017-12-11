<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Alumnos
    <small>Registrar alumno</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="?c=suarios">Alumnos</a></li>
    <li class="active">Registrar alumno</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 <div class="box box-body">
  <div class="box-header with-border">
    <h3 class="box-title">Ingresa los datos del alumno</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <form action="?c=Curso&a=Guardar" method="POST">
        <div class="col-md-12">
          <div class="form-group">
           <label hidden for="txtCodigoUsuario">ID Alumno</label>
           <input name="idAlumno" type="hidden" class="form-control" id="txtCodigoUsuario" value="0">
         </div><!-- /.form-group -->
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
             <label for="txtNombre">Materia</label>
             <select name="claveMateria" type="text" class="form-control" id="selectMateria">
              <option value="A">Seleccione la materia del curso</option>
              <?php foreach($modelMateria->Listar() as $materia): ?>
                <option value="<?php echo $materia->claveMateria?>"><?php echo $materia->materia ?></option>
              <?php endforeach;?>
            </select>
          </div><!-- /.form-group -->
        </div>
        <div class="col-md-6">
         <div class="form-group">
           <label for="txtEmpresa">Grupo</label>
           <select name="grupo" type="text" class="form-control" id="selectGrupo" placeholder="Ingrese grupo al que se asignará el alumno">
            <option value="A">Seleccione el grupo al que se asignará el alumno</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
        </div><!-- /.form-group -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
         <label for="txtNombre">Docente</label>
         <select name="idDocente" type="text" class="form-control select2" id="selectMateria">
          <option value="A">Seleccione el docente que impartira el curso</option>
          <?php foreach($modelDocente->Listar() as $docente): ?>
            <option value="<?php echo $docente->idDocente?>"><?php echo $docente->nombre." ".$docente->primerApellido." ".$docente->segundoApellido; ?></option>
          <?php endforeach;?>
        </select>
      </div><!-- /.form-group -->
    </div>
    <div class="col-md-6">
     <div class="form-group">
       <label for="txtEmpresa">Periodo</label>
       <select name="periodo" type="text" class="form-control" id="txtApellidos" placeholder="Ingrese el periodo en el que se impartira el curso">
        <option value="">Seleccione periodo al que se asignará el curso</option>
        <option value="Enero-Julio">Enero-Julio</option>
        <option value="Agosto-Diciembre">Agosto-Diciembre</option>
        <option value="Verano">Verano</option>
        <option value="Invierno">Invierno</option>
      </select>
    </div><!-- /.form-group -->
  </div>
</div>

</div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
  <div class="col-md-6">
   <div class="form-group">
     <!-- time Picker -->
     <div class="bootstrap-timepicker">
      <div class="form-group">
        <label>Horiario</label>
        <div class="row">
          <div class="col-md-6">
            <input type="time" name="horario1" class="form-control timepicker">
          </div>
          <!-- /.input group -->

          <div class="col-md-6">
            <input type="time" name="horario2" class="form-control timepicker">

          </div>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
    </div>
  </div><!-- /.form-group -->
</div>
<div class="col-md-2 col-md-offset-4">
  <div class="box-footer">
    <button style="width: 100%;" href="?c=Alumno&a=Guardar" type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>
</div>
<!-- /.row -->
</form>
</div>
<!-- /.row -->
</div>
<!-- /.box-body -->
</div>
</section>
<!-- /.content -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>

