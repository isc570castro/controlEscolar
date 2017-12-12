    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cursos
        <small>Datos de cursos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?c=Inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Cursos</li>
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
                  <h3 class="box-title"><strong>Materia:</strong>&nbsp;<?php echo $info->materia;?>&nbsp; <strong>Docente:</strong>&nbsp;<?php echo $info->nombre." ".$info->primerApellido." ".$info->segundoApellido;?>&nbsp; <strong>Grupo: </strong>&nbsp;<?php echo $info->grupo;?></h3>
                </div>
              </div>              
              <div class="col-md-3">
                <div class="btn-group pull-right">
                  <b>

                    <div class="btn-group" style="margin-right: 10px; margin-top: 10px;"> 
                      <button type="button" data-toggle="modal" data-target="#modal-registrar" style="width: 150px" class="btn btn-sm btn-registrar tooltips"  data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nueva materia"> <i class="fa fa-plus"></i> Registrar </button>
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
                  <th>NoCtrl</th>
                  <th>Nombre</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->model->listarAlumnosCurso($curso->idCurso) as $alumno): ?>
                <tr>
                  <td><?php echo $alumno->noCtrl; ?></td> 
                  <td><?php echo $alumno->nombre." ".$alumno->primerApellido." ".$alumno->segundoApellido; ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                  <th>NoCtrl</th>
                  <th>Nombre</th>
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
  <!-- /.content -->
 <div class="modal fade" id="modal-registrar">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="?c=Curso&a=AsignaAlumno&idCurso=<?php echo $curso->idCurso ?>" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Registrar alumno al curso</h3>
          </div>
          <div class="modal-body">

            <div class="form-group">
             <label for="txtCodigoUsuario">Alumno</label>
             <select name="noCtrl" type="text" class="form-control select2" id="selectMateria">
          <option value="A">Seleccione el alumno a asignar</option>
          <?php foreach($modelAlumno->Listar() as $alumno): ?>
            <option value="<?php echo $alumno->noCtrl;?>"><?php echo $alumno->nombre." ".$alumno->primerApellido." ".$alumno->segundoApellido; ?></option>
          <?php endforeach;?>
        </select>
           </div><!-- /.form-group -->
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</a>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
  </script>