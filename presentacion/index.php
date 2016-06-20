
	<?php
		include_once("head.php"); 
		require_once("../negocio/proyectoN.php");
		$proyectoN=new ProyectoN();
 	?>

	<table id="proyectos" class="table">
		<tr>
			<th>nombre del proyecto</th>		
			<th>ingresar al proyecto</th>
		</tr>
			<?php 
				$proyectos=$proyectoN->listaProyectos();
				foreach ($proyectos as $proyecto) {
					echo '<tr>';
					echo '<td>'.$proyecto['nombre'].'</td>';
					echo '<td><a href="gestionarProyectoP.php?id='.$proyecto['id'].'">ingresar</a><td>';
					echo '</tr>';
				}
			 ?>
	</table>

	<?php 
		include_once("foot.php");
	 ?>