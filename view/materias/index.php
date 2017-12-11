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
                <h3 class="box-title">Datos generales de las materias activas</h3>
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
                  <th width="15%">claveMateria</th>
                  <th>Materia</th>
                  <th width="10%">Ver</th>
                  <th width="10%">Asignar</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->model->listar() as $materia): ?>
                  <tr>
                    <td>ITZM<?php echo $materia->claveMateria; ?></td>
                    <td><?php echo $materia->materia; ?></td>
                    <td><button type="button" data-toggle="modal" data-target="#modal-unidades" onclick="listarUnidades(<?php echo $materia->claveMateria;?>);" class="btn btn-block btn-info btn-xs"><i class="fa fa-eye"></i></button></td>
                    <td><button type="button" data-toggle="modal" data-target="#modal-noUnidades" onclick="claveMateria(<?php echo $materia->claveMateria;?>);" class="btn btn-block btn-success btn-xs"><i class="fa fa-edit"></i></button></td>
                    <!--td><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-eraser"></i></button></td-->
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                 <th>claveMateria</th>
                 <th>Materia</th>
                 <th>Ver</th>
                 <th>Asignar</th>
                 
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

  <!-- /.content -->
  <div class="modal fade" id="modal-noUnidades">
    <div class="modal-dialog"  style="width: 20%;">
      <div class="modal-content">
        <form action="?c=Materia&a=Unidades" method="POST">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Registrar unidades</h3>
            </div>
            <div class="modal-body">
              <div class="form-group row">
               <label class="col-md-7" for="txtCodigoUsuario">Número de unidades</label>
               <input class="col-md-4" name="noUnidades" type="number" class="form-control" id="txtMateria" placeholder="#" required>

             </div><!-- /.form-group -->
             <input class="col-md-4" name="claveMateria" type="hidden" class="form-control" id="txtClaveMateria" placeholder="#" required>
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</a>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- /.content -->
    <div class="modal fade" id="modal-unidades">
      <div class="modal-dialog" style="width: 40%">
        <div class="modal-content" id="modalUnidades">


        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
      claveMateria = function(claveMateria){
        $("#txtClaveMateria").val(claveMateria);
      }
      listarUnidades = function (claveMateria){
        $.post("index.php?c=Materia&a=ListarUnidades", {claveMateria: claveMateria}, function(modal) {
          $("#modalUnidades").html(modal);
        }); 
      }
  </script>
