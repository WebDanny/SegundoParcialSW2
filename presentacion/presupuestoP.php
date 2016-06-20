
<?php 
	require_once("../negocio/actividadN.php");
	$actividadN=new ActividadN();

	if(isset($_POST['presupuesto'])){
	?>
	<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modals</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">
		div.botones{

		text-align:center;
	
		height:35px;
			
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<br>
		
		
		<div class="botones">
		<h1>lista de actividades2</h1>
		<br>
		<br>
		<br>
		<br>
		<form method="POST" action="../negocio/itemN.php">
		<?php 
			$act=array();
			$actividades=$actividadN->listaActividad();
				foreach ($actividades as $actividad) {
				$val=$actividad['id'];
				if(isset($_POST[$val])){
					$i=0;
					if($_POST[$val]==1){
						$act[$i]=$actividad;
						echo $actividad['nombre'];
						echo "<br>";
					}
				}
			}

			function array_envia($array) { 

			    $tmp = serialize($array); 
			    $tmp = urlencode($tmp); 

			    return $tmp; 
			} 

			$datos=array_envia($act);

		 ?>
		<input name="array" type="hidden" value="$datos"> 
		<br>
		<br>
		<br>
		<br>
			<!--Hace referencia a la ventana q vamos a habrir q en este caso seria ventana1, pero la tenemos q declarar como #ventana1 xq es un id de la ventana q esta declarada abajo-->
		<a href="#ventana2" class="btn btn-success btn-lg" data-toggle="modal">listar actividades</a>
		<button type="submit" class="btn btn-success btn-lg">guardar</button>
		</form>
		</div>

		<div class="modal fade" id="ventana2">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--Header de la ventana (Encabezado)-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">lista de actividades completo</h4>
					</div>
					
					<!--Contenido de la ventana-->
					<div class="modal-body">
						
						<form action="actividadP.php" method="post" class="">

							<div class="form-group">
								<?php 
									$actividades=$actividadN->listaActividad();
									foreach ($actividades as $actividad) {
										$val=$actividad['id'];
										if(isset($_POST[$val])){
											if($_POST[$val]==1){
												echo '<input type="checkbox" value="1" name="'.$actividad['id'].'"checked>'.$actividad['nombre'];
												echo '<br>';
											}else{
												//echo '<input type="checkbox" value="1" name="'.$actividad['id'].'">'.$actividad['nombre'];
												//echo '<br>';
											}
										}else{
											echo '<input type="checkbox" value="1" name="'.$actividad['id'].'">'.$actividad['nombre'];
											echo '<br>';
										}
									}
								 ?>
								 <input type="hidden" name="presupuesto" value="insertar">
							</div>

					</div>

					<!--Footer de la ventana (pie de pagina)-->


										<!--BUSCAR-->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><!--El data-dismisss tiene la funcionalidad de cerrar la ventana-->
						<button class="btn btn-primary">agregar</button>
						
						</form>
					<!--comienzo del boton insertar-->		
					<!--fin de boton insertar-->	
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>


<?php
	}else{
?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modals</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">
		div.botones{

		text-align:center;
	
		height:35px;
			
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<br>
		
		
		<div class="botones">
		<h1>lista de actividades</h1>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<!--Hace referencia a la ventana q vamos a habrir q en este caso seria ventana1, pero la tenemos q declarar como #ventana1 xq es un id de la ventana q esta declarada abajo-->
		<a href="#ventana2" class="btn btn-success btn-lg" data-toggle="modal">listar actividades</a>

		</div>

		<div class="modal fade" id="ventana2">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--Header de la ventana (Encabezado)-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">lista de actividades completo</h4>
					</div>
					
					<!--Contenido de la ventana-->
					<div class="modal-body">
						
						<form action="actividadP.php" method="post" class="">

							<div class="form-group">
								<?php 
									$actividades=$actividadN->listaActividad();
									foreach ($actividades as $actividad) {
										echo '<input type="checkbox" value="1" name="'.$actividad['id'].'">'.$actividad['nombre'];
										echo '<br>';
									}
								 ?>
								 <input type="hidden" name="presupuesto" value="insertar">
							</div>

					</div>

					<!--Footer de la ventana (pie de pagina)-->


										<!--BUSCAR-->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><!--El data-dismisss tiene la funcionalidad de cerrar la ventana-->
						<button class="btn btn-primary">agregar</button>
						</form>

					<!--comienzo del boton insertar-->		
					<!--fin de boton insertar-->	
				</div>

			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>
<?php
	}

 ?>

