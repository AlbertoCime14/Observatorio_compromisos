<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php
$pag = 1;
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
                <div id="panel_p_estatal" class="col-md-12" style="display: none">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Programas estatales previos
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--Etiqueta de entrada del row-->
                                <section>
                                    <div class="col-md-9">
                                        <select name="" id="programa_previo" class="form-control"
                                            onchange="informacion_programa()">

                                        </select>

                                    </div>
                                    <div class="col-md-3">
                                        <!-- Default unchecked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="chkAplica" onchange="validarcheck()" checked/>
                                            <label class="custom-control-label" for="chkAplica">Aplica</label>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-4">
                                        <label class="control-label">
                                            Política o programa
                                        </label>
                                        <select class="form-control" disabled="disabled" id="cboPoliticapp">
                                            <option value="0">Seleccione</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            Objetivo
                                        </label>
                                        <textarea class="form-control" disabled="disabled" id="txtObjetivo"></textarea>
                                    </div>
                                </section>
                                <section>

								<div class="col-md-4">
                                            <label class="control-label">
                                                Bienes y servicios que entregaba y se vinculan con el nuevo programa
                                            </label>
                                            <table class="table" id="bienes_servicio">
                                                <thead>
                                                    <th></th>

                                                </thead>
                                                <tbody id="body_bienes_servicio">
                                                </tbody>
                                            </table>
                                        </div>
                                  



                                    <div class="col-md-8">
                                        <label class="control-label">
                                            Descripción
                                        </label>
                                        <textarea class="form-control" 
                                            id="txtDescripcion" disabled="disabled"></textarea>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            Población objetivo
                                        </label>
                                        <input type="text" class="form-control" id="txtPoblacionobj" />
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">

									<div class="col-md-4">
                                        <label class="control-label">
                                            Lugar donde se implementó
                                        </label>
                                        <select class="form-control" multiple style="height:71px;" id="cboLugarimpl">
                                        </select>
                                    </div>
                                        <div class="col-md-8">
                                            <label class="control-label">
                                                Resultados de evaluaciones
                                            </label>
                                            <textarea class="form-control" id="txtResultados"></textarea>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-4">
                                        <label class="control-label">
                                            Liga del informe de evaluación
                                        </label>
                                        <input type="text" class="form-control" id="txtLiga" onkeyup="validarreferencia()"/>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            En caso que no sea público, adjuntar archivo
                                        </label>
                                        <div class="fileupload-buttonbar">
                                            <div class="col-lg-8">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                </br>
                                                <form method="POST" enctype="multipart/form-data" id="fileUploadForm_pep">
                                                <input type="text" name="randon" value="<?=md5(mt_rand(10,100))?>" id="randon" style="display:none">
                                                <input type="file" class="btn btn-success fileinput-button"
                                                    name="files" id="txtArchivo" onchange="add_files_pep()">
                                                </form></br>
                                                <!-- <button type="submit" class="btn btn-primary start">
                                                    <i class="fa fa-fw ti-export"></i>
                                                    <span>Iniciar carga de archivo</span>
                                                </button> -->
                                            </div>
                                            <!-- The global progress state -->
                                        </div>
                                    </div>
                                    <section>
                                    </section>
                                    <section>
                                        <div class="col-md-12">
                                            <div class="col-md-10"></div>
                                            <div class="col-md-1">
                                                <input id="btnGuardarProgramaEstatalP" class="btn btn-success" value="Guardar" type="submit"  onclick="add_programa_estaltal_previo()"/>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </div>
                            <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
                <!--Listado de pogramas estatales previos-->
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Listado de Programas estatales previos | <input id="nuevoprograma" type="submit"
                                    value="Nuevo programa" class="btn btn-success">
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--Etiqueta de entrada del row-->
                                <table class="table" id="tblProgramaP">
                                                <thead>
                                                    <th>Nombre del programa previo</th>
                                                    <th>Opciones</th>

                                                </thead>
                                                <tbody id="tblProgramaP_body">
                                                </tbody>
                                            </table>
                   
                            </div>
                            <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
                <!--Fin programas estatales previos-->
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Programas similares y buenas prácticas
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--Etiqueta de entrada del row-->
                                <section>
                                    <div class="col-md-12">
                                        <label class="">
                                            <div class="icheckbox_square-blue" style="position: relative;"><input
                                                    type="checkbox" name="c1" id="c1" value="" ins></div>
                                            No aplica
                                        </label>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-4">
                                        <label class="control-label">
                                            Política o programa
                                        </label>
                                        <select class="form-control">
                                            <option>A</option>
                                            <option>v</option>
                                            <option>c</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            Objetivo
                                        </label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-4">
                                        <label class="control-label">
                                            Lugar donde se implementó
                                        </label>
                                        <select class="form-control" multiple style="height:71px;">
                                            <option>A</option>
                                            <option>v</option>
                                            <option>c</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            Descripción
                                        </label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            Población objetivo
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <label class="control-label">
                                                Bienes y servicios que entregaba y se vinculan con el nuevo programa
                                            </label>
                                            <table>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tbody>
                                                    <tr>
                                                        <td style="width:239px;"><input type="text" class="form-control"
                                                                style="width: 95%;" /></td>
                                                        <td style="height:35px; width:81px;"><input type="submit"
                                                                class="btn btn-success" value="Guardar" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:239px;"><input type="text" class="form-control"
                                                                style="width: 95%;" disabled="disabled"
                                                                value="Ejemplo de uno" /></td>
                                                        <td style="height:35px; width:81px;"><input type="submit"
                                                                class="btn btn-warning" value="Eliminar" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="control-label">
                                                Resultados de evaluaciones
                                            </label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-4">
                                        <label class="control-label">
                                            Liga del informe de evaluación
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-md-8">
                                        <label class="control-label">
                                            En caso que no sea público, adjuntar archivo
                                        </label>
                                        <div class="fileupload-buttonbar">
                                            <div class="col-lg-8">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                </br><input type="file" class="btn btn-success fileinput-button"
                                                    name="files"></br>
                                                <button type="submit" class="btn btn-primary start">
                                                    <i class="fa fa-fw ti-export"></i>
                                                    <span>Iniciar carga de archivo</span>
                                                </button>
                                            </div>
                                            <!-- The global progress state -->
                                        </div>
                                    </div>
                                    <section>
                                    </section>
                                    <section>
                                        <div class="col-md-12">
                                            <div class="col-md-10"></div>
                                            <div class="col-md-1">
                                                <input class="btn btn-success" value="Guardar" type="submit" />
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </div>
                            <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
                <!--Listado de pogramas estatales previos-->
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Listado de Programas similares y buenas prácticas | <input type="submit"
                                    value="Nuevo programa" class="btn btn-success">
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--Etiqueta de entrada del row-->
                                <table class="table">
                                    <tr>
                                        <th>Nombre de Programas similares y buenas prácticas</th>
                                        <th>Opciones</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td><label>Nombre de un programa de ejemplo</label></td>
                                            <td class="ui-group-buttons">
                                                <a class="btn btn-success" role="button">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a class="btn btn-danger" role="button">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
                <!--Fin programas estatales previos-->
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Diagnostico
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--Etiqueta de entrada del row-->
                                <section>
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            Descripción de la problemática que origina el programa
                                        </label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            Identifica las fuentes utilizadas
                                        </label>
                                        <table class="table">
                                            <tr>
                                                <th>Fuente</th>
                                                <th>Fecha de consulta</th>
                                                <th>Liga</th>
                                                <th>Adjuntar el archivo</th>
                                                <th>Opciones</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" value="Ejemplo de fuente"
                                                            class="form-control">
                                                    </td>
                                                    <td><input type="date" class="form-control" /></td>
                                                    <td><input type="text" value="wwww.ok.com" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="file" tabindex="500"
                                                            class="btn btn-default fileinput-upload fileinput-upload-button glyphicon glyphicon-upload" /
                                                            value="Subir">
                                                    </td>
                                                    <td class="ui-group-buttons">
                                                        <a class="btn btn-success" role="button">
                                                            <span class="glyphicon glyphicon-floppy-disk"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>Ejemplo de fuente</label></td>
                                                    <td><input type="date" class="form-control" readonly /></td>
                                                    <td>www.ok.com</td>
                                                    <td>Sin archivo</td>
                                                    <td class="ui-group-buttons">
                                                        <a class="btn btn-danger" role="button">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>Ejemplo de fuente 2</label></td>
                                                    <td><input type="date" class="form-control" readonly /></td>
                                                    <td>Sin URL</td>
                                                    <td>Pack.zip</td>
                                                    <td class="ui-group-buttons">
                                                        <a class="btn btn-danger" role="button">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-6">
                                        <label class="control-label">
                                            ¿En que municipios se presenta con mayor incidencia?
                                        </label>
                                        <select class="form-control" multiple style="height:71px;">
                                            <option>A</option>
                                            <option>v</option>
                                            <option>c</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">
                                            Descripción
                                        </label>
                                        <table>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td style="width:239px;"><input type="text" class="form-control"
                                                            style="width: 95%;" /></td>
                                                    <td style="height:35px; width:81px;"><input type="submit"
                                                            class="btn btn-success" value="Guardar" /></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:239px;"><input type="text" class="form-control"
                                                            style="width: 95%;" disabled="disabled"
                                                            value="Ejemplo de uno" /></td>
                                                    <td style="height:35px; width:81px;"><input type="submit"
                                                            class="btn btn-warning" value="Eliminar" /></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:239px;"><input type="text" class="form-control"
                                                            style="width: 95%;" disabled="disabled"
                                                            value="Ejemplo de uno" /></td>
                                                    <td style="height:35px; width:81px;"><input type="submit"
                                                            class="btn btn-warning" value="Eliminar" /></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:239px;"><input type="text" class="form-control"
                                                            style="width: 95%;" disabled="disabled"
                                                            value="Ejemplo de uno" /></td>
                                                    <td style="height:35px; width:81px;"><input type="submit"
                                                            class="btn btn-warning" value="Eliminar" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            DExplica como ha evolucionado la problemática en los últimos años
                                        </label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section class="col-md-12">
                                    <div class="col-md-5">
                                        <label class="control-label">
                                            ¿La problemática se manifiesta de manera diferente en hombres y mujeres?
                                        </label>
                                        <div class="form-group">
                                            <form>
                                                <div class="col-sm-10">
                                                    <div class="iradio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                                value="option1"> SI
                                                        </label>
                                                    </div>
                                                    <div class="iradio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                                value="option2"> NO
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="control-label">
                                            Descríbelo
                                        </label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section class="col-md-12">
                                    <div class="col-md-5">
                                        <label class="control-label">
                                            ¿La problemática se manifiesta en mayor medida en la población indígena o
                                            maya hablante?
                                        </label>
                                        <div class="form-group">
                                            <form>
                                                <div class="col-sm-10">
                                                    <div class="iradio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios3"
                                                                value="option3"> SI
                                                        </label>
                                                    </div>
                                                    <div class="iradio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios4"
                                                                value="option4"> NO
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="control-label">
                                            Descríbelo
                                        </label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-6">
                                        <label class="control-label">
                                            ¿El programa atiende al menos a uno de los Derechos Económicos, Sociales,
                                            Culturales y Ambientales?
                                        </label>
                                        <select class="form-control" multiple style="height:71px;">
                                            <option>A</option>
                                            <option>v</option>
                                            <option>c</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">
                                            Especificar
                                        </label>
                                        </br></br>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </section>
                                <section>
                                    <div class="col-md-12">
                                        <div class="col-md-10"></div>
                                        <div class="col-md-1">
                                            <input class="btn btn-success" value="Guardar" type="submit" />
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
                <!--Fin programas estatales previos-->
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Involucrados
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--Etiqueta de entrada del row-->
                                <table class="table">
                                    <tr>
                                        <th>Actor</th>
                                        <th>Tipo de actor</th>
                                        <th>Posición</th>
                                        <th>Importancia</th>
                                        <th>Opciones</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-control" type="text" /></td>
                                            <td><input class="form-control" type="text" /></td>
                                            <td><input class="form-control" type="text" /></td>
                                            <td><input class="form-control" type="text" /></td>
                                            <td class="ui-group-buttons">
                                                <a class="btn btn-success" role="button">
                                                    <span class="glyphicon glyphicon-floppy-disk"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Nombre de un programa de ejemplo</label></td>
                                            <td>Ejemplo t actor</td>
                                            <td>Ejemplo pocision</td>
                                            <td>Ejemplo importancia</td>
                                            <td class="ui-group-buttons">
                                                <a class="btn btn-danger" role="button">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--Etiqueta de cierre del row-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<input type="text" value="<?=base64_decode($this->uri->segment(3))?>" id="programa" style="display: none" />

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

<script src="<?=base_url();?>js/formatos/formatodiagnostico.js"></script>