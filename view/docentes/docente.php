<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Docentes
    <small>Registrar docente</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="?c=suarios">Docentes</a></li>
    <li class="active">Registrar docente</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 <div class="box box-body">
  <div class="box-header with-border">
    <h3 class="box-title">Ingresa los datos del docente</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
     <form action="?c=Docente&a=Guardar" method="POST" parsley-validate novalidate>
      <div class="col-md-12">
        <div class="form-group">
         <label for="txtCodigoUsuario" hidden>ID Docente</label>
         <input name="codigoUsuario" type="hidden" class="form-control" id="txtCodigoUsuario" placeholder="Ingrese el código del usuario" autofocus>
       </div><!-- /.form-group -->
       <div class="col-md-12">
         <div class="form-group">
           <label for="txtNombre">Nombre</label>
           <input name="nombre" class="form-control" id="txtNombre" placeholder="Ingrese el nombre del docente">
         </div><!-- /.form-group -->
         <div class="form-group">
           <label for="txtEmpresa">Apellido paterno</label>
           <input name="primerApellido" type="text" class="form-control" id="txtApellidos" placeholder="Ingrese el primer apellido del docente">
         </div><!-- /.form-group -->
         <div class="form-group">
           <label for="txtEmpresa">Apellido materno</label>
           <input name="segundoApellido" type="text" class="form-control" id="txtApellidos" placeholder="Ingrese el segundo apellido del docente">
         </div><!-- /.form-group -->
       </div><!-- /.col -->
     </div><!-- /.row -->
     <div class="row">
       <div class="col-md-2 col-md-offset-10">
        <div class="box-footer">
          <button style="width: 100%;" type="submit" class="btn btn-primary">Aceptar</button>
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
