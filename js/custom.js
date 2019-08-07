/*
 *Incializa el canvas
 */
 var programa=0;
 var url = "";
$(document).ready(function () {
    /**Inicializar variables**/
	programa=$("#programa").val();
    url = $("#url").val();
	 autorecuperarjson();
});
(function init() {
    if (window.goSamples)
        goSamples(); // init for these samples -- you don't need to call this
    var $ = go.GraphObject.make; // for conciseness in defining templates
    //consecuencia
    var yellowgrad = $(go.Brush, "Linear", {
            0: "rgb(254, 201, 0)",
            1: "rgb(254, 162, 0)"
        });
    //causa
    var greengrad = $(go.Brush, "Linear", {
            0: "#98FB98",
            1: "#9ACD32"
        });
    var bluegrad = $(go.Brush, "Linear", {
            0: "#B0E0E6",
            1: "#87CEEB"
        });
    //var redgrad = $(go.Brush, "Linear", { 0: "#C45245", 1: "#871E1B" });
    var whitegrad = $(go.Brush, "Linear", {
            0: "#F0F8FF",
            1: "#E6E6FA"
        });
    var bigfont = "bold 13pt Helvetica, Arial, sans-serif";
    var smallfont = "bold 11pt Helvetica, Arial, sans-serif";
    // Common text styling
    function textStyle() {
        return {
            margin: 6,
            wrap: go.TextBlock.WrapFit,
            textAlign: "center",
            editable: true,
            font: bigfont
        }
    }
    myDiagram =
        $(go.Diagram, "myDiagramDiv", {
            // have mouse wheel events zoom in and out instead of scroll up and down
            "toolManager.mouseWheelBehavior": go.ToolManager.WheelZoom,
            initialAutoScale: go.Diagram.Uniform,
            "linkingTool.direction": go.LinkingTool.ForwardsOnly,
            layout: $(go.LayeredDigraphLayout, {
                isInitial: false,
                isOngoing: false,
                layerSpacing: 50
            }),
            "undoManager.isEnabled": true
        });
    // when the document is modified, add a "*" to the title and enable the "Save" button
    myDiagram.addDiagramListener("Modified", function (e) {
        var button = document.getElementById("SaveButton");
        if (button)
            button.disabled = !myDiagram.isModified;
        var idx = document.title.indexOf("*");
        if (myDiagram.isModified) {
            if (idx < 0)
                document.title += "*";
        } else {
            if (idx >= 0)
                document.title = document.title.substr(0, idx);
        }
    });
    var defaultAdornment =
        $(go.Adornment, "Spot",
            $(go.Panel, "Auto",
                $(go.Shape, {
                    fill: null,
                    stroke: "dodgerblue",
                    strokeWidth: 4
                }),
                $(go.Placeholder)),
            // the button to create a "next" node, at the top-right corner
            $("Button", {
                alignment: go.Spot.TopRight,
                click: addNodeAndLink
            }, // this function is defined below
                new go.Binding("visible", "", function (a) {
                    return !a.diagram.isReadOnly;
                }).ofObject(),
                $(go.Shape, "PlusLine", {
                    desiredSize: new go.Size(6, 6)
                })));
    // define the Node template
    myDiagram.nodeTemplate =
        $(go.Node, "Auto", {
            selectionAdornmentTemplate: defaultAdornment
        },
            new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
            // define the node's outer shape, which will surround the TextBlock
            $(go.Shape, "Rectangle", {
                fill: yellowgrad,
                stroke: "black",
                portId: "",
                fromLinkable: true,
                toLinkable: true,
                cursor: "pointer",
                toEndSegmentLength: 50,
                fromEndSegmentLength: 40
            }),
            //globo 3
            $(go.TextBlock, "Consecuencia", {
                margin: 6,
                font: bigfont,
                editable: true
            },
                new go.Binding("text", "text").makeTwoWay()));
    myDiagram.nodeTemplateMap.add("Source",
        $(go.Node, "Auto",
            new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
            $(go.Shape, "RoundedRectangle", {
                fill: bluegrad,
                portId: "",
                fromLinkable: true,
                cursor: "pointer",
                fromEndSegmentLength: 40
            }),
            //globo 1
            $(go.TextBlock, "Problema", textStyle(),
                new go.Binding("text", "text").makeTwoWay())));
    myDiagram.nodeTemplateMap.add("DesiredEvent",
        $(go.Node, "Auto",
            new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
            $(go.Shape, "RoundedRectangle", {
                fill: greengrad,
                portId: "",
                fromLinkable: true,
                toLinkable: true,
                cursor: "pointer",
                toEndSegmentLength: 50,
                fromEndSegmentLength: 40
            }),
            //globo 2
            $(go.TextBlock, "Causa", textStyle(),
                new go.Binding("text", "text").makeTwoWay())));
    // Undesired events have a special adornment that allows adding additional "reasons"
    var UndesiredEventAdornment =
        $(go.Adornment, "Spot",
            $(go.Panel, "Auto",
                $(go.Shape, {
                    fill: null,
                    stroke: "dodgerblue",
                    strokeWidth: 4
                }),
                $(go.Placeholder)),
            // the button to create a "next" node, at the top-right corner
            $("Button", {
                alignment: go.Spot.BottomRight,
                click: addReason
            }, // this function is defined below
                new go.Binding("visible", "", function (a) {
                    return !a.diagram.isReadOnly;
                }).ofObject(),
                $(go.Shape, "TriangleDown", {
                    desiredSize: new go.Size(10, 10)
                })));
    var reasonTemplate = $(go.Panel, "Horizontal",
            //globo 4: razon
            $(go.TextBlock, "Reason", {
                margin: new go.Margin(4, 0, 0, 0),
                maxSize: new go.Size(200, NaN),
                wrap: go.TextBlock.WrapFit,
                stroke: "whitesmoke",
                editable: true,
                font: smallfont
            },
                new go.Binding("text", "text").makeTwoWay()));
    /*     myDiagram.nodeTemplateMap.add("UndesiredEvent",
    $(go.Node, "Auto",
    new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),{ selectionAdornmentTemplate: UndesiredEventAdornment },
    $(go.Shape, "RoundedRectangle",{ fill: redgrad, portId: "", toLinkable: true, toEndSegmentLength: 50 }),
    $(go.Panel, "Vertical", { defaultAlignment: go.Spot.TopLeft },
    //globo 4: titulo
    $(go.TextBlock, "Drop", textStyle(),{
    stroke: "whitesmoke",
    minSize: new go.Size(80, NaN)
    },
    new go.Binding("text", "text").makeTwoWay()),
    $(go.Panel, "Vertical",{
    defaultAlignment: go.Spot.TopLeft,
    itemTemplate: reasonTemplate
    },
    new go.Binding("itemArray", "reasonsList").makeTwoWay()
    )
    )
    )); */
    myDiagram.nodeTemplateMap.add("Comment",
        $(go.Node, "Auto",
            new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
            $(go.Shape, "Rectangle", {
                portId: "",
                fill: whitegrad,
                fromLinkable: true
            }),
            //globo 5
            $(go.TextBlock, "Comentario", {
                margin: 9,
                maxSize: new go.Size(200, NaN),
                wrap: go.TextBlock.WrapFit,
                editable: true,
                font: smallfont
            },
                new go.Binding("text", "text").makeTwoWay())
            // no ports, because no links are allowed to connect with a comment
        ));
    // clicking the button on an UndesiredEvent node inserts a new text object into the panel
    function addReason(e, obj) {
        var adorn = obj.part;
        if (adorn === null)
            return;
        e.handled = true;
        var arr = adorn.adornedPart.data.reasonsList;
        myDiagram.startTransaction("add reason");
        myDiagram.model.addArrayItem(arr, {});
        myDiagram.commitTransaction("add reason");
    }
    // clicking the button of a default node inserts a new node to the right of the selected node,
    // and adds a link to that new node
    function addNodeAndLink(e, obj) {
        var adorn = obj.part;
        if (adorn === null)
            return;
        e.handled = true;
        var diagram = adorn.diagram;
        diagram.startTransaction("Add State");
        // get the node data for which the user clicked the button
        var fromNode = adorn.adornedPart;
        var fromData = fromNode.data;
        // create a new "State" data object, positioned off to the right of the adorned Node
        var toData = {
            text: "new"
        };
        var p = fromNode.location;
        toData.loc = p.x + 200 + " " + p.y; // the "loc" property is a string, not a Point object
        // add the new node data to the model
        var model = diagram.model;
        model.addNodeData(toData);
        // create a link data from the old node data to the new node data
        var linkdata = {};
        linkdata[model.linkFromKeyProperty] = model.getKeyForNodeData(fromData);
        linkdata[model.linkToKeyProperty] = model.getKeyForNodeData(toData);
        // and add the link data to the model
        model.addLinkData(linkdata);
        // select the new Node
        var newnode = diagram.findNodeForData(toData);
        diagram.select(newnode);
        diagram.commitTransaction("Add State");
    }
    // replace the default Link template in the linkTemplateMap
    myDiagram.linkTemplate =
        $(go.Link, // the whole link panel
            new go.Binding("points").makeTwoWay(), {
            curve: go.Link.Bezier,
            toShortLength: 15
        },
            new go.Binding("curviness", "curviness"),
            $(go.Shape, // the link shape
            {
                stroke: "#2F4F4F",
                strokeWidth: 2.5
            }),
            $(go.Shape, // the arrowhead
            {
                toArrow: "kite",
                fill: "#2F4F4F",
                stroke: null,
                scale: 2
            }));
    myDiagram.linkTemplateMap.add("Comment",
        $(go.Link, {
            selectable: false
        },
            $(go.Shape, {
                strokeWidth: 2,
                stroke: "darkgreen"
            })));
    var palette =
        $(go.Palette, "myPaletteDiv", // create a new Palette in the HTML DIV element
        {
            // share the template map with the Palette
            nodeTemplateMap: myDiagram.nodeTemplateMap,
            autoScale: go.Diagram.Uniform // everything always fits in viewport
        });
    palette.model.nodeDataArray = [{
            category: "Source"
        }, {}, // default node
        {
            category: "DesiredEvent"
        },
        /*  { category: "UndesiredEvent", reasonsList: [{}] }, */
        {
            category: "Comment"
        }
    ];
    // read in the JSON-format data from the "mySavedModel" element
    //layout();
})();

function autorecuperarjson() {
	    
    $.ajax({
        type: "GET",
        url: url + "listar/arbolproblema/" + window.btoa(programa),
        data: "success=success",
        success: function (data) {
            var o = JSON.parse(data);
            var objetos = (Object.values(o['problema']));
            for (x = 0; x < objetos.length; x++) {
                //console.log(objetos);
                //posicion 2 viene de la base de datos modificar cualsea el caso
                document.getElementById("mySavedModel").value = window.atob(objetos[x].tEstructuraProblema);
			 
                console.log("JSON Recuperado correctamente");
                setTimeout(function () {
                    myDiagram.model = go.Model.fromJson(document.getElementById("mySavedModel").value);
                }, 100);
            }
        }
    });
}
function layout() {
    myDiagram.layoutDiagram(true);
}
// Show the diagram's model in JSON format
/**
 *Funcion para guardar los datos del canvas a la base de datos
 **/
function save() {
    document.getElementById("mySavedModel").value = myDiagram.model.toJson();
    //myDiagram.isModified = false;
    //var jsonData = myDiagram.model.toJson ();
   
    var estructura_problema =$("#mySavedModel").val();
    var Nombre_problema = "";
	var json64 = window.btoa(estructura_problema);
	 
	  var o = JSON.parse(estructura_problema);
            var objetos = (Object.values(o['nodeDataArray']));
            for (x = 0; x < objetos.length; x++) {
				if(objetos[x].category=="Source"){
					Nombre_problema=(objetos[x].text);
				}
			}

    $.ajax({
        type: "POST",
        url: url + "actualizacion/arbolproblema",
        data: "iIdPrograma="+programa+"&vNombreProblema="+Nombre_problema+"&tEstructuraProblema="+json64,
        success: function (data) {
            console.log("Peticion realizada correctamente!");
            new PNotify({
                title: 'Datos guardados',
                type: 'success',
            });
        }
    }); 
}
function resetearjson() {
    var Nombre_problema = "Problema central";
    var json64 = "eyAiY2xhc3MiOiAiR3JhcGhMaW5rc01vZGVsIiwKICAibm9kZURhdGFBcnJheSI6IFsgCnsiY2F0ZWdvcnkiOiJTb3VyY2UiLCAia2V5IjotMSwgImxvYyI6IjQxNiAxMTIuMjM4NTc2MjUwODQ2MDUiLCAidGV4dCI6IlByb2JsZW1hIGNlbnRyYWwifSwKeyJrZXkiOi0yLCAibG9jIjoiMjI5LjEzOTUxNjE5OTQ3OTgzIDAifSwKeyJjYXRlZ29yeSI6IkRlc2lyZWRFdmVudCIsICJrZXkiOi00LCAibG9jIjoiMjkwLjExMTQyNjAzNzk3MjM2IDE5My4yMzg1NzYyNTA4NDYxIn0sCnsiY2F0ZWdvcnkiOiJEZXNpcmVkRXZlbnQiLCAia2V5IjotNSwgImxvYyI6IjY5Mi41NzgwOTMyMTMyNjU3IDIwNC4yMzg1NzYyNTA4NDYxIn0sCnsidGV4dCI6IkNvbnNlY3VlbmNpYSIsICJsb2MiOiI0MjkuNjA2MTgzMzc0NzcyOCAwIiwgImtleSI6LTd9LAp7InRleHQiOiJDb25zZWN1ZW5jaWEiLCAibG9jIjoiNjMwLjA3Mjg1MDU1MDA2NTggMCIsICJrZXkiOi04fQogXSwKICAibGlua0RhdGFBcnJheSI6IFsgCnsiZnJvbSI6LTEsICJ0byI6LTcsICJwb2ludHMiOls0ODguODg2NzA5NjE4NTE3NTYsMTEyLjI2Nzk4ODY4NzA1NzUyLDQ3OS4yODEzNjEzMjA1MDkyMyw4NS41MTUwOTg3NDQ2Mjc4Miw0NzkuMTExMDI0MTAyNDk1NCw1OC42OTAwMTQ0Mzk2NDkwMSw0ODkuMDA0MzMwNzI3NTcxMiwzMS43NjMzMzM0MTU5ODUxMV19LAp7ImZyb20iOi0xLCAidG8iOi04LCAicG9pbnRzIjpbNTE3LjYzMTkzNDk1MywxMTIuNDE3Njc2MDcxMjYwNjcsNTY2LjI2NzExMjM2OTgzNTEsNzEuNzE0NTU0Nzc4NTE1OTMsNjEzLjAwMjk4MTQ1OTU4ODIsNDQuODA1OTY4MDM3ODA4ODQsNjUwLjExNTM5MzkwODA4MjYsMzEuNzYzMzMzNDE1OTg1MTFdfSwKeyJmcm9tIjotMSwgInRvIjotNSwgInBvaW50cyI6WzU3MS44MzYyMTI0MjMyNzE0LDE0OC4yODYwOTQyOTU3MjU3LDU5OC4wNzY0MzgzMzE2OTg2LDE1NC4yNzQyNTkyODU5NTM1Miw2NDguNDIwODI1Njk5Mzc3OSwxNzQuMjE1MjI2NDYzNTM5NDQsNjk3LjgwNTUxMTI3OTA1ODksMjA0LjQ3NzMzMjQxNzg0NzU4XX0sCnsiZnJvbSI6LTEsICJ0byI6LTQsICJwb2ludHMiOls0NzEuMDI4NzM3MTExNDE2MjYsMTQ5LjMyNTE1MDE4MzA0OTM3LDQzMS4yNzkyNzQ0MzI3NzI4LDE3OS4xOTgzMzkxNzU2NjUzOCwzOTguNjg2NzIwODg1MTQsMTk0LjcwOTc2NTY5NjQ2NDM2LDM2MC42MjEwOTc5NzAwMDE3NiwyMDMuNjI1NjY1MjIzNDA0M119LAp7ImZyb20iOi0xLCAidG8iOi0yLCAicG9pbnRzIjpbNDQ0LjczMjg0OTgyMzEwNjg1LDExMi41NjkxMjQzMTkyMDU0OSw0MDguMzc1NDMxMTkwODc2NSw5OS40NzI0MDM5OTQ5MzYxNiwzNjEuMjk3MDMxODU2MTQxNyw3Mi41NjMzNjI2NTM3OTIwMywzMTMuMTI0MzYyNzE1NDE3MjUsMzEuNzYzMzMzNDE1OTg1MTFdfQogXX0";
    /***
     *Inicio script para llenar guardar el canvas
     ***/
    new PNotify({
        title: 'Eliminar',
        text: '¿Seguro desea resetear el programa?',
        icon: 'fa fa-question-circle',
        type: 'warning',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: {
            'dir1': 'down',
            'dir2': 'right',
            'modal': true
        }
    }).get().on('pnotify.confirm', function () {
        $.ajax({
           type: "POST",
        url: url + "actualizacion/arbolproblema",
        data: "iIdPrograma="+programa+"&vNombreProblema="+Nombre_problema+"&tEstructuraProblema="+json64,
            success: function (data) {
                console.log("Peticion realizada correctamente!");
                /**
                sirve para recargar el json64
                 */
                new PNotify({
                    title: 'Problema restablecido correctamente',
                    type: 'success',
                });
                autorecuperarjson();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
                new PNotify({
                    title: 'Error en el servidor',
                    type: 'error',
                });
            }
        });
    }).on('pnotify.cancel', function () {
        //  alert('Cancelado');
    })
}