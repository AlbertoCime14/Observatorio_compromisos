<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 4;
include 'application/views/masterpage/navegacion.php';
?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Formato 4</h1>-->
           
        </section>
        <!-- Main content -->
        
		<!---Aqui va el contenido de la pagina :v-->
      
     
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i> Identificación de involucrados
                            </h3>

                        </div>
                        <div class="panel-body">
                      <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                    <tr>
                                      <th>
                                      	Actores 
                                      </th>
                                      <th>
                                      	Descripción del tipo de relación con el programa
                                      </th>
                                      <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    </tr>
                                 <td>
                                        	<select class="selectpicker form-control">
                                        		<option>Seleccione...</option>
                                        		<option selected="selected">Publicos</option>
                                        	</select>
                                        </td>
                                        <td></td>
                                      
                                        <td style="text-align:center">
                                   <button type="button" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                </span> Guardar
                                            </button>
                                            &nbsp
                                            <button type="button" class="btn btn-labeled btn-danger">
                                                <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span> Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                    		<td>
                                    			<select class="selectpicker form-control">
                                        		<option>Ejemplo</option>
                                        	</select>
                                    		</td>
                                    		<td>
                                    			<textarea class="form-control"></textarea>
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