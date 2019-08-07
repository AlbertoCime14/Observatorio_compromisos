<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
<?php
$pag = 3;
include 'application/views/masterpage/navegacion.php';
?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--<h1>Formato 3</h1>-->
           
        </section>
        <!-- Main content -->
        
		<!---Aqui va el contenido de la pagina :v-->
      
     
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class=""></i>Vinculación con otros programas
                            </h3>

                        </div>
                        <div class="panel-body">
                      <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                    <tr>
                                        <th>Nombre del programa</th>
                                        <th>Tipo de programa 1=Federal. 2=Estatal. 3=Municipal. 4= Otro (especifique).</th>
                                        <th>Objetivo</th>
                                        <th>Población objetivo</th>
                                          <th>Bienes y servicios que provee</th>
                                            <th>Cobertura 1=Todos los municipios. 2=Regional. 3=Zonas prioritarias. 4=Municipal.</th>
                                             <th>Dirección o Depto. coordinador del programa</th>
                                               <th>1=Complemen tario 2=Posible duplicidad 3=Otro (especifique)</th>
                                               <th>Describa las interdepende ncias identificadas entre los programas</th>
                                               <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tr>
                          
                                        <td>
                                        	<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                        <td>
                                        		<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                        <td>
                                        	<textarea placeholder="Describe el objetivo" class="form-control" style="width: 116px; height: 115px;"></textarea>
                                        </td>
                                        <td>
                                        		<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                        <td>
                                        	<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                            <td>
                                        		<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                            <td>
                                        		<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                            <td>
                                        	<select class="selectpicker form-control" style="width:150px">
                                        		<option>Seleccione...</option>
                                        		<option>Seleccione...</option>
                                        	</select>
                                        </td>
                                        <td>
                                        	<textarea placeholder="Describe el objetivo" class="form-control" style="width: 116px; height: 115px;"></textarea>
                                        </td>
                                        <td>
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