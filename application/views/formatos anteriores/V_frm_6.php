<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 6;
include 'application/views/masterpage/navegacion.php';
?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Formato 6</h1>-->
            
        </section>
        <!-- Main content -->
        <!---Aqui inicia e contenido  de la pagina :v-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Cobertura Geográfica
                            </h3>

                        </div>

                        <div class="panel-body">
                            <section>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Agregue un nuevo municipio
                                            </label>
                                            <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option value="html">Mérida</option>
                                                <option value="css">Mérida</option>
                                                <option value="css">Mérida</option>
                                                <option value="css">Mérida</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding-top: 2.3%">
                                        <button type="button" class="btn btn-labeled btn-success">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </span> Agregar
                                        </button>
                                    </div>
                                </div>
                            </section>


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center">
                                            Nombre del municipio
                                        </th>
                                        <th style="text-align: center" >Localidad</th>
                                        <th style="text-align: center">
                                            Población total
                                        </th>
                                        <th style="text-align: center">
                                            % de poblacion urbana
                                        </th>
                                        <th style="text-align: center">% de poblacion rural</th>
                                        <th style="text-align: center">Habitantes por  tamaño de localidad</th>
                                        <th style="text-align: center" class="col-sm-2">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                        <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                            <option value="">
                                                Seleccione un municipio
                                            </option>
                                            <option value="html">Merida</option>
                                            <option value="css">Temax</option>
                                            <option value="css">Motul</option>
                                        </select>
                                        </td>
                                        <td>
                                        <select id="skill" name="skill" class="form-control"    data-bv-field="skill">
                                            <option value="">
                                                Seleccione una localidad
                                            </option>
                                            <option value="html">Noc Ac</option>
                                            
                                        </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="input-text" placeholder="Input text">
                                        </td>
                                        <td>
                                             <input type="number" class="form-control" id="input-text" placeholder="Input text">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="input-text" placeholder="Input text">
                                        </td>
                                        <td>
                                        <select id="skill" name="skill" class="form-control" data-bv-field="skill">
                                            <option value="">
                                                Seleccione un rango
                                            </option>
                                            <option value="html">Hasta 500</option>
                                            <option value="css">501-2500</option>
                                            <option value="css">2501-10,000</option>
                                            <option value="css">10,001-15,000</option>
                                            <option value="css">15,000-50,000</option>
                                            <option value="css">Más de 50,000</option>
                                        </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Guardar
                                            </button>
                                            &nbsp
                                            <button type="submit" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                   
                                   
                                    
                                    </tbody>
                                </table>
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