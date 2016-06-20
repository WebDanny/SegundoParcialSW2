
	<?php
		include_once("head.php"); 
		
 	?>

 	<a class="btn btn-primary" href="crearItem.php?idProyecto=<?php echo $_REQUEST['id']; ?>">agregar actividad</a>

 	<a class="btn btn-primary" href="gestionarProyectoP.php?id=<?php echo $_REQUEST['id']; ?>">volver</a><br><br><br>

	<table id="actividades" class="table">
		<tr>
			<th>nombre de la actividad</th>		
			<th>ver analisis de precio unitario</th>
		</tr>
			<?php 
				require_once("../negocio/itemN.php");
				$itemN=new ItemN();
				require_once("../negocio/actividadN.php");
				$actividadN=new ActividadN();
				$items=$itemN->listaItem_IdProyecto($_REQUEST['id']);
				foreach ($items as $item) {
					echo '<tr>';
					echo '<td>'.$actividadN->obtenerNombre_IdActividad($item['idActividad']).'</td>';
					echo '<td><a href="#"> ingresar </a></td>';
					echo '</tr>';
				}
			 ?>
	</table>

	<?php 
		include_once("foot.php");
	 ?>