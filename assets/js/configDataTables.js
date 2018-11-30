//
// ─── PAGE LOAD READY ─────────────────────────────────────────────────────────────────
//
$(document).ready(function() {
    //
    // ─── TABLE LOAD PLUGIN ─────────────────────────────────────────────────────────────────
    //  
    if($('table').get(0).id !== "tableHorariosEdit"){

        $("table").DataTable({
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
                }
            },
            "dom": // Insertar objeto tabla por formato:
                // "<'row'<'col-sm-6 offset-sm-4 pb-2'B>>"+
                // "<'row'<'col-sm-6 col-md-8'><'col-sm-6 col-md-2'B><'col-sm-6 col-md-6'f><'col-sm-6 col-md-4 offset-md-2'l>>" +
                // Pie de la tabla -- B-> Botones de exportar
                "<'row'<'col-sm-2 col-md-6'><'col-sm-6 col-md-6'B>>" +
                // Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
                "<'row pt-2'<'col-sm-6 col-md-6'f><'col-sm-6 col-md-4 offset-md-2'l>>" +
                // Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
                "<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
                // Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
                "<'row'<'col-sm-8 offset-sm-1 col-md-8 offset-md-4'i>>" +
                "<'row'<'col-sm-7'p><'col-sm-5'>>"
                ,
            buttons:
            [
                // 'copyHtml5',
                // 'excelHtml5',
                // 'csvHtml5',
                // 'pdfHtml5'
                {
                    extend: 'copyHtml5',
                    // text: 'Copiar'
                    text: '<span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Copiar al portapapeles"><i class="far fa-copy fa-lg"></i>&nbsp;<u>C</u>opiar</span>',
                    key: {
                        key: 'c',
                        altKey: true
                    }
                },
                {
                    extend: 'excelHtml5',
                    // text: 'XLSX'
                    text: '<span class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Exportar al archivo formato XLSX"><i class="far fa-file-excel fa-lg"></i>&nbsp;<u>X</u>LSX</span>',
                    key: {
                        key: 'x',
                        altKey: true
                    }
                },
                {
                    extend: 'csvHtml5',
                    // text: 'CSV'
                    text: '<span class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Exportar al archivo formato CSV"><i class="fas fa-file-csv fa-lg"></i>&nbsp;C<u>S</u>V</span>',
                    key: {
                        key: 'S',
                        altKey: true
                    }
                },
                {
                    extend: 'pdfHtml5',
                    // text: 'PDF'
                    text: '<span class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Exportar al archivo formato PDF"><i class="far fa-file-pdf fa-lg"></i>&nbsp;<u>P</u>DF</span>',
                    key: {
                        key: 'p',
                        altKey: true
                    }
                },
                {
                    extend: 'print',
                    text: '<span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Imprimir esta tabla"><i class="fas fa-print fa-lg"></i>&nbsp;<u>I</u>mprimir</span>',
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
                    text: '<span class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Seleccionar las columnas para ocultar o visble"><i class="fas fa-filter fa-lg"></i>&nbsp;<u>F</u>iltro</span>',
                    autoPrint: true,
                    footer: true,
                    exportOptions: {
                    modifier: {
                            page: 'current'
                        }
                    }
                },
            ],
            // columnDefs: [ {
            //     targets: -1,
            //     visible: false
            // }],
        });
    }    
    //
    // ─── END TABLE LOAD PLUGIN ─────────────────────────────────────────────────────────────────
    //
});
//
// ─── END PAGE LOAD READY ─────────────────────────────────────────────────────────────────
//