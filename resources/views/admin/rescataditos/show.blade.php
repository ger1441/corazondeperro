@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/css/admin.css">
@endpush
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                               {{-- <img class="profile-user-img img-fluid img-circle"
                                     src="../../dist/img/user4-128x128.jpg"
                                     alt="User profile picture">--}}
                                <img class="profile-user-img img-fluid img-circle"
                                     src="https://ui-avatars.com/api/?name={{$rescatadito->nombre}}&size=160"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{$rescatadito->nombre}}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Especie</b> <a class="float-right">{{$rescatadito->especie}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Género</b> <a class="float-right">{{$rescatadito->sexo}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Talla</b> <a class="float-right">{{$rescatadito->talla}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Edad aproximada</b> <a class="float-right">{{$rescatadito->edad}}</a>
                                </li>
                            </ul>

                            {{--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>--}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card p-2">
                        <label for="descripcion">Descripción</label>
                        <p>
                            @if($rescatadito->descripcion)
                                {{$rescatadito->descripcion}}
                            @else
                                Por el momento no hay más detalles
                            @endif
                        </p>

                        <!-- Historia -->
                        @if(isset($rescatadito->animalitoHistoria->historia) && !empty($rescatadito->animalitoHistoria->historia))
                            <div class="card mt-3 mb-4">
                                <div class="card-header">
                                    <h3 class="card-title"><strong>Historia</strong></h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    {!! $rescatadito->animalitoHistoria->historia  !!}
                                </div>
                            </div>
                        @endif

                        <!-- Galeria -->
                        @if(count($rescatadito->animalitoGaleria)>0)
                            <label for="galeria">Galería</label>
                            <div class="contendor-galeria">
                                @foreach($rescatadito->animalitoGaleria as $galeryAnimalito)
                                    <img class="galeria_img" src="{{asset('storage/images/rescataditos/'.$galeryAnimalito->id_animalito.'/'.$galeryAnimalito->foto)}}" alt="Photo">
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


    <div class="modal" tabindex="-1" role="dialog" id="modalGalery">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">&nbsp;</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="Imagen Galería" id="modalGaleryImage" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function(){
            $(document).on('click','.galeria_img',function(e){
                var img = e.target.src;
                $("#modalGaleryImage").prop('src',img);
                $("#modalGalery").modal('show');
            });
        })
    </script>
@endpush
