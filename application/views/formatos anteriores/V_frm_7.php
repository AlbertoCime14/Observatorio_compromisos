<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $pag = 7;
    include 'application/views/masterpage/navegacion.php';
    ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Formato 7</h1>-->

        </section>
        <!-- Main content -->
        <!---Aqui inicia e contenido  de la pagina :v-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Criterios para la focalización de la población objetivo
                            </h3>

                        </div>
                        <div class="panel-body">


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center" class="col-sm-2">
                                            Criterio
                                        </th>
                                        <th style="text-align: center" class="col-sm-2">Descripción del criterio</th>
                                        <th style="text-align: center" class="col-sm-1">
                                            Justificación de la elección
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="text-align: center">

                                            <label>Ingreso</label>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Basic"></textarea>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Basic"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="text-align: center">

                                            <label>Sexo</label>
                                        </td>
                                        <td>
                                            <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option value="html">Hombre</option>
                                                <option value="css">Mujer</option>

                                            </select>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Descripción"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="text-align: center">

                                            <label>Grupo etario</label>
                                        </td>
                                        <td>
                                            <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option value="html">Adulto</option>
                                                <option value="css">Joven</option>

                                            </select>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Descripción"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="text-align: center">

                                            <label>Condición de hablante de lengua indígena</label>
                                        </td>
                                        <td>
                                            <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option value="html">Indistinto</option>

                                            </select>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Descripción"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="text-align: center">

                                            <label>Ubicación geográfica</label>
                                        </td>
                                        <td>
                                            <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option value="html">Mérida</option>
                                                <option value="css">Temax</option>

                                            </select>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Descripción"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="text-align: center">

                                            <label>Especificar otros criterios:</label>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Descripción"></textarea>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control resize_vertical"
                                                      placeholder="Descripción"></textarea>
                                        </td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-10">

                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-labeled btn-success">

                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!---Aqui termina el contenido de la pagina :v-->


        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>