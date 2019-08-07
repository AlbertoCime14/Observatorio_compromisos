<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 14;
include 'application/views/masterpage/navegacion.php';
?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Informe de desempeño</h1>-->
           
        </section>
        <!-- Main content -->
      
		<!---Aqui va el contenido de la pagina :v-->
      
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Informe de desempeño
                                <!-- Llene los siguientes campos -->
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
                                        Nombre del reporte 
                                        </th>
                                        <th style="text-align: center">
                                        Periodicidad 
                                        </th>
                                        <th style="text-align: center">
                                        Responsable de la integración
                                        </th>
                                        <th style="text-align: center">
                                            Opciones
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option value="1">Avance trimestral de indicadores de programas presupuestarios</option>
                                        <option value="2">Anexo de resultados de los programas presupuestarios de la cuenta pública (indicadores y estadística)</option>
                                        <option value="3">Informe de gobierno</option>
                                        <option value="4">Otros: Programa Anual de Trabajo</option>
                                		</select>   
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option value="1">Mensual</option>
                                        <option value="2">Trimestral</option>
                                        <option value="3">Anual</option>
                                		</select> 
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option value="1">Subsecretaría del Trabajo</option>
                                		</select> 
                                        </td>
                                       
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