<?php
require_once 'model/materia.php';
class MateriaController{

	private $model;
	private $mensaje;
	private $error;

	public function __CONSTRUCT(){
		$this->model = new Materia();
	}

	public function Index(){
		$admin=true;
		$materias=true;
		$page="view/materias/index.php";
		require_once 'view/index.php';
	}
	public function Crud(){
			$materia = new Materia();
			if(isset($_REQUEST['claveMateria'])){
				$materia = $this->model->Obtener($_REQUEST['claveMateria']);
			}
			$admin=true;
			$materias=true;
			$page="view/materias/materia.php";
			require_once 'view/index.php';
	}
		public function Guardar(){
		$materia= new Materia();
		$materia->materia=$_REQUEST['materia'];

		$this->model->Registrar($materia);
		$this->mensaje="La materia se ha registrado correctamente";
		$this->Index();
	}
	public function Unidades(){
		$noUnidades=$_REQUEST['noUnidades'];
	    $claveMateria=$_REQUEST['claveMateria'];
		$admin=true;
		$materias=true;
		$page="view/materias/unidades.php";
		require_once 'view/index.php';
	}
	public function GuardarUnidades(){
		$noUnidades=$_REQUEST['noUnidades'];
		$claveMateria=$_REQUEST['claveMateria'];
		for ($i=1; $i <= $noUnidades; $i++) { 
		    $u='unidad'.$i;
	        $unidadn=$_REQUEST[$u];
	        $this->model->RegistraUnidades($i,$unidadn,$claveMateria);
		}
		$this->mensaje="Se han registrado correctamente las unidades de la materia ITZM$claveMateria";
		$this->Index();
	}
  	public function ListarUnidades(){
  		$claveMateria=$_REQUEST['claveMateria'];
  		$materia=$this->model->ObtenerMateria($claveMateria);
  		$unidades=$this->model->ListarUnidades($claveMateria);
  		echo ' <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">'.$materia->materia.'</h3>
            </div>
            <div class="modal-body">
              <div class="form-group row">';
              foreach($unidades as $unidad):
               echo '<h4 style="margin-left: 40px;"><strong>Unidad '.$unidad->noUnidad."</strong> ".$unidad->unidad.'</h4>';
              endforeach;
             echo '</div>
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Listo</button>
          </div>';
  	}
}
?>