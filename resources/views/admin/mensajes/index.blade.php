@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="/assets/css/admin.css">
@endpush

@section('content')
    <div class="col-12 my-3 table-responsive-sm">
        <table class="table table-bordered table-striped" id="tableMensajes">
            <thead>
            <tr class="table-primary">
                <th rowspan="2">Asunto</th>
                <th rowspan="2">De</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Fecha</th>
                <th colspan="2" class="text-center">Acciones</th>
            </tr>
            <tr>
                <th>Ver</th>
                <th>Eliminar</th>
            </tr>
            </thead>
        </table>
    </div>

    <!-- Modal Show Message -->
    <div class="modal" tabindex="-1" role="dialog" id="modalMessage">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyMessage">
                    <table class="table table-bordered">
                        <tr>
                            <td>De</td>
                            <td id="messageForm"></td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td id="messageDate"></td>
                        </tr>
                        <tr>
                            <td>Mensaje</td>
                            <td id="messageDescription"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirm Delete Message -->
    <div class="modal" tabindex="-1" role="dialog" id="modalConfirmDeleteMessage">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyDeleteImage">
                    <p>¿Está seguro de eliminar el registro?<br>Se eliminará definitivamente</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteMessage" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Eliminando" data-id="">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var rowSelect = "";
        var idSelect  = "";

        $(function () {
            listar();
        });

        var listar = function(){
            var table = $("#tableMensajes").DataTable({
                "serverSide": true,
                "order" : [[ 3, "desc"]],
                "ajax": "{{ url('api/mensajes') }}",
                "columns": [
                    {"data": 'asunto'},
                    {"data": 'nombre'},
                    {"data": 'email'},
                    {"data": 'created_at'},
                    {"defaultContent": "<p class='parrafo-centrado icon-action' data-act='view'><i class='fa fa-eye'></i></p>","orderable":false},
                    {"defaultContent": "<p class='parrafo-centrado icon-action' data-act='delete'><i class='fa fa-trash'></i></p>","orderable":false}
                ],
                "language": {
                    search : "Búsqueda",
                    lengthMenu: "Mostrar _MENU_ registros",
                    info: "_START_ - _END_ [ _TOTAL_ elementos ]",
                    infoEmpty: "No se encontraron coincidencias",
                    infoFiltered: "(de un total de _MAX_ registros)",
                    zeroRecords: "No hay resultados de su búsqueda",
                    emptyTable: "Por el momento no hay registros",
                    paginate: {
                        first:      "Primero",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Último"
                    },
                }
            });
            obtenerData("#tableMensajes tbody", table);
        };

        var obtenerData = function(tbody, table){
            $(tbody).on("click",".icon-action",function () {
                var option = $(this).data('act');
                var data = table.row( $(this).parents("tr") ).data();
                rowSelect = $(this).parents("tr");
                idSelect  = data.id;
                switch(option){
                    case 'view':
                        $("#modalTitle").html(data.asunto);
                        $("#messageForm").html(data.nombre+' ('+data.email+')');
                        $("#messageDate").html(data.created_at);
                        $("#messageDescription").html(data.mensaje);
                        $("#modalMessage").modal('show');
                        break;
                    case 'delete':
                        $("#modalConfirmDeleteMessage").modal('show');
                        break;
                }
            })
        };

        $(document).on('click','#btnDeleteMessage',function(e){
            $("#btnDeleteMessage").button('loading');
            $.ajax({
                'url' : '/api/mensaje/'+idSelect,
                'type' : 'delete',
            }).done(function(data){
                //console.log(data);
                $("#modalConfirmDeleteMessage").modal('hide');
                rowSelect.remove();
                $("#btnDeleteMessage").button('reset');
            }).fail(function(jqXHR,textStatus,errorThrown){
                //console.log(jqXHR);
                $("#btnDeleteMessage").button('reset');
            });
        })
    </script>
@endpush
