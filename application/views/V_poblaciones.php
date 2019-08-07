<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $pag = 5;
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
                                Definición y cuantificación de las poblaciones
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="table table-striped " id="listado_bienes"> <!--Etiqueta de entrada del row-->

                                    <section>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Población</th>
                                                    <th>Descripción</th>
                                                    <th>Hombres</th>
                                                    <th>Mujeres</th>
                                                    <th>Total</th>
                                                    <th>Hablantes de lengua indígena</th>
                                                    <th>¿Pertenece a un grupo de edad?</th>
                                                    <th>Fuentes</th>
                                                    <th>Criterios</th>
                                                    <th>Opciones</th>
                                                </tr>
                                                </thead>

                                                <tbody id="listado_bienes_body">


                                                </tbody>
                                            </table>
                                        </div>
                                    </section>

                                </div> <!--Etiqueta de cierre del row-->
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--Este siiiii-->
        </section>
        <?php $id_programa = base64_decode($this->uri->segment(3)); ?>
        <input type="text" value="<?= $id_programa; ?>" id="id_programa" style="visibility: hidden">
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>js/formatos/poblaciones.js"></script>

<script>

    var isIE = document.all?true:false;
    var isNS = document.layers?true:false;
    function soloNumeros(e,decReq) {
        var key = (isIE) ? event.keyCode : e.which;
        var obj = (isIE) ? event.srcElement : e.target;
        var isNum = (key > 47 && key < 58) ? true : false;
        var dotOK = (key==46 && decReq=='decOK' && (obj.value.indexOf(".")<0 || obj.value.length==0)) ? true:false;
        var isDel = (key==0 || key==8 ) ? true:false;
        var isEnter = (key==13) ? true:false;
        //e.which = (!isNum && !dotOK && isNS) ? 0 : key;
        return (isNum || dotOK || isDel || isEnter);
    }

</script>