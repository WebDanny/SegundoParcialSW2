<?php 
	require_once("../datos/itemD.php");
	class ItemN{

		private $itemD;

		public function __construct(){
			$this->itemD = new ItemD(); 
		}

		public function guardarItem($actividad,$idProyecto){
			return $idItem=$this->itemD->guardar($actividad,$idProyecto);
		}

		public function listaItem_IdProyecto($idProyecto){
			$lista=$this->itemD->listarItem_IdProyecto($idProyecto);
			return $lista;
		}

		public function guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin){
			$this->itemD->guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin);
		}

		public function getFechaI($idItem){
			$fecha1=$this->itemD->getFechaI_idItem($idItem);
			//$fecha2=''.substr($fecha1, 6, 4).','.substr($fecha1, 3, 2).','.substr($fecha1, 0, 2).'';
			return str_replace("-", ",", $fecha1);
		}

		public function getFechaF($idItem){
			$fecha1=$this->itemD->getFechaF_idItem($idItem);
			//$fecha2=''.substr($fecha1, 6, 4).','.substr($fecha1, 3, 2).','.substr($fecha1, 0, 2).'';
			return str_replace("-", ",", $fecha1);
		}

	};

	function array_recibe($url_array) { 
	    $tmp = stripslashes($url_array); 
	    $tmp = urldecode($tmp); 
	    $tmp = unserialize($tmp); 

	   return $tmp; 
	} 

	if(isset($_POST['pagina'])){
		if($_POST['pagina']=="crear"){
			$itemN=new ItemN();
			$idItem=$itemN->guardarItem($_POST['actividad'],$_POST['idProyecto']);
			$itemN->guardarDiagrama($idItem,$_POST['predecesor'],$_POST['fechaIni'],$_POST['fechaFin']);
			echo"<script type=\"text/javascript\">alert('ingresado correctamente'); window.location='../presentacion/gestionarActividadP.php?id=".$_POST['idProyecto']."';</script>";  
			//echo '<script type=\text/javascript\>alert("ingresado correctamente"); window.location="../presentacion/gestionarActividadP.php";</script>';  
		}else{
			echo "no creo actividad";
		}
	}else{
		//echo "no isset";
	}
	
	

?>