// const $: JQueryStatic <Document> (object: Document) => JQuery <Document> (+8 overloads)
//
// ─── PAGE LOAD READY ─────────────────────────────────────────────────────────────────
//
$(document).ready(function() {
    //
    // ─── TABLE LOAD PLUGIN ─────────────────────────────────────────────────────────────────
    //
    if($('table').get(0).id !== "tableHorariosEdit"){

        var table = $("table").DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "select": {
                    "rows": {
                        _: "Ha seleccionado  %d filas",
                        0: "Haga clic en una fila para seleccionarla",
                        1: "Sólo una fila seleccionada"
                    }
                },
                "pageLength": 'Change columns',
            },
            "dom": // Insertar objeto tabla por formato:
                // "<'row'<'col-sm-6 offset-sm-4 pb-2'B>>"+
                // "<'row'<'col-sm-6 col-md-8'><'col-sm-6 col-md-2'B><'col-sm-6 col-md-6'f><'col-sm-6 col-md-4 offset-md-2'l>>" +
                // Pie de la tabla -- B-> Botones de exportar
                "<'row'<'col-md-1'><'col-sm-12 col-md-10'B>>" +
                // Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
                "<'row pt-2'<'col-sm-6 col-md-6'f><'col-sm-6 col-md-4 offset-md-2'l>>" +
                // Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
                "<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
                // Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
                "<'row'<'col-sm-8 offset-sm-1 col-md-8 offset-md-4'i>>" +
                "<'row'<'col-sm-7'p><'col-sm-5'>>"
                ,
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 filas', '25 filas', '50 filas', 'Mostrar todos']
            ],
            buttons:
            [
                // 'copyHtml5',
                // 'excelHtml5',
                // 'csvHtml5',
                // 'pdfHtml5'
                {
                    extend: 'copyHtml5',
                    className: 'btn btn-outline-info',
                    // text: 'Copiar'
                    text: '<span id="btnDTCopy" data-toggle="tooltip" data-placement="top" title="Copiar al portapapeles"><i class="fas fa-copy fa-lg"></i></span>',
                    key: {
                        key: 'c',
                        altKey: true
                    }
                },
                {
                    extend: 'excelHtml5',
                    className: 'btn btn-outline-info',
                    // text: 'XLSX'
                    text: '<span id="btnDTXLSX" data-toggle="tooltip" data-placement="top" title="Exportar al archivo formato XLSX"><i class="fas fa-file-excel fa-lg"></i></span>',
                    key: {
                        key: 'x',
                        altKey: true
                    }
                },
                {
                    extend: 'csvHtml5',
                    className: 'btn btn-outline-info',
                    // text: 'CSV'
                    text: '<span id="btnDTCSV" data-toggle="tooltip" data-placement="top" title="Exportar al archivo formato CSV"><i class="fas fa-file-csv fa-lg"></i></span>',
                    key: {
                        key: 'S',
                        altKey: true
                    }
                },
                {
                    extend: 'pdfHtml5',
                    className: 'btn btn-outline-info',
                    // text: 'PDF'
                    text: '<span id="btnDTPDF" data-toggle="tooltip" data-placement="top" title="Exportar al archivo formato PDF"><i class="fas fa-file-pdf fa-lg"></i></span>',
                    key: {
                        key: 'p',
                        altKey: true
                    },
                    exportOptions: {
                        modifier: {
                            selected: null
                        }
                    }
                },
                {
                    extend: 'print',
                    className: 'btn btn-outline-info',
                    text: '<span id="btnDTPrint" data-toggle="tooltip" data-placement="top" title="Imprimir esta tabla"><i class="fas fa-print fa-lg"></i></span>',
                    autoPrint: true,
                    footer: true,
                    exportOptions: {
                    modifier: {
                            page: 'current'
                        }
                    }
                },
                {
                    extend: 'colvis',
                    collectionLayout: 'fixed two-column',
                    className: 'btn btn-outline-info',
                    text: '<span id="btnDTFilter" data-toggle="tooltip" data-placement="top" title="Seleccionar las columnas para ocultar o visualizar"><i class="fas fa-columns"></i></span>',
                    collectionLayout: 'three-column',
                },
                {
                    extend: 'pageLength',
                    className: 'btn btn-outline-info',
                    text: '<span id="btnDTFilter" data-toggle="tooltip" data-placement="top" title="Mostrar los registros"><i class="fas fa-list-ol"></i></span>',
                },


                // {
                //     extend: 'excel',
                //     text: 'Excel',
                //     titleAttr: 'Excel',
                //     className: 'btn btn-outline-info',
                //     idName: 'btnExcel',
                //     exportOptions: {
                //         orthogonal: 'export'
                //         //columns: [0, ':visible'],
                //         //stripHtml:false

                //     }
                // },
                // {
                //     text: 'Select all',
                //     action: function () {
                //         table.rows().select();
                //     }
                // }, {
                //     text: 'Select none',
                //     action: function () {
                //         table.rows().deselect();
                //     }
                // }
            ],
            // select: true,
            // fixedHeader: true,
            // pageLength: 25,
            // orderCellsTop: true,
            // stateSave: true,
            responsive: false,
            // columnDefs: [ {
                // searchable: false,
                // targets: [0, 4]
            //     targets: -1,
            //     visible: false
            // }],
        });
    }
    //
    // ─── END TABLE LOAD PLUGIN ─────────────────────────────────────────────────────────────────
    //


    $("span").addClass("py-2 px-1");

    $("#btnDTXLSX").parent().hover(function () {
        $(this).toggleClass("bg-success rounded"); //Toggle the active class to the area is hovered
    });
    $("#btnDTCSV").parent().hover(function () {
        $(this).toggleClass("bg-success rounded"); //Toggle the active class to the area is hovered
    });
    $("#btnDTPDF").parent().hover(function () {
        $(this).toggleClass("bg-danger rounded"); //Toggle the active class to the area is hovered
    });





});

//
// ─── END PAGE LOAD READY ─────────────────────────────────────────────────────────────────
//

$(".btn").hover(
    function () {
        $(this).toggleClass('shadow');
    }
);