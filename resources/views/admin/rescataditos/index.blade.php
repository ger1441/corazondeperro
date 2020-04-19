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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="table-primary">
                            <th>Nombre</th>
                            <th>Especie</th>
                            <th>Genero</th>
                            <th colspan="3" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rescataditos as $rescatadito)
                        <tr>
                            <td>{{$rescatadito->nombre}}</td>
                            <td>{{$rescatadito->especie}}</td>
                            <td>{{$rescatadito->sexo}}</td>
                            <td class="text-center"><i class="fa fa-eye"></i></td>
                            <td class="text-center"><i class="fa fa-edit"></i></td>
                            <td class="text-center"><i class="fa fa-trash"></i></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
