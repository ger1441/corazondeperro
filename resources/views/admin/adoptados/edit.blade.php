@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="/assets/admin/plugins/summernote.css">
    <style>
        .content-image-estado
        {
            position: relative;
            width: 80%;
            margin: auto;
        }
        .img-comparacion{
            width: 100%;
            height: 400px;
            border: 8px solid;
        }
        .img-antes{
            border-color: #ca1010;
        }
        .img-despues{
            border-color: #099918;
        }

        div.estado{
            position: absolute;
            background-color: rgba(0,0,0,0.6);
            width: 100%;
            bottom: 0;
            font-weight: bold;
            color: #FFF;
        }

    </style>
@endpush
@section('content')
    <div class="col mb-3">
        <form action="/adoptados/{{$adoptado->id}}" method="post" id="frmAdoptado" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-row">
                @if(session()->has('message'))
                    <div class="col-12 alert alert-success text-center my-3">
                        <p><i class="fas fa-check-circle"></i> &nbsp;{{ session()->get('message') }}</p>
                    </div>
                @endif
                <div class="form-group col-12">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del rescatadito" required value="{{$adoptado->name}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="foto_antes">Cambiar foto "Antes"</label>
                    <input type="file" name="foto_antes" id="foto_antes" class="form-control" accept="image/*">
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>450x450</strong> pixeles
                    </small>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        La imagen actual se eliminará
                    </small>
                </div>
                <div class="form-group col-sm-6">
                    <label for="foto_despues">Cambiar foto "Después"</label>
                    <input type="file" name="foto_despues" id="foto_despues" class="form-control" accept="image/*">
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>250x250</strong> pixeles
                    </small>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        La imagen actual se eliminará
                    </small>
                </div>
                <div class="col-12 col-md-6">
                    <div class="content-image-estado">
                        <div class="estado">
                            <p class="text-center">Antes</p>
                        </div>
                        <img src="{{asset('storage/images/adoptados/'.$adoptado->foto_antes)}}" alt="{{$adoptado->nombre}} antes" class="img-fluid img-comparacion img-antes">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-sm-3 mt-md-0">
                    <div class="content-image-estado">
                        <div class="estado">
                            <p class="text-center">Después</p>
                        </div>
                        <img src="{{asset('storage/images/adoptados/'.$adoptado->foto_despues)}}" alt="{{$adoptado->nombre}} despues" class="img-fluid img-comparacion img-despues">
                    </div>
                </div>
                <div class="form-group col-12 history">
                    <label for="summernote">Historia</label>
                    <div id="summernote"></div>
                    <input type="hidden" name="historia" id="historia">
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="video">Video</label>
                    <input type="text" name="video" id="video" class="form-control" placeholder="Video del adoptado" value="{{$adoptado->video}}">
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Por favor proporcione el enlace de su video en caso de contar con uno.
                    </small>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Editar &nbsp;<i class="far fa-save"></i></button>
                    {{--<a href="{{url()->previous()}}" class="btn btn-outline-info ml-3">Cancelar <i class="fas fa-ban"></i></a>--}}
                </div>
                @if($errors->any())
                    <div class="col-12 my-3">
                        <div class="alert alert-info">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script src="/assets/admin/plugins/summernote/summernote.js"></script>
    <script>
        var res = 0;
        var img = 0;

        $(function(){
            $("#summernote").summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
            $('#summernote').summernote('code', '{!! $adoptado->historia !!}');

            $("#frmAdoptado").on('submit',function(e){
                e.preventDefault();
                var history = $('#summernote').summernote('code');
                $("#historia").val(history)
                $(this).off('submit').submit();
            });

        });

    </script>
@endpush
