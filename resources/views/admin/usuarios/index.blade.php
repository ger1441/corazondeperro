@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="/usuarios/create" class="btn btn-outline-primary">Registrar <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>

    <div class="col-12 my-3 table-responsive-sm">
        <table class="table table-bordered table-striped" id="tableRescataditos">
            <thead>
            <tr class="table-primary">
                <th rowspan="2">Nombre</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Usuario</th>
                <th rowspan="2">Rol</th>
                <th colspan="3" class="text-center">Acciones</th>
            </tr>
            <tr>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $user)
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->user}}</td>
                    <td>{{$user->role}}</td>
                    <td align="center"><a href="/usuarios/edit"><i class="fa fa-edit icon-action"></i></a></td>
                    <td align="center"><a href="#"><i class="fa fa-trash icon-action" data-method=""></i></a></td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
