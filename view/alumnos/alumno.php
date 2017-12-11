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
      <form action="?c=Alumno&a=Guardar" method="POST">
        <div class="col-md-12">
          <div class="form-group">
           <label hidden for="txtCodigoUsuario">ID Alumno</label>
           <input name="idAlumno" type="hidden" class="form-control" id="txtCodigoUsuario" value="0">
         </div><!-- /.form-group -->
         <div class="row">
          <div class="col-md-6">

            <div class="form-group">
             <label for="txtNombre">Número de control</label>
             <input name="noCtrl" class="form-control" id="txtNombre" value="13450570" required readonly>
           </div><!-- /.form-group -->
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <label for="txtEmpresa">Grupo </label>
             <select name="grupo" type="text" class="form-control" id="txtApellidos" placeholder="Ingrese grupo al que se asignará el alumno">
              <option value="A">Seleccione el grupo al que se asignará el alumno</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>

             </select>
           </div><!-- /.form-group -->
         </div>
       </div>
       <div class="form-group">
         <label for="txtNombre">Nombre</label>
         <input name="nombre" class="form-control" id="txtNombre" placeholder="Ingrese el nombre del alumno" required autofocus>
       </div><!-- /.form-group -->
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
           <label for="txtEmpresa">Primer apellido</label>
           <input name="primerApellido" type="text" class="form-control" id="txtApellidos" placeholder="Ingrese el primer apellido del alumno" required>
         </div><!-- /.form-group -->
       </div>
       <div class="col-md-6">
         <div class="form-group">
           <label for="txtEmpresa">Segundo apellido</label>
           <input name="segundoApellido" type="text" class="form-control" id="txtApellidos" placeholder="Ingrese el segundo apellido del alumno">
         </div><!-- /.form-group -->
       </div>
     </div>

   </div><!-- /.col -->
 </div><!-- /.row -->
 <div class="row">
   <div class="col-md-2 col-md-offset-10">
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
