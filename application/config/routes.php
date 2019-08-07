<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'control_pagina/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




//==================== inicio de sesión ===========
$route['login'] = 'Control_login/inicia_sesion';

//======================Carlos====================================//
//====================Formatos antiguos=================//
/* $route['formatos/frm_1'] = 'C_Frm_1/index';
$route['formatos/frm_2'] = 'C_Frm_2/index';
$route['formatos/frm_3'] = 'C_Frm_3/index';
$route['formatos/frm_4'] = 'C_Frm_4/index';
$route['formatos/frm_5'] = 'C_Frm_5/index';

$route['modificaciones/frm_20'] = 'C_Frm_20/actualizarproblema';
$route['consultas/frm_20/(:any)'] = 'C_Frm_20/consultar_problema'; */

//===============nuevos formatos=====================//
$route['formatos/diagnostico/(:any)'] = 'C_Diagnostico/index';
$route['formatos/bienesyservicios/(:any)'] = 'C_Bienesys/index';
$route['formatos/poblaciones/(:any)'] = 'C_Poblaciones/index';
$route['formatos/focalizacion/(:any)'] = 'C_Focalizacion/index';
$route['formatos/arbolproblema/(:any)'] = 'C_Problemas/index';
$route['formatos/arbolobjetivo/(:any)'] = 'C_Objetivo/index';


//=======================Acciones programas===========//
$route['agregar/programa'] = 'C_Programa/agregar_programa';
$route['listar/programa'] = 'C_Programa/listar_programas';
$route['listar/programa_previo'] = 'C_Programa/listar_programas_previos_combo';
$route['listar/programa_previo_especifico/table'] = 'C_Programa/listar_programas_previos_tabla';
$route['listar/programa_previo_especifico'] = 'C_Programa/listar_programas_previos';
$route['eliminar/programa'] = 'C_Programa/actualizar_status_objetivo';

//==============formato diagnostico====================//
$route['listar/bienes_servicio'] = 'C_Programa/listar_bienes_servicios';
$route['agregar/programa_estatal_previo'] = 'C_Diagnostico/agregar_programa_estatal_previo';
$route['eliminar/programa_estatal_previo'] = 'C_Programa/eliminar_programa_estatal_previo';
$route['agregar/lugar_implementacion'] = 'C_Diagnostico/agregar_lugarimplementacion';
$route['listar/lugar_implementacion'] = 'C_Diagnostico/listar_lugarimplementacion';

/**
 * Para agregar y eliminar los archivos de dignostico apartado poblacion objetivo
 */
$route['agregar/programaestatalprevio/file'] = 'C_Diagnostico/add_files_pep';
$route['borrar/programaestatalprevio/file'] = 'C_Diagnostico/drop_files_pep';


//====================combox======================//
$route['listar/tipoprograma'] = 'C_Programa/listar_tipoprograma';
$route['listar/criteriofocalizacion'] = 'C_Focalizacion/listar_criterios';
$route['listar/municipio'] = 'C_Diagnostico/listar_municipios';



//====================recuperado json de arbol problemas==============//
$route['listar/arbolproblema/(:any)'] = 'C_Problemas/consultar_problema';
$route['actualizacion/arbolproblema'] = 'C_Problemas/actualizarproblema';

//====================recuperado json de arbol  objetivos==============//

$route['listar/arbolobjetivo/(:any)'] = 'C_Objetivo/consultar_objetivo';
$route['actualizacion/arbolobjetivo'] = 'C_Objetivo/actualizarobjetivo';

//=========================criterios de focalizacion================//
$route['listar/criteriofocalizacion_values/(:any)'] = 'C_Focalizacion/listar_criteriofocalizacion';
$route['agregar/criteriofocalizacion'] = 'C_Focalizacion/agregar_criteriosfocalizacioncomplemento';
$route['actualizacion/criteriofocalizacion'] = 'C_Focalizacion/modificar_criteriosfocalizacioncomplemento';
$route['eliminar/criteriofocalizacion'] = 'C_Focalizacion/eliminar_criteriosfocalizacioncomplemento';

/**
 * Para agregar y eliminar los criterios de focalizacion
 */
$route['agregar/criteriofocalizacion/file'] = 'C_Focalizacion/add_files';
$route['borrar/criteriofocalizacion/file'] = 'C_Focalizacion/drop_files';



















































//======================Alberto====================================//
$route['formatos/frm_6'] = 'C_Frm_6/index';
$route['formatos/frm_7'] = 'C_Frm_7/index';
$route['formatos/frm_8'] = 'C_Frm_8/index';
$route['formatos/frm_9'] = 'C_Frm_9/index';
$route['formatos/frm_10'] = 'C_Frm_10/index';
$route['formatos/frm_11'] = 'C_Frm_11/index';
$route['formatos/frm_12'] = 'C_Frm_12/index';
$route['formatos/frm_21'] = 'C_Frm_21/index';
$route['modificaciones/frm_21'] = 'C_Frm_21/actualizarobjetivo';
$route['consultas/frm_21/(:any)'] = 'C_Frm_21/consultar_objetivo';
$route['consultasObj/frm_21/(:any)'] = 'C_Frm_21/cosultar_objetivos';
$route['listar_programas'] = 'Control_pagina/index';
$route['actividades/nombrefuente'] = 'control_combobox/busquedanombrefuente/';
$route['consultas/frm_12/periodicidad'] = 'C_Frm_12/consultar_periodicidad';
$route['consultas/frm_12/tendencia'] = 'C_Frm_12/consultar_tendencia';
$route['consultas/frm_12/ambitos'] = 'C_Frm_12/consultar_ambitos';
$route['consultas/frm_12/desempenos'] = 'C_Frm_12/consultar_desempenios';


//=======================Acciones bienes y servicios===========//
$route['acciones/bienesyservicios/agregar'] = 'C_Bienesys/AgregarServicio';
$route['acciones/bienesyservicios/listar_unidad_medida'] = 'C_Bienesys/listar_unidad_medida';
$route['acciones/bienesyservicios/eliminar'] = 'C_Bienesys/EliminarServicio';
$route['acciones/bienesyservicios/listar/(:any)'] = 'C_Bienesys/ListarServicios';
$route['acciones/bienesyservicios/actualizar/(:any)'] = 'C_Bienesys/ActualizarServicio';

//=======================Acciones poblaciones===========//
$route['acciones/poblaciones/agregar'] = 'C_Poblaciones/AgregarPoblaciones';
$route['acciones/poblaciones/listar_unidad_medida'] = 'C_Poblaciones/'; //esta ruta puede que sirva
$route['acciones/poblaciones/eliminar'] = 'C_Poblaciones/EliminarPoblacion';
$route['acciones/poblaciones/listar/(:any)'] = 'C_Poblaciones/ListarDefPoblacion';
$route['acciones/poblaciones/actualizar'] = 'C_Poblaciones/ActualizarPoblacion';
$route['acciones/poblaciones/listar_grupo_edad'] = 'C_Poblaciones/listar_grupo_Edad';

//=======================Acciones otros criterios===========//
$route['formatos/criterios/(:any)/(:any)'] = 'C_otros_criterios/index';
$route['acciones/criterios/agregar'] = 'C_otros_criterios/AgregarCriterio';
$route['acciones/criterios/listar/(:any)'] = 'C_otros_criterios/ListarCriterios';
$route['acciones/criterios/eliminar'] = 'C_otros_criterios/EliminarCriterio';
$route['acciones/criterios/actualizar'] = 'C_otros_criterios/ActualizarCriterio';

//=======================Acciones de fuentes de las poblaciones===========//
$route['formatos/Pfuentes/(:any)/(:any)'] = 'C_fuentes_otros/index';
$route['acciones/Pfuentes/agregar'] = 'C_fuentes_otros/AgregarCriterio';
$route['acciones/Pfuentes/listar/(:any)'] = 'C_fuentes_otros/ListarCriterios';
$route['acciones/Pfuentes/eliminar'] = 'C_fuentes_otros/EliminarCriterio';
$route['acciones/Pfuentes/actualizar'] = 'C_fuentes_otros/ActualizarCriterio';
$route['acciones/Pfuentes/file'] = 'C_fuentes_otros/add_files';
$route['borrar/criteriofocalizacion/file'] = 'C_fuentes_otros/drop_files';







































//======================Randy====================================//

$route['formatos/frm_13'] = 'C_Frm_13/index';
$route['formatos/frm_14'] = 'C_Frm_14/index';
$route['formatos/frm_15'] = 'C_Frm_15/index';
$route['formatos/frm_16'] = 'C_Frm_16/index';
$route['formatos/frm_17'] = 'C_Frm_17/index';































//======================Jorge E.====================================//
//$route['formatos/frm_10'] = 'Control_pagina/form/10';
//$route['formatos/frm_11'] = 'Control_pagina/form/11';
//$route['formatos/frm_12'] = 'Control_pagina/form/12';
$route['formatos/frm_18'] = 'Control_pagina/form/18';
$route['formatos/frm_19'] = 'Control_pagina/form/19';
$route['formatos/frm_20'] = 'C_Frm_20/index';
