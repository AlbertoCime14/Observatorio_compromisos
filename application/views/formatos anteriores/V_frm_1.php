<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $pag = 1;
    include 'application/views/masterpage/navegacion.php';
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
                                <i class=""></i>Documentación de políticas públicas o programas similares
                            </h3>
                        </div>
                        <div class="panel-body">
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Política o programa
                                            </label>
                                            <textarea class="form-control"
                                                      placeholder="Describa su politica o programa"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Lugar donde se implementará
                                            </label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Objetivo
                                            </label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Descripción del programa
                                            </label>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Describa su politica o programa"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Población objetivo
                                            </label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Identificación de bienes y servicios
                                            </label>
                                            <select class="form-control">
                                                <option>Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Resultados*
                                            </label>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Describa su politica o programa"></textarea>
                                            </br>
                                            <button type="button" class="btn btn-labeled btn-success">
                                    
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Guardar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>