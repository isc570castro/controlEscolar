    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Docentes
        <small>Datos de docentes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Docentes</li>
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
                          <a style="width: 150px" class="btn btn-sm btn-default tooltips" href="?c=Docente&a=Crud" data-toggle="tooltip" data-placement="bottom" data-original-title="Registrar nuevo alumno"> <i class="fa fa-plus"></i> Registrar </a>
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
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alejandro</td>
                    <td>Castro</td>                   
                    <td>Saucedo</td>                   
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Primer apellido</th>
                  <th>Segundo apellido</th>
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
