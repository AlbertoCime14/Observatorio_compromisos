<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 17;
include 'application/views/masterpage/navegacion.php';
?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Fuentes de financiamiento</h1>-->
           
        </section>
        <!-- Main content -->
      
		<!---Aqui va el contenido de la pagina :v-->
      
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Fuentes de financiamiento <!--Llene los siguientes campos-->
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
                                        Fuente de financiamiento 
                                        </th>
                                       
                                        <th style="text-align: center">
                                        Año 1 
                                        </th>
                                        
                                        <th style="text-align: center">
                                        Año 2 
                                        </th>
                                        
                                        <th style="text-align: center">
                                        Año 3 
                                        </th>
                                        
                                        <th style="text-align: center">
                                        Año 4 
                                        </th>
                                    
                                        <th style="text-align: center">
                                        Año 5
                                        </th>
                                       
                                        <th style="text-align: center">
                                        Opciones
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                       <td>Recursos Federales</td>
                                       <td><input type="number" class="form-control" name="" id="" value="41668049"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="42918090"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="44205633"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="45531802"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="46897756"></td>                                       
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
                                    <td>Recursos fiscales propios</td>
                                       <td><input type="number" class="form-control" name="" id="" value="6423058"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6615749"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="6814222"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="7018648"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="7229208"></td>
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
                                    <td>Total</td>
                                       <td><input type="number" class="form-control" name="" id="" value="48091107"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="49533839"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="51019855"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="52550450"></td>
                                       <td><input type="number" class="form-control" name="" id="" value="54126964"></td>
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