<?php 
	session_start();
	$_SESSION['idProyecto']=1;//$_GET['idProyecto']
	$idProyecto=$_SESSION['idProyecto'];
	require_once ("../negocio/itemN.php");
	//require_once ("../negocio/proyectoN.php");
	require_once ("../negocio/actividadN.php");
	$actividadN=new ActividadN();
	$itemN=new ItemN();
	//$items=$itemN->listaItem_IdProyecto($idProyecto);
	//$proyectoN=new ProyectoN();
	//$idProyecto=$_GET['idProyecto'];
 	//$idProyecto="1";
 	//$proyecto=$proyectoN->obtenerProyecto($idProyecto);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container-fluid">
	<h2>actividades de la obra</h2>
	<form action="" method="">
		<table>
		<?php 
			$items=$itemN->listaItem_IdProyecto($idProyecto);
			foreach ($items as $item) {
				echo '<tr>';
				$nombre=$actividadN->obtenerNombre_IdActividad($item['idActividad']);
				echo '<td>'.$nombre.'</td>';
				echo '<td><a href="'.$item['id'].'">ver analisis unitario</a><td>';
				echo '</tr>';
			}
		?>
		</table>
	</form>
	</div>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<a href="#ventana2" class="btn btn-success btn-lg" data-toggle="modal">listar actividades</a>
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