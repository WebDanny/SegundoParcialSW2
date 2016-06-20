<?php 
    include_once("head.php");
 ?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
 <div class="row services">

                    <article class="service-box col-12">

                        <div class="">
                        
                                <form action="../negocio/itemN.php" id="form" method="post">

                                	

                                    <div style="" class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label for="nombre">actividad  :</label>
										        <select name="actividad" class="form-group"> 
										        <?php 
										        	require_once("../negocio/actividadN.php");
													$actividadN=new ActividadN();
										            $actividad=$actividadN->listaActividad();
										            foreach ($actividad as $a) {
										                echo '<option value="'.$a['id'].'">'.$a['nombre'].'</option>';
										            }
										        ?>
												</select>
                                            </div>

                                            <div class="form-group">
                                                <label for="nombre">Fecha Inicial:</label>
                                                <input class="form-control" name="fechaIni" type="date" >
                                            </div>

											<div class="form-group">
                                                <label for="nombre">Fecha Final:</label>
                                                <input class="form-control" name="fechaFin" type="date" >
                                            </div>

                                            <div class="form-group">
                                                <label for="nombre">actividad previa :</label>
										        <select name="predecesor" class="form-group"> 
										        <option value="0">sin actividad previa</option>;
										        <?php 
										        	require_once("../negocio/itemN.php");
													$itemN=new ItemN();
													$idProyecto=$_REQUEST['idProyecto'];
													$items=$itemN->listaItem_IdProyecto($idProyecto);
										            foreach ($items as $it) {
										                echo '<option value="'.$it['id'].'">'.$actividadN->obtenerNombre_IdActividad($it['idActividad']).'</option>';
										            }
										        ?>
												</select>
                                            </div>

                                            <div class="form-group">
                                                <input class="" name="pagina" type="hidden" value="crear">
                                            </div>

                                            <div class="form-group">
                                                <input class="" name="idProyecto" type="hidden" value="<?php echo $idProyecto ?>">
                                            </div>

                                            <div class="form-group">
                                            <p>
                                                <input class="btn btn-primary" type="submit" value="Guardar">
                                                <a href="gestionarActividadP.php?id=<?php echo $idProyecto ?>" class="btn btn-primary">cancelar</a>
                                            </p>
                                            </div>
                                                                                
                                    </div>
                                </form>

                            </div>
                    </article>

                </div>
 <?php 
    include_once("foot.php");
  ?>