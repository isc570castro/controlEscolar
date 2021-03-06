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
                  <h3 class="box-title">Datos generales de los cursos activos</h3>
                </div>
              </div>              
              <div class="col-md-3">
                <div class="btn-group pull-right">
                  <b>

                    <div class="btn-group" style="margin-right: 10px; margin-top: 10px;"> 
                      <a style="width: 150px" class="btn btn-sm btn-default tooltips" href="?c=Curso&a=Crud" data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nuevo curso"> <i class="fa fa-plus"></i> Registrar </a>
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
                  <th>Clave de curso</th>
                  <th>Materia</th>
                  <th>Docente</th>
                  <th>Periodo</th>
                  <th>Grupo</th>
                  <th>Horario</th>
                  <th>Carga</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($this->model->listarCursos() as $curso): ?>
                <tr>
                  <td>ITZC<?php echo $curso->idCurso; ?></td> 
                  <td><?php echo $curso->materia; ?></td>
                  <td><?php echo $curso->nombre; ?></td>
                  <td><?php echo $curso->periodo; ?></td>  
                  <td><?php echo $curso->grupo; ?></td>  
                  <td><?php echo $curso->horario; ?></td>  
                  <td align="center"><a style="width: 50px;" href="?c=Curso&a=Carga&idCurso=<?php echo $curso->idCurso;?>" type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-external-link"></i></a></td>  
              </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                 <th>Clave de curso</th>
                  <th>Materia</th>
                  <th>Docente</th>
                  <th>Periodo</th>
                  <th>Grupo</th>
                  <th>Horario</th>
                  <th>Carga</th>
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