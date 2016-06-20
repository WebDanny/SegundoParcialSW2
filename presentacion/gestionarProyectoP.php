
	<?php
		include_once("head.php"); 
		require_once("../negocio/proyectoN.php");
		$proyectoN=new ProyectoN();
		$idProyecto=$_REQUEST['id'];
 	?>

	<table id="proyectos" class="table">
			<?php 
				//$proyectos=$proyectoN->obtenerProyecto($idProyecto);
				echo '<tr>';
				echo '<th><h4>ver actividades</h4></th>';
				//echo '<th><h4>ver analisis de precio unitario</h4></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><a href="gestionarActividadP.php?id='.$idProyecto.'"><img src="img/image-actividad.png" alt="actividades"/></a></td>';
				//echo '<td><a href="gestionarProyectoP.php?id='.$idProyecto.'"><img src="img/image-precio.png" alt="analisis de precio unitario"/></a></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<th><h4>ver planificaicon</h4></th>';
				echo '<th><h4>ver diagrama de gantt</h4></th>';
				echo '</tr>';
				echo '<tr>';
				echo '<td><a href="gestionarProyectoP.php?id='.$idProyecto.'"><img src="img/image-planificacion.png" alt="planificacion"/></a></td>';
				echo '<td><a href="diagramaGanttP.php?id='.$idProyecto.'"><img src="img/image-gantt.png" alt="diagrama de gantt"/></a></td>';
				echo '</tr>';
			 ?>
	</table>

	<?php 
		include_once("foot.php");
	 ?>
