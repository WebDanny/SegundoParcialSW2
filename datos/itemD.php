<?php 
	require_once("../conexion/conexion.php");
	class ItemD{
		
		var $idProyecto;
		var $idActividad;
		var $cantidad;
		var $pParcial;
		var $conexion;

		public function __construct(){
			$this->idProyecto="";
			$this->idActividad="";
			$this->cantidad=0;
			$this->pParcial=0;
			$this->conexion=conexion::getConexion();
		}

		public function getIdProyecto(){
			return $this->idProyecto;
		}

		public function setIdProyecto($idProyecto){
			$this->idProyecto=$idProyecto;
		}

		public function getIdActividad(){
			return $this->idActividad;
		}

		public function setIdActividad($idActividad){
			$this->idActividad=$idActividad;
		}

		public function getCantidad(){
			return $this->cantidad;
		}

		public function setCantidad($cantidad){
			$this->cantidad=$cantidad;
		}

		public function getPParcial(){
			return $this->pParcial;
		}

		public function setPParcial($pParcial){
			$this->pParcial=$pParcial;
		}

		public function guardar($actividad,$idProyecto){
			$this->setIdActividad($actividad);
			$this->setIdProyecto($idProyecto);
			return $idItem=$this->guardar1();
		}

		public function guardar1(){
			$query='insert into item values (null,"'
				.$this->getIdProyecto().'","'
				.$this->getIdActividad().'","'
				.$this->getCantidad().'","'
				.$this->getPParcial().'");';
			$this->conexion->consulta($query);
			return $idItem=$this->obtenerUltimoId();
		}

		public function obtenerUltimoId(){
			$query='Select * from item order by id desc limit 1';
			$resultado=$this->conexion->consulta($query);
			$items=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$items[$i]=array('id'=>$res['id'],'idProyecto'=>$res['idProyecto'],'idActividad'=>$res['idActividad'],'cantidad'=>$res['cantidad'],'PParcial'=>$res['PParcial']);
						$i=$i+1;
					}
				}
			}
			return $items[0]['id'];
		}

		public function listarItem_IdProyecto($idProyecto){
			$query='select * from item where idProyecto='.$idProyecto;
			$resultado=$this->conexion->consulta($query);
			$items=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$items[$i]=array('id'=>$res['id'],'idProyecto'=>$res['idProyecto'],'idActividad'=>$res['idActividad'],'cantidad'=>$res['cantidad'],'PParcial'=>$res['PParcial']);
						$i=$i+1;
					}
				}
			}
			return $items;
		}

		public function guardarDiagrama($idItem,$predecesor,$fechaIni,$fechaFin){
			$query='insert into diagrama values (null,'
				.$idItem.','
				.$predecesor.',"'
				.$fechaIni.'","'
				.$fechaFin.'");';
			$this->conexion->consulta($query);
		}

		public function getFechaI_idItem($idItem){
			$query='select * from diagrama where idItem='.$idItem;
			$resultado=$this->conexion->consulta($query);
			$items=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$items[$i]=array('id'=>$res['id'],'idItem'=>$res['idItem'],'predecesor'=>$res['predecesor'],'fechaIni'=>$res['fechaIni'],'fechaFin'=>$res['fechaFin']);
						$i=$i+1;
					}
				}
			}
			return $items[0]['fechaIni'];
		}

		public function getFechaF_idItem($idItem){
			$query='select * from diagrama where idItem='.$idItem;
			$resultado=$this->conexion->consulta($query);
			$items=array();
			if($resultado!=NULL){
				if(mysql_fetch_row($resultado)>0){
					$i=0;
					$resultado=$this->conexion->consulta($query);
					while ($res=mysql_fetch_array($resultado)) {
						$items[$i]=array('id'=>$res['id'],'idItem'=>$res['idItem'],'predecesor'=>$res['predecesor'],'fechaIni'=>$res['fechaIni'],'fechaFin'=>$res['fechaFin']);
						$i=$i+1;
					}
				}
			}
			return $items[0]['fechaFin'];
		}

	};
 ?>