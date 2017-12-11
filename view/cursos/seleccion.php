
<section class="content-header">
  <h1>
    Data Tables
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>

<section class="content">
  <center><h1> Bienvenido al sistema de control escolar</h1>
    <h4>Seleccione el curso con el que necesite trabajar</h4>
  </center><br>
  <?php foreach($this->model->listarCursos2($_SESSION['idDocente']) as $curso): ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h4><b><?php echo $curso->materia; ?></b></h4>
          <p><b>Grupo</b> <?php echo $curso->grupo; ?></p>
          <p><b>Horario</b> <?php echo $curso->horario; ?></p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Activar&nbsp;<i class="fa   fa-check-circle"></i></a>
      </div>
    </div>
    
  <?php endforeach; ?>
</section>
