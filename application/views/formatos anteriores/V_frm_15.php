<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 15;
include 'application/views/masterpage/navegacion.php';
?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Programación de ate...</h1>-->
           
        </section>
        <!-- Main content -->
      
		<!---Aqui va el contenido de la pagina :v-->
      
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Programación de atención de la población objetivo <!--Llene los siguientes campos-->
                            </h3>

                        </div>
                        <div class="panel-body">
                            <!--
                        <section>
                                <div class="row">
                        		  <div class="col-md-10">
                        		  			 	<div class="form-group">
                                    <label class="control-label">
                                      Nuevo indicador
                                    </label>
                                		<input type="text" name="" id="" class="form-control" placeholder="Ingrese el nombre del indicador">                                   
                                </div>
                        		 </div>
                                 <div class="col-md-2" style="padding-top: 2.3%">
                                        <button type="button" class="btn btn-labeled btn-success">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </span> Guardar
                                        </button>
                                    </div>
                                 </div>
                                </section>
-->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center">
                                        Concepto 
                                        </th>
                                        <th style="text-align: center">
                                        Total de personas a atender los próximos 5 años 
                                        </th>
                                        <th style="text-align: center">
                                        Año 1 
                                        </th>
                                        <th style="text-align: center">
                                        % de la población objetivo
                                        </th>
                                        <th style="text-align: center">
                                        Año 2 
                                        </th>
                                        <th style="text-align: center">
                                        % de la población objetivo
                                        </th>
                                        <th style="text-align: center">
                                        Año 3 
                                        </th>
                                        <th style="text-align: center">
                                        % de la población objetivo
                                        </th>
                                        <th style="text-align: center">
                                        Año 4 
                                        </th>
                                        <th style="text-align: center">
                                        % de la población objetivo
                                        </th>
                                        <th style="text-align: center">
                                        Año 5
                                        </th>
                                        <th style="text-align: center">
                                        % de la población objetivo
                                        </th>
                                        <th style="text-align: center">
                                        Opciones
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                       <td>Total</td>
                                       <td><input type="number" class="form-control" name="" id="" value="60019"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="11973"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="56.5"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="11872"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="56.0"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="12090"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="57.1"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="11732"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="55.4"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="12352"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="58.3"></td>
                                        <td><center>
                                            <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Agregar
                                            </button>
                                            
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Hombres</td>
                                       <td><input type="number" class="form-control" name="" id="" value="26772"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="5153"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="41.5"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="5422"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="43.7"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="4890"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="39.4"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="5133"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="41.3"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6174"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="49.7"></td>
                                        <td><center>
                                            <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Agregar
                                            </button>
                                            
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Mujeres</td>
                                       <td><input type="number" class="form-control" name="" id="" value="33247"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6820"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="77.8"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6450"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="73"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="7200"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="82"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6599"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="752"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6178"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="70"></td>
                                        <td><center>
                                            <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Agregar
                                            </button>
                                            
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Hablantes de lengua indígena</td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value="1092"></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                        <td><center>
                                            <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Agregar
                                            </button>
                                            
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Grupo de edad</td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                      
                                        <td><center>
                                            <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Agregar
                                            </button>
                                            
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Otros criterios de focalización</td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                       <td><input type="number" class="form-control" name="" id="" value=""></td>
                                        <td><center>
                                            <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Agregar
                                            </button>
                                            
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                            </center>
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

        
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>