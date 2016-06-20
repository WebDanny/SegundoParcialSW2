<?php 
	require_once("../datos/actividadD.php");
	class ActividadN{

		private $actividadD;

		public function __construct(){
			$this->actividadD = new ActividadD(); 
		}

		public function guardarActividad($nombre,$tipo,$unidad){
			$this->actividadD->guardar($nombre,$tipo,$unidad);
		}

		public function listaActividad(){
			$lista=$this->actividadD->listar();
			return $lista;
		}

		public function obtenerNombre_IdActividad($idActividad){
			return $this->actividadD->obtenerNombre_IdActividad($idActividad);
		}

	};

	if(isset($_POST['pagina'])){
		if($_POST['pagina']=="crear"){
			$listaActividadesN=new ActividadN();
			$listaActividadesN->guardarActividad($_POST['nombre'],$_POST['tipo'],$_POST['unidad']);
			echo"<script type=\"text/javascript\">alert('ingresado correctamente'); window.location='../presentacion/crearActividadP.php';</script>";  
		}else{
			echo "no creo actividad";
		}
	}else{
		//echo "no isset";
	}
?>