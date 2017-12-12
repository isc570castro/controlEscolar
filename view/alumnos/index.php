    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alumnos
        <small>Datos de alumnos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Alumnos</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="row">         

              <div class="col-md-9">
                <div class="box-header">
                  <h3 class="box-title">Datos generales de los alumnos activos</h3>
                </div>
              </div>              
              <div class="col-md-3">
                <div class="btn-group pull-right">
                  <b>

                    <div class="btn-group" style="margin-right: 10px; margin-top: 10px;"> 
                      <a style="width: 150px" class="btn btn-sm btn-default tooltips" href="?c=Alumno&a=Crud" data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nuevo alumno"> <i class="fa fa-plus"></i> Registrar </a>
                    </div>

                  </b>
                </div>
              </div><!--/col-md-4-->            
            </div><!--/row--> 
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
                  <th>No. Ctrl</th>
                  <th>Nombre</th>
                  <th>Primer apellido</th>
                  <th>Segundo apellido</th>
                  <th>Grupo</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->model->Listar() as $alumno): ?>
                  <tr>
                    <td><?php echo $alumno->noCtrl; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->primerApellido; ?></td>
                    <td><?php echo $alumno->segundoApellido; ?></td>
                    <td><?php echo $alumno->grupo; ?></td>

                  </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No. Ctrl</th>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Grupo</th>
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
<div class="modal fade" id="modal-eliminar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-red">Eliminar proyecto</h3>
        </div>
        <div class="modal-body">
          <h4>¿Está seguro que desea elimminar el proyecto?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <a href="?c=Proyecto&a=Eliminar" type="button" class="btn btn-danger">Eliminar</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
  </script>