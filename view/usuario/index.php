   <!-- Content Header (Page header) -->
   <section class="content-header">
    <h1>
      Usuarios
      <small>Datos de Usuarios</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Usuarios</li>
    </ol>
  </section>

  <?php if(isset($docentes)){ ?>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
         <div class="row">         

          <div class="col-md-9">
            <div class="box-header">
              <h3 class="box-title">Usuarios docentes</h3>
            </div>
          </div>              
           <div class="col-md-3">
            <div class="btn-group pull-right">
              <b>

                <div class="btn-group" style="margin-right: 10px; margin-top: 10px;"> 
                  <a style="width: 150px" class="btn btn-sm btn-default tooltips" href="?c=Usuario&a=Crud" data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nuevo usuario"> <i class="fa fa-plus"></i> Registrar </a>
                </div>

              </b>
            </div>
          </div><!--/col-md-4-->                  
        </div><!--/row--> 
        <!-- /.box-header -->
        <?php if(isset($this->mensaje) && !isset($this->error)){ ?>
          <div class="box-body" style="margin-bottom: -15px;">
            <div class="alert alert-success alert-dismissible col-xs-12">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="icon fa fa-check"></i> <?php echo $this->mensaje; ?>
            </div>
          </div>
          <?php } if(isset($this->mensaje) && isset($this->error)){ ?>
          <div class="box-body" style="margin-bottom: -15px;">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="icon fa fa-warning"></i> <?php echo $this->mensaje; ?>
            </div>
          </div>
          <?php } ?>
        <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Docente</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($this->model->listarUsuariosDocentes() as $usuario): ?>
              <tr>
                <td><?php echo $usuario->usuario; ?></td>
                <td><?php echo $usuario->nombre." ".$usuario->primerApellido." ".$usuario->segundoApellido; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Usuario</th>
              <th>Docente</th>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
<?php }else{ ?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
       <div class="row">         

        <div class="col-md-9">
          <div class="box-header">
            <h3 class="box-title">Usuarios alumnos</h3>
          </div>
        </div>              
        <div class="col-md-3">
          <div class="btn-group pull-right">
            <b>
             
              <div class="btn-group"> 
                
                <a style="width: 150px; margin-right: 10px; margin-top: 10px;" class="btn btn-sm btn-default tooltips" href="?c=Usuario&a=CrudA" data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nuevo usuario"> <i class="fa fa-plus"></i> Registrar </a>
              </div>

            </b>
          </div>
        </div><!--/col-md-4-->                  
      </div><!--/row--> 
      <!-- /.box-header -->
      <?php if(isset($this->mensaje) && !isset($this->error)){ ?>
          <div class="box-body" style="margin-bottom: -15px;">
            <div class="alert alert-success alert-dismissible col-xs-12">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="icon fa fa-check"></i> <?php echo $this->mensaje; ?>
            </div>
          </div>
          <?php } if(isset($this->mensaje) && isset($this->error)){ ?>
          <div class="box-body" style="margin-bottom: -15px;">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="icon fa fa-warning"></i> <?php echo $this->mensaje; ?>
            </div>
          </div>
          <?php } ?>
      <div class="box-body">
       <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Usuario</th>
            <th>Alumno</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($this->model->listarUsuariosAlumnos() as $alumno): ?>
            <tr>
              <td><?php echo $alumno->noCtrl; ?></td>
              <td><?php echo $alumno->nombre." ".$alumno->primerApellido." ".$alumno->segundoApellido; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Usuario</th>
            <th>Alumno</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
<?php } ?>