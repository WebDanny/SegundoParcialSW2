<?php 
    include_once("head.php");
 ?>
 <div class="row services">

                    <article class="service-box col-12">

                        <div class="">
                        
                                <form action="../negocio/actividadN.php" id="form" method="post">
                                    <div style="" class="col-md-6">
                                            <div class="form-group">
                                                <label for="nombre">Nombre:</label>
                                                <input class="form-control" name="nombre" type="text" >
                                            </div>

                                            <div class="form-group">
                                                <label for="nombre">tipo:</label>
                                                <select name="tipo"> 
                                                	<?php 
                                                		require_once("../negocio/tipoAN.php");
                                                		$tipo=new TipoAN();
                                                		$tipos=$tipo->listaTipoA();
                                                		foreach ($tipos as $t) {
                                                			echo '<option value="'.$t['id'].'">'.$t['nombre'].'</option>';
                                                		}
                                                	?>
												</select> 
                                            </div>

                                            <div class="form-group">
                                                <label for="nombre">Unidad:</label>
                                                <input class="form-control" name="unidad" type="text" >
                                            </div>

                                            <div class="form-group">
                                                <input class="" name="pagina" type="hidden" value="crear">
                                            </div>

                                            <div class="form-group">
                                            <p>
                                                <input class="wpcf7-form-control wpcf7-submit" type="submit" value="Guardar">
                                                <input type="submit" value="Cancelar" class="wpcf7-form-control wpcf7-submit" />
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