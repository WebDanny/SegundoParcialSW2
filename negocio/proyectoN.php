<?php 
	require_once("../datos/proyectoD.php");

	class ProyectoN{
		
		private $proyecto;

		public function __construct(){
			$this->proyecto = new proyectoD(); 
		}

		public function guardarProyecto($nombre,$propietario,$direccion,$responsable){
			$this->proyecto->guardar($nombre,$propietario,$direccion,$responsable);
		}

		public function listaProyectos(){
			$lista=$this->proyecto->listar();
			return $lista;
		}

		public function obtenerProyecto($idProyecto){
			return $this->proyecto->obtenerProyecto($idProyecto);
		}

	};

	if(isset($_POST['pagina'])){
		if($_POST['pagina']=="crear"){
			$proyectoN=new ProyectoN();
			$proyectoN->guardarProyecto($_POST['nombre'],$_POST['nombrePropietario'],$_POST['direccion'],$_POST['responsable']);
			echo"<script type=\"text/javascript\">alert('ingresado correctamente'); window.location='../presentacion/index.php';</script>";  
		}else{
			echo "no crear";
		}
	}else{
		//echo "no isset";
	}
	
?>