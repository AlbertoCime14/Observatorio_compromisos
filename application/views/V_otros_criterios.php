<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $pag = 5;
    include 'application/views/masterpage/navagacionnavb.php';
    ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <!---Aqui va el contenido de la pagina :v-->
        <section class="content">
            <div class="wrapper row-offcanvas row-offcanvas-left">
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="right-side strech" style="padding: 8px">
                    <!-- Content Header (Page header) -->
                    <section class="content-header" style="padding: 10px">
                        <h1>Otros criterios</h1>

                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <!---Aqui va el contenido de la pagina :v-->
                        <div class="row">
                            <section>
                                <div>
                                    <div style="margin-bottom: 10px;" class="text-right"><a
                                                href="<?= base_url(); ?>formatos/poblaciones/<?= $id_programa; ?>/"
                                                class="btn btn-md btn-default float-right"><span
                                                    class="fa fa-mail-reply"></span>Regresar</a></div>
                                    <div class="panel">

                                        <div class="panel-heading">
                                            <h3 class="panel-title" style="margin-left: 14px;">
                                                <i class=""></i> Nuevos criterios
                                            </h3>
                                        </div>
                                        <div class="panel-body">

                                            <div class="col-md-12">
                                                <label>Nombre</label>
                                                <input id="nombre_criterio" type="text" class="form-control"
                                                       placeholder="Escriba el nombre del criterio">
                                            </div>


                                            <div class="col-md-12">
                                                <label>Descripción</label>
                                                <textarea style="resize:none;height: 100px" id="descripcion_criterio"
                                                          class="form-control"
                                                          placeholder="Describe el criterio"></textarea>
                                            </div>
                                            <div class="col-md-12">

                                                <button onclick="agregar_criterio();" style="margin-top: 20px;" id="enviarprograma" type="button"
                                                        class="btn btn-labeled btn-success">
                                                        <span class="btn-label">
                                                            <i class="glyphicon glyphicon-ok"></i>
                                                        </span> Crear
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class=""></i>Listado de criterios
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-striped "
                                                       id="listado_programas">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre del criterio</th>
                                                        <th>Descripcion del criterio</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="listado_criterios_body">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /.content -->
                </aside>
                <!-- /.right-side -->
            </div>
        </section>
        <?php $id_programa = base64_decode($this->uri->segment(3)); ?>
        <input type="text" value="<?= $id_programa; ?>" id="id_programa" style="visibility: hidden">
        <!-- /.content -->
        <?php $id_cuantificacion = base64_decode($this->uri->segment(4)); ?>
        <input type="text" value="<?= $id_cuantificacion; ?>" id="id_cuantificacion" style="visibility: hidden">


    </aside>
    <!-- /.right-side -->
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>js/formatos/OtrosCriterios.js"></script>

<script>

    var isIE = document.all ? true : false;
    var isNS = document.layers ? true : false;

    function soloNumeros(e, decReq) {
        var key = (isIE) ? event.keyCode : e.which;
        var obj = (isIE) ? event.srcElement : e.target;
        var isNum = (key > 47 && key < 58) ? true : false;
        var dotOK = (key == 46 && decReq == 'decOK' && (obj.value.indexOf(".") < 0 || obj.value.length == 0)) ? true : false;
        var isDel = (key == 0 || key == 8) ? true : false;
        var isEnter = (key == 13) ? true : false;
        //e.which = (!isNum && !dotOK && isNS) ? 0 : key;
        return (isNum || dotOK || isDel || isEnter);
    }

</script>
