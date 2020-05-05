@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/css/admin.css">
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="/adoptados/create" class="btn btn-outline-primary">Registrar <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>

    <div class="col-12 my-3 table-responsive-sm">
        <table class="table table-bordered table-striped" id="tableAdoptados">
            <thead>
            <tr class="table-primary">
                <th rowspan="2">Nombre</th>
                <th colspan="3" class="text-center">Acciones</th>
            </tr>
            <tr>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
        </table>
    </div>

    <!-- Modal Confirm Delete Adoptado -->
    <div class="modal" tabindex="-1" role="dialog" id="modalConfirmDeleteAdoptado">
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
                    <button type="button" class="btn btn-danger" id="btnDeleteAdoptado" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Eliminando" data-id="">Eliminar</button>
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
            var table = $("#tableAdoptados").DataTable({
                "serverSide": true,
                "ajax": "{{ url('api/adoptados') }}",
                "columns": [
                    {"data": 'name'},
                    {"defaultContent": "<p class='parrafo-centrado icon-action' data-act='show'><i class='fa fa-eye'></i></p>","orderable":false},
                    {"defaultContent": "<p class='parrafo-centrado icon-action' data-act='edit'><i class='fa fa-edit'></i></p>","orderable":false},
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
            obtenerData("#tableAdoptados tbody", table);
        };

        var obtenerData = function(tbody, table){
            $(tbody).on("click",".icon-action",function () {
                var option = $(this).data('act');
                var data = table.row( $(this).parents("tr") ).data();
                rowSelect = $(this).parents("tr");
                idSelect  = data.id;
                switch(option){
                    case 'show':
                        window.location.href = '/adoptados/'+data.id;
                        break;
                    case 'edit':
                        window.location.href = '/adoptados/'+data.id+'/edit';
                        break;
                    case 'delete':
                        $("#modalConfirmDeleteAdoptado").modal('show');
                        break;
                }
            })
        };

        $(document).on('click','#btnDeleteAdoptado',function(e){
            $("#btnDeleteAdoptado").button('loading');
            $.ajax({
                'headers': {
                    'X-CSRF-TOKEN' : "{{ csrf_token() }}"
                },
                'url' : '/adoptados/'+idSelect,
                'type' : 'delete',
            }).done(function(data){
                //console.log(data);
                $("#modalConfirmDeleteAdoptado").modal('hide');
                rowSelect.remove();
                $("#btnDeleteAdoptado").button('reset');
            }).fail(function(jqXHR,textStatus,errorThrown){
                //console.log(jqXHR);
                $("#btnDeleteAdoptado").button('reset');
            });
        })
    </script>
@endpush
