 <section class="content-header">
  <h1>
    Alumnos
    <small>Listas de alumnos</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Listas de alumnos</li>
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
              <h3 class="box-title">Listas de alumnos</h3>
            </div>
          </div>              
          <!--/col-md-4-->            
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
              <th>Asignar Calificación</th>
              <th>No. Ctrl</th>
              <th>Nombre</th>
              <?php foreach($this->model->ListarUnidades($_SESSION['claveMateria']) as $unidades): ?>
                <th><?php echo "Unidad"." ".$unidades->noUnidad; ?></th>
              <?php endforeach; ?>
              <th>Calificacion final</th>
              
            </tr>
          </thead>
          <tbody>
            <?php foreach($this->model->ListarAlumnosCurso($_SESSION['idCurso']) as $alumno): ?>
              <tr>
                  <td width="10%" align="center"> <button style="width: 50%" type="button" data-toggle="modal" data-target="#modal-califunidades" onclick="califunidades(<?php echo $alumno->idCursoAlumno ?>);" class="btn btn-block btn-info btn-xs"><i class="fa fa-external-link"></i></button></td>
                <td><?php echo $alumno->noCtrl; ?></td>
                <td><?php echo $alumno->nombre." ".$alumno->primerApellido." ".$alumno->segundoApellido; ?></td>

                <?php 
                foreach ($this->model->ListarCalificaciones($alumno->idCursoAlumno) as $calificacion): ?>
                      <td align="center"><?php echo $calificacion->calificacion; ?></td>
                <?php endforeach; ?>
                <td align="center"><?php echo $alumno->calificacion; ?></td>             

              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
               <th>Asignar Calificación</th>
              <th>No. Ctrl</th>
              <th>Nombre</th>
               <?php foreach($this->model->ListarUnidades($_SESSION['claveMateria']) as $unidades): ?>
                <th><?php echo "Unidad"." ".$unidades->noUnidad; ?></th>
              <?php endforeach; ?>
              <th>Calificacion final</th>
             
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
<div class="modal fade" id="modal-califunidades">
  <div class="modal-dialog"  style="width: 20%;">
    <div class="modal-content">
      <form action="?c=Curso&a=RegistraCalificacion" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Calificar unidades</h3>
          </div>
          <div class="modal-body">
            <div class="form-group row">

             <?php $j=0; foreach($this->model->ListarUnidades($_SESSION['claveMateria']) as $unidades): $j++; ?>      
               <label class="col-md-7 col-sm-10" for="txtCodigoUsuario"><?php echo "Unidad"." ".$unidades->noUnidad; ?></label>
               <input class="col-md-4 col-sm-2" name=<?php echo "calificacion".$j ?> type="number" class="form-control" id=<?php echo "calificacion".$j ?> required>
               <input class="col-md-4 col-  sm-2" name=<?php echo "idUnidad".$j ?> value="<?php echo $unidades->idUnidad ?>" type="hidden" class="form-control" id=<?php echo "calificacion".$j ?> required>
             <?php endforeach; ?>
            
           </div><!-- /.form-group -->
           <input  name="idCursoAlumno" type="hidden" class="form-control" id="txtnoCtrl" required>
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
    califunidades = function(idCursoAlumno){
       $("#txtnoCtrl").val(idCursoAlumno);
    }
    function sumacalif(){
      var calfinal = primera + segunda + tercera + cuarta + quinta + sexta;
      $("#calfinal").val(calfinal);
    }
  </script>