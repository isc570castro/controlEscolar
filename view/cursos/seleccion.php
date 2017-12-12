
<section class="content-header">

</section>

<section class="content">
  <center><h1> Bienvenido al sistema de control escolar</h1>
    <h4>Seleccione el curso con el que necesite trabajar</h4>
  </center><br>
  <?php foreach($this->model->listarCursos2($_SESSION['idDocente']) as $curso): ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box <?php if(isset($_SESSION['idCurso'])){ if($curso->idCurso==$_SESSION['idCurso']){ ?>bg-green <?php }else{ ?> bg-aqua<?php }}else{ ?> bg-aqua <?php } ?>">
        <div class="inner">
          <h4><b><?php echo $curso->materia; ?></b></h4>
          <p><b>Grupo</b> <?php echo $curso->grupo; ?></p>
          <p><b>Horario</b> <?php echo $curso->horario; ?></p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>

        <?php if(isset($_SESSION['idCurso'])){ 
          if($curso->idCurso==$_SESSION['idCurso']){ ?>
          <a href="?c=Curso&a=DesactivarMateria&claveMateria=<?php echo $curso->claveMateria; ?>&materia=<?php echo $curso->materia; ?>&idCurso=<?php echo $curso->idCurso; ?>" class="small-box-footer">Desactivar&nbsp;<i class="fa   fa-check-circle-o"></i></a>
          <?php }else{ ?>
          <a href="?c=Curso&a=ActivarMateria&claveMateria=<?php echo $curso->claveMateria; ?>&materia=<?php echo $curso->materia; ?>&idCurso=<?php echo $curso->idCurso; ?>" class="small-box-footer">Activar&nbsp;<i class="fa   fa-check-circle"></i></a> 
          <?php }}else{ ?>
          <a href="?c=Curso&a=ActivarMateria&claveMateria=<?php echo $curso->claveMateria; ?>&materia=<?php echo $curso->materia; ?>&idCurso=<?php echo $curso->idCurso; ?>" class="small-box-footer">Activar&nbsp;<i class="fa   fa-check-circle"></i></a> 
          <?php } ?>
        </div>
      </div>

    <?php endforeach; ?>
  </section>
