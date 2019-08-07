<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 13;
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
                                <i class=""></i> Fuentes de información
                            </h3>

                        </div>
                        <div class="panel-body">
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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center">
                                        Indicadores
                                        </th>
                                        <th style="text-align: center">
                                            Variables
                                        </th>
                                        <th style="text-align: center">
                                        Registro Administrativo generado
                                        </th>
                                        <th style="text-align: center">Desagregación por sexo</th>
                                        <th style="text-align: center">
                                        Instrumento de recolección de la información
                                        </th>
                                        <th style="text-align: center">
                                        ¿En qué programa tiene o tendrá su base de datos?
                                        </th>
                                        <th style="text-align: center">Responsable de la producción de información</th>
                                        <th style="text-align: center">Periodicidad de la producción de la información</th>
                                        <th style="text-align: center">Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option value="1">Porcentaje de colocación de personas desempleadas y subempleadas</option>
                                        <option value="2">Porcentaje de apoyos económicos entregado</option>
                                        <option value="3">Porcentaje de apoyos en especie entregados</option>
                                        <option value="4">Porcentaje de personas colocadas en un empleo</option>
                                		</select>   
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option style="display:none;" value="1">Total de beneficiarios colocados en un empleo o que comienzan una iniciativa de ocupación por cuenta propia</option>
                                        <option style="display:none;" value="2">Total de beneficiarios atendidos por programas y servicios de vinculación del Servicio Nacional de Empleo, Yucatán</option>
                                        <option style="display:none;"value="3">Total de apoyos económicos entregados</option>
                                        <option style="display:none;" value="4">Total de apoyos económicos entregados programados</option>
                                        <option style="display:none;" value="5">Total de personas apoyadas</option>
                                        <option style="display:none;" value="6">Total de personas programadas a atender</option>
                                        <option style="display:none;" value="7">Total de personas colocadas a través de los servicios de vinculación laboral en el año actual</option>
                                        <option style="display:none;" value="8">Total de personas programadas a colocar a través de los servicios de vinculación laboral en el año actual</option>
                                		</select> 
                                        </td>
                                        <td>
                                        <textarea rows="4" class="form-control resize_vertical" placeholder="Ingrese aqui la información correspondiente"></textarea>
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                		</select>   
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option values="0">Seleccione</option>
                                        <option value="1">Registro Administrativo</option>
                                		</select>  
                                        </td>
                                        <td>
                                        <textarea rows="4" class="form-control resize_vertical" placeholder="Ingrese la información solicitada"></textarea> 
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option value="0">Seleccione</option>
                                        <option value="1">Unidad de Vinculación Laboral. Servicio Nacional de Empleo Yucatán.</option>
                                        <option value="2">Unidad de Apoyos Financieros a la Capacitación</option>
                                        <option value="3">Unidad de Vinculación Laboral. Servicio Nacional de Empleo Yucatán.</option>
                                        <option value="4">Unidad de Apoyos Financieros a la Capacitación</option>
                                		</select>
                                        </td>
                                        <td>
                                        <select class="form-control">
                                		<option values="0">Seleccione</option>
                                        <option value="1">Trimestral</option>
                                		</select>
                                        </td>
                                        <td>
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