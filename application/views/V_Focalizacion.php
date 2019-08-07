<script  src="<?=base_url();?>js/jqueryfull.js"></script>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $pag = 6;
    include 'application/views/masterpage/navagacionnavb.php';
    ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Formato 1</h1>-->
        </section>
        <!-- Main content -->
        <!---Aqui va el contenido de la pagina :v-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                               Criterios para la focalización de la población objetivo
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row"> <!--Etiqueta de entrada del row-->
							<section>
							<div class="col-md-12">
							  <table class="table" id="listado_criterios">
                                    <thead>
										<tr>
                                        <th>Criterio</th>
                                        <th>Descripción del criterio</th>
                                        <th>Justificación de la elección</th>
                                        <th>Medio de verificación</th>
                                        <th>Liga</th>
										<th>Adjuntar archivo</th>
										<th>Opciones</th>
                                    </tr>
									</thead>
                                    <tbody id="listado_criterios_body">
									
                                    </tbody>
                                </table>
								</div>
							</section>
							
                            </div> <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
 			
            </div> <!--Este siiiii-->
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<input type="text" value="<?=base64_decode($this->uri->segment(3))?>" id="programa" style="display: none"/>
<input type="text" value="1" id="validador" style="display: none"/>
	
		<script src="<?=base_url();?>js/formatos/formatocriterios.js"></script>		