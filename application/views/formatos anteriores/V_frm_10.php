<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $pag = 10;
    include 'application/views/masterpage/navegacion.php';
    ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Fuentes de información</h1>-->

        </section>
        <!-- Main content -->

        <!---Aqui va el contenido de la pagina :v-->

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Matriz de indicador
                            </h3>

                        </div>
                        <div class="panel-body">
                            <section>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Nuevo elemento a la matriz
                                            </label>
                                            <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option value="html">Fin</option>
                                                <option value="css">Propósito</option>
                                                <option value="css">Componentes</option>
                                                <option value="css">Actividades</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding-top: 2.3%">
                                        <button type="button" class="btn btn-labeled btn-success">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </span> Crear
                                        </button>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Fin
                                            </label>

                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">
                                                Resumen narrativo
                                            </th>
                                            <th style="text-align: center">
                                                Indicadores
                                            </th>
                                            <th style="text-align: center">
                                                Medio de verificación
                                            </th>
                                            <th style="text-align: center">Supuestos</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                           <textarea rows="8" cols="50" style="resize:none;" class="form-control resize_vertical"
                                                     placeholder="Ingrese aqui la información correspondiente">Contribuir a incrementar la calidad del empleo en Yucatán mediante la ocupación de las personas desempleadas o subempledas
                                           </textarea>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Crecimiento Promedio de Trabajadores Asegurados ante el IMSS en Yucatán
                                                    </option>
                                                    <option  value="2">Porcentaje de colocación de personas desempleadas y subempleadas
                                                    </option>
                                                    <option  value="3">Porcentaje de apoyos económicos entregado
                                                    </option>
                                                    <option  value="4">Porcentaje de apoyos en especie entregados
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Cubos dinámicos IMSS
                                                    </option>
                                                    <option  value="2">Sistema de Información de Apoyo al Empleo Web (SISPAEW ). Reporte Detalle de Acciones.
                                                    </option>
                                                    <option  value="3">Unidad de Apoyos Financieros a la Capacitación. Servicio Nacional de Empleo Yucatán (SNEY)
                                                    </option>
                                                    <option  value="4">Sistema de Información de Apoyo al Empleo Web (SISPAEW). Reporte Detalle de Acciones.
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1">Las empresas tienen interés de contratar a los beneficiarios.
                                                    </option>
                                                    <option  value="2">Los beneficiarios concluyen los procesos de capacitación.
                                                    </option>
                                                    <option  value="3">Los beneficiarios le dan el uso adecuado a las herramientas.
                                                    </option>
                                                    <option  value="4" selected>Los buscadores de empleo y los empleadores hacen uso del servicio de vinculación laboral.
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Propósitos
                                            </label>

                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">
                                                Resumen narrativo
                                            </th>
                                            <th style="text-align: center">
                                                Indicadores
                                            </th>
                                            <th style="text-align: center">
                                                Medio de verificación
                                            </th>
                                            <th style="text-align: center">Supuestos</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                           <textarea rows="8" cols="50" style="resize:none;" class="form-control resize_vertical"
                                                     placeholder="Ingrese aqui la información correspondiente">Contribuir a incrementar la calidad del empleo en Yucatán mediante la ocupación de las personas desempleadas o subempledas
                                           </textarea>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Crecimiento Promedio de Trabajadores Asegurados ante el IMSS en Yucatán
                                                    </option>
                                                    <option  value="2">Porcentaje de colocación de personas desempleadas y subempleadas
                                                    </option>
                                                    <option  value="3">Porcentaje de apoyos económicos entregado
                                                    </option>
                                                    <option  value="4">Porcentaje de apoyos en especie entregados
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Cubos dinámicos IMSS
                                                    </option>
                                                    <option  value="2">Sistema de Información de Apoyo al Empleo Web (SISPAEW ). Reporte Detalle de Acciones.
                                                    </option>
                                                    <option  value="3">Unidad de Apoyos Financieros a la Capacitación. Servicio Nacional de Empleo Yucatán (SNEY)
                                                    </option>
                                                    <option  value="4">Sistema de Información de Apoyo al Empleo Web (SISPAEW). Reporte Detalle de Acciones.
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1">Las empresas tienen interés de contratar a los beneficiarios.
                                                    </option>
                                                    <option  value="2">Los beneficiarios concluyen los procesos de capacitación.
                                                    </option>
                                                    <option  value="3">Los beneficiarios le dan el uso adecuado a las herramientas.
                                                    </option>
                                                    <option  value="4" selected>Los buscadores de empleo y los empleadores hacen uso del servicio de vinculación laboral.
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Componentes
                                            </label>

                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">
                                                Resumen narrativo
                                            </th>
                                            <th style="text-align: center">
                                                Indicadores
                                            </th>
                                            <th style="text-align: center">
                                                Medio de verificación
                                            </th>
                                            <th style="text-align: center">Supuestos</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                           <textarea rows="8" cols="50" style="resize:none;" class="form-control resize_vertical"
                                                     placeholder="Ingrese aqui la información correspondiente">Contribuir a incrementar la calidad del empleo en Yucatán mediante la ocupación de las personas desempleadas o subempledas
                                           </textarea>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Crecimiento Promedio de Trabajadores Asegurados ante el IMSS en Yucatán
                                                    </option>
                                                    <option  value="2">Porcentaje de colocación de personas desempleadas y subempleadas
                                                    </option>
                                                    <option  value="3">Porcentaje de apoyos económicos entregado
                                                    </option>
                                                    <option  value="4">Porcentaje de apoyos en especie entregados
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Cubos dinámicos IMSS
                                                    </option>
                                                    <option  value="2">Sistema de Información de Apoyo al Empleo Web (SISPAEW ). Reporte Detalle de Acciones.
                                                    </option>
                                                    <option  value="3">Unidad de Apoyos Financieros a la Capacitación. Servicio Nacional de Empleo Yucatán (SNEY)
                                                    </option>
                                                    <option  value="4">Sistema de Información de Apoyo al Empleo Web (SISPAEW). Reporte Detalle de Acciones.
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1">Las empresas tienen interés de contratar a los beneficiarios.
                                                    </option>
                                                    <option  value="2">Los beneficiarios concluyen los procesos de capacitación.
                                                    </option>
                                                    <option  value="3">Los beneficiarios le dan el uso adecuado a las herramientas.
                                                    </option>
                                                    <option  value="4" selected>Los buscadores de empleo y los empleadores hacen uso del servicio de vinculación laboral.
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </section>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Actividades
                                            </label>

                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">
                                                Resumen narrativo
                                            </th>
                                            <th style="text-align: center">
                                                Indicadores
                                            </th>
                                            <th style="text-align: center">
                                                Medio de verificación
                                            </th>
                                            <th style="text-align: center">Supuestos</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                           <textarea rows="8" cols="50" style="resize:none;" class="form-control resize_vertical"
                                                     placeholder="Ingrese aqui la información correspondiente">Contribuir a incrementar la calidad del empleo en Yucatán mediante la ocupación de las personas desempleadas o subempledas
                                           </textarea>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Crecimiento Promedio de Trabajadores Asegurados ante el IMSS en Yucatán
                                                    </option>
                                                    <option  value="2">Porcentaje de colocación de personas desempleadas y subempleadas
                                                    </option>
                                                    <option  value="3">Porcentaje de apoyos económicos entregado
                                                    </option>
                                                    <option  value="4">Porcentaje de apoyos en especie entregados
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1" selected>Cubos dinámicos IMSS
                                                    </option>
                                                    <option  value="2">Sistema de Información de Apoyo al Empleo Web (SISPAEW ). Reporte Detalle de Acciones.
                                                    </option>
                                                    <option  value="3">Unidad de Apoyos Financieros a la Capacitación. Servicio Nacional de Empleo Yucatán (SNEY)
                                                    </option>
                                                    <option  value="4">Sistema de Información de Apoyo al Empleo Web (SISPAEW). Reporte Detalle de Acciones.
                                                    </option>

                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" style="width:250px">
                                                    <option value="0">Seleccione</option>
                                                    <option  value="1">Las empresas tienen interés de contratar a los beneficiarios.
                                                    </option>
                                                    <option  value="2">Los beneficiarios concluyen los procesos de capacitación.
                                                    </option>
                                                    <option  value="3">Los beneficiarios le dan el uso adecuado a las herramientas.
                                                    </option>
                                                    <option  value="4" selected>Los buscadores de empleo y los empleadores hacen uso del servicio de vinculación laboral.
                                                    </option>

                                                </select>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
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