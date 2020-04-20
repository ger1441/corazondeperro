@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="/rescataditos/create" class="btn btn-outline-primary">Registrar <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped" id="tableRescataditos">
                    <thead>
                        <tr class="table-primary">
                            <th rowspan="2">Nombre</th>
                            <th rowspan="2">Especie</th>
                            <th rowspan="2">Genero</th>
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
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {
            listar();
        });

        var listar = function(){
            var table = $("#tableRescataditos").DataTable({
                "serverSide": true,
                "ajax": "{{ url('api/rescataditos') }}",
                "columns": [
                    {"data": 'nombre'},
                    {"data": 'especie'},
                    {"data": 'sexo'},
                    {"defaultContent": "<p style='margin:0 !important; text-align: center;'><i class='fa fa-eye'></i></p>","orderable":false},
                    {"defaultContent": "<p style='margin:0 !important; text-align: center;'><i class='fa fa-edit'></i></p>","orderable":false},
                    {"defaultContent": "<p style='margin:0 !important; text-align: center;'><i class='fa fa-trash'></i></p>","orderable":false}
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
            obtenerData("#tableRescataditos tbody", table);
        };

        var obtenerData = function(tbody, table){
            $(tbody).on("click",".fa-eye",function () {
                var data = table.row( $(this).parents("tr") ).data();
                console.log(data);
            })
        };
    </script>
@endpush
