<?php 

	class conexion{

		var $con=NULL;
		private static $conexion;

		public function __construct(){
			$this->con=mysql_connect("localhost","root");
			mysql_select_db("constructora",$this->con);
		}

		public static function getConexion(){
			if (  !self::$conexion instanceof self){
		        self::$conexion = new self;
		    }
		    return self::$conexion;
		}

		public function consulta($query){
			return $q = mysql_query($query,$this->con);
		}

		public function cerrar(){
			$this->con->mysql_close();
		}

	};


?>