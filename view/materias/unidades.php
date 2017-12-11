<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Unidades
    <small>Registrar unidades</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=Inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="?c=Materia">Materias</a></li>
    <li class="active">Registrar unidades</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 <div class="box box-body">
  <div class="box-header with-border">
    <h3 class="box-title">Clave: ITZM<?php echo $claveMateria;?></h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
     <form action="?c=Materia&a=GuardarUnidades&noUnidades=<?php echo $noUnidades; ?>&claveMateria=<?php echo $claveMateria;?> " method="POST" parsley-validate novalidate>

       <?php for ($i=1; $i <= $noUnidades; $i++) { ?>
       <div class="col-md-12">
         <div class="form-group">
          <label for="txtNombre">Unidad <?php echo $i; ?></label>
           <input name="unidad<?php echo $i;?>" class="form-control" id="txtNombre" placeholder="Ingrese el nombre de la <?php echo $i; ?>° unidad" autofocus>
         </div><!-- /.form-group -->
       </div><!-- /.col -->
       <?php } ?>
     </div><!-- /.row -->
     <div class="row">
       <div class="col-md-2 col-md-offset-10">
        <div class="box-footer">
          <button style="width: 100%;" type="submit" class="btn btn-primary">Guardar</button>
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
