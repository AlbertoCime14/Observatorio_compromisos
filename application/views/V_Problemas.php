<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<input type="text" value="<?=base_url();?>" id="url" style="visibility: hidden">
    <?php
    $pag = 2;
    include 'application/views/masterpage/navagacionnavb.php';
    ?>
    <script src="https://www.google-analytics.com/analytics.js"></script>
    <link rel="stylesheet" href="<?=base_url();?>css/highlight.css">
    <link rel="stylesheet" href="<?=base_url();?>css/main.css">
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
                                <i class=""></i>
                            </h3>

                        </div>
                        <div class="panel-body">
                            <section>
                                <div id="sample">
                                    <div style="width: 100%; display: flex; justify-content: space-between">
                                        <div id="myPaletteDiv" style="width: 100px; margin-right: 2px; background-color: whitesmoke; border: solid 1px black"></div>
                                        <div id="myDiagramDiv" style="flex-grow: 1; height: 480px; border: solid 1px black"></div>
                                    </div>

                                    <button id="SaveButton" onclick="save()" class="btn btn-primary">Guardar</button>
                                  <!--  <button onclick="load()" class="btn btn-success">Load</button>
								  -->
                                    <button onclick="layout()"class="btn btn-warning">Acoplar</button>
									  <button onclick="resetearjson()"class="btn btn-danger">Resetear problema</button>
                                    <textarea id="mySavedModel" style="width:100%;height:300px; visibility:hidden;"></textarea>
                                </div>

                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </aside>
    <!-- /.right-side -->
</div>

<script src="<?=base_url();?>js/app.js" type="text/javascript"></script>

<!--js apartado de para formatos-->

<script src="<?=base_url();?>js/go.js"></script>
<script src="<?=base_url();?>js/highlight.js"></script>
<script src="<?=base_url();?>js/jquery.min.js"></script>
<script src="<?=base_url();?>js/bootstrap.min.js"></script>

<!--funciones para cargar el primer canvas de arbol de problemas-->
<script src="<?=base_url();?>js/custom.js"></script>



<input type="text" value="<?=base64_decode($this->uri->segment(3))?>" id="programa" style="display: none"/>
<input type="text" value="<?=$pag?>" id="formato" style="visibility: hidden"/>
