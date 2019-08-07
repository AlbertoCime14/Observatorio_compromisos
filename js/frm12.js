function prueba() {
    /*  ejemplo var a = 5;
        var b = 10;
        console.log(`Quince es ${a + b} y\nno ${2 * a + b}.`); */
    var variablea = ` <section>
`
    `
                                            <div class="col-md-2" style="margin-top: 70px; text-align: center">
                                                <label class="control-label">
                                                    Variable A
                                                </label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">
                                                            Nombre:
                                                        </label>

                                                        <textarea class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div>
                                                        <label class="control-label">
                                                            Medio de verificación:
                                                        </label>

                                                        <textarea class="form-control"
                                                                  placeholder="Describa el medio de verificacion"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>`;
    var variableb = ` <section>
                                            <div class="col-md-2" style="margin-top: 70px; text-align: center">
                                                <label class="control-label">
                                                    Variable B
                                                </label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">
                                                            Nombre:
                                                        </label>

                                                        <textarea class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div>
                                                        <label class="control-label">
                                                            Medio de verificación:
                                                        </label>

                                                        <textarea class="form-control"
                                                                  placeholder="Describa el medio de verificacion"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>`;
    var variablec = ` <section>
                                            <div class="col-md-2" style="margin-top: 70px; text-align: center">
                                                <label class="control-label">
                                                    Variable C
                                                </label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">
                                                            Nombre:
                                                        </label>

                                                        <textarea class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div>
                                                        <label class="control-label">
                                                            Medio de verificación:
                                                        </label>

                                                        <textarea class="form-control"
                                                                  placeholder="Describa el medio de verificacion"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>`;
    var variabled = ` <section>
                                            <div class="col-md-2" style="margin-top: 70px; text-align: center">
                                                <label class="control-label">
                                                    Variable D
                                                </label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">
                                                            Nombre:
                                                        </label>

                                                        <textarea class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div>
                                                        <label class="control-label">
                                                            Medio de verificación:
                                                        </label>

                                                        <textarea class="form-control"
                                                                  placeholder="Describa el medio de verificacion"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>`;

    var variableE = ` <section>
                                            <div class="col-md-2" style="margin-top: 70px; text-align: center">
                                                <label class="control-label">
                                                    Variable E
                                                </label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">
                                                            Nombre:
                                                        </label>

                                                        <textarea class="form-control" placeholder=""></textarea>
                                                    </div>
                                                    <div>
                                                        <label class="control-label">
                                                            Medio de verificación:
                                                        </label>

                                                        <textarea class="form-control"
                                                                  placeholder="Describa el medio de verificacion"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                        </section>`;
    var seleccion = document.getElementById("tipo_algoritmo").value;

    var numero_variables = 2; //esta variable haria la peticion ajax para consultar el numero de variables del tipo de algoritmo

    if (seleccion == "ejemplo1") {
        if (numero_variables == 2) {

            $("#variables").append(variablea);
            $("#variables").append(variableb);
        }
    } else if (seleccion == "ejemplo2") {
        $("#variables").append(variablea);
        $("#variables").append(variableb);
        $("#variables").append(variablec);
    }


    //console.log(variableb);
}

(function() {
    busquedapediodicidadcalculo();
})();

//=============================================Metodo para recuperar la periodicidad====================//
function busquedapediodicidadcalculo() {
    /*Url estatica*/
    var url = document.getElementById("url").value;
    $.ajax({
        type: "GET",
        url: url + "consultas/frm_12/periodicidad",
        data: "ok=ok",
        success: function(data) {
            value = 0;
            JSON.parse(data, function(k, v) {
                if (isNaN(v) === true) {
                    if (typeof v === 'object') {} else {
                        //texto
                        var o = new Option("option text", value);
                        $("#cbo_nombre_periodicidad").append(o);
                        $(o).html(v);
                    }
                } else {
                    //numero
                    value = v;
                }

            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);

        }
    });
}

(function() {
    recueperar_tendencia();
})();

//=============================================Metodo para recuperar la tendencia====================//
function recueperar_tendencia() {
    /*Url estatica*/
    var url = document.getElementById("url").value;
    $.ajax({
        type: "GET",
        url: url + "consultas/frm_12/tendencia",
        data: "ok=ok",
        success: function(data) {
            value = 0;
            JSON.parse(data, function(k, v) {
                if (isNaN(v) === true) {
                    if (typeof v === 'object') {} else {
                        //texto
                        var o = new Option("option text", value);
                        $("#cbo_nombre_tendencia").append(o);
                        $(o).html(v);
                    }
                } else {
                    //numero
                    value = v;
                }

            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);

        }
    });
}

(function() {
    recuperar_ambito();
})();

//=============================================Metodo para recuperar la ambito====================//
function recuperar_ambito() {
    /*Url estatica*/
    var url = document.getElementById("url").value;
    $.ajax({
        type: "GET",
        url: url + "consultas/frm_12/ambitos",
        data: "ok=ok",
        success: function(data) {
            value = 0;
            JSON.parse(data, function(k, v) {
                if (isNaN(v) === true) {
                    if (typeof v === 'object') {} else {
                        //texto
                        var o = new Option("option text", value);
                        $("#cbo_nombre_medicion").append(o);
                        $(o).html(v);
                    }
                } else {
                    //numero
                    value = v;
                }

            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);

        }
    });
}

(function() {
    recuperar_desempenio();
})();

//=============================================Metodo para recuperar el desempeño====================//
function recuperar_desempenio() {
    /*Url estatica*/
    var url = document.getElementById("url").value;
    $.ajax({
        type: "GET",
        url: url + "consultas/frm_12/desempenos",
        data: "ok=ok",
        success: function(data) {
            value = 0;
            JSON.parse(data, function(k, v) {
                if (isNaN(v) === true) {
                    if (typeof v === 'object') {} else {
                        //texto
                        var o = new Option("option text", value);
                        $("#cbo_dimension_desempenio").append(o);
                        $(o).html(v);
                    }
                } else {
                    //numero
                    value = v;
                }

            });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);

        }
    });
}

//=============================================Metodo para guardar el indicador====================//
function GuardarIndicador() {

    /** url del sitio**/
    var url = document.getElementById("url").value;
    /** id de la actividad modificando**/
    var txtActividadId = document.getElementById('txtActividadId').value;

    /*** Sive para poner el nombre de la actividad estrategica****/
    var Nombre = document.getElementById('txtNombreactividad').value;
    /**Sirve para obtener el objetivo general de la actividad***/
    var objetivo_general = document.getElementById('txtObjetivo').value;
    /*****Sirve para obtener la descripcion de la actividad*********/
    var descripcion = document.getElementById('txtDescripcion').value;
    /** id Lineas de accion**/
    var cboLineaacion = document.getElementById('cboLineaacion').value;
    /** id UBP**/
    var cboUbp = document.getElementById('cboUbp').value;
    /** id poblacion objetivo**/
    var cobPoblacion = document.getElementById('cobPoblacion').value;
    /** id origen de la fuente de financiamiento**/
    var cbofuente = 0;
    /*var cbofuente=document.getElementById('cbofuente').value;*/
    /** id de la fuente de financiamiento**/
    var nombrefuente = document.getElementById('nombrefuente').value;
    /** Sacar el monto propio**/
    //var txtMontoPropio=document.getElementById('txtMontoPropio').value;
    /** Sacarl el monto de otras fuentes**/
    /**
     var txtMontoOtras=document.getElementById('txtMontoOtras').value;
     **/
    /** Para sacar la fecha de inicio**/
    var txtFechaInicio = document.getElementById('txtFechaInicio').value;
    /** Para sacar la fecha de fin**/
    var txtFechafin = document.getElementById('txtFechafin').value;

    /*** Sive para poner el nombre de la actividad estrategica****/

    //===============================Campos utilizables cuando se requieran===================//
    var elaboro = "example";
    var autorizo = "example";

    //===========================llamada  de ajax paara actualizar los datos===============//
    /******** Datos de la actualizacion  *********/
    var datos = "id_actividad_estrategica=" + txtActividadId + "&Nombre=" + Nombre + "&objetivo_general=" + objetivo_general + "&descripcion=" + descripcion + "+&fecha_inicio=" + txtFechaInicio + "&fecha_fin=" + txtFechafin + "&elaboro=" + elaboro + "&autorizo=" + autorizo + "&cat_lineaaccion_ped_lineaaccionid=" + cboLineaacion + "&ubp_id_ubp=" + cboUbp + "&poblacion_objetivo_id_poblacion=" + cobPoblacion + "&origen_fuente_id_origen=" + cbofuente + "&fuente_financiamiento_id_ff=" + nombrefuente;
    // var datos="id_actividad_estrategica="+txtActividadId+"&objetivo_general="+objetivo_general+"&descripcion="+descripcion+"&monto_propio="+txtMontoPropio+"&monto_otro="+txtMontoOtras+"&fecha_inicio="+txtFechaInicio+"&fecha_fin="+txtFechafin+"&elaboro="+elaboro+"&autorizo="+autorizo+"&cat_lineaaccion_ped_lineaaccionid="+cboLineaacion+"&ubp_id_ubp="+cboUbp+"&poblacion_objetivo_id_poblacion="+cobPoblacion+"&origen_fuente_id_origen="+cbofuente+"&fuente_financiamiento_id_ff="+nombrefuente;
    $.ajax({
        type: "POST",
        url: url + "actividades/actualizar",
        data: datos,
        success: function(data) {

            //=========================================//
            notie.alert({ type: 1, text: 'Correcto!', time: 2 });
            //setTimeout(function(){ location.href = url+"actividades"; }, 1000);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);
        }
    });
}