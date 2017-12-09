    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Materias
        <small>Datos de materias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Materias</li>
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
                    <button type="button" data-toggle="modal" data-target="#modal-eliminar"  style="width: 150px" class="btn btn-sm btn-registrar tooltips"  data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nueva materia"> <i class="fa fa-plus"></i> Registrar </button>
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
                  <th>claveMateria</th>
                  <th>Materia</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>13450570</td>
                  <td>Aplicaciones Moviles</td>                  
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
               <th>claveMateria</th>
               <th>Materia</th>
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
      <form action="?c=Materia&a=Guardar" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Registrar materia</h3>
          </div>
          <div class="modal-body">

            <div class="form-group">
             <label for="txtCodigoUsuario">Materia</label>
             <input name="materia" type="text" class="form-control" id="txtMateria" placeholder="Ingrese el nombre de la materia" required>
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

