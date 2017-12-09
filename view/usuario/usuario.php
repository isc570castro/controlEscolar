<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuarios
    <small>Registrar usuario</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="?c=suarios">Usuarios</a></li>
    <li class="active">Registrar usuario</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 <div class="box box-body">
  <div class="box-header with-border">
    <h3 class="box-title">Ingresa los datos del usuario</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
     <form action="?c=Usuario&a=Guardar" method="POST">
      <div class="col-md-12">
        <div class="form-group">
         <label hidden for="txtCodigoUsuario">ID Usuario</label>
         <input name="codigoUsuario" type="hidden" class="form-control" id="txtCodigoUsuario" placeholder="Ingrese el código del usuario">
       </div><!-- /.form-group -->
       <div class="col-md-12">
        <div class="form-group">
         <label for="txtNombre">Docente</label>
         <select name="idDocente" class="form-control select2" required style="width: 100%;" id="selectDocentes">
          <option value=""> 
            Seleccione el docente al que se le asignara un usuario
          </option>
          <?php foreach ($this->model->listarDocentes() as $docente): ?>
            <option value="<?php echo $docente->idDocente; ?>"> 
            <?php echo $docente->nombre." ".$docente->primerApellido." ".$docente->segundoApellido; ?>
          </option>
          <?php endforeach; ?>
        </select>
      </div><!-- /.form-group -->
      <div class="form-group">
       <label for="txtNombre">Usuario</label>
       <input name="usuario" class="form-control" id="txtNombre" placeholder="Ingrese usuario">
     </div><!-- /.form-group -->
     <div class="form-group">
       <label for="txtEmpresa">Contraseña</label>
       <input name="password" type="password" class="form-control" id="txtApellidos" placeholder="Ingrese la contraseña">
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
