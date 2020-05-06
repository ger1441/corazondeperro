@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/admin/plugins/summernote.css">
@endpush
@section('content')
    <div class="col mb-3">
        <form action="/adoptados" method="post" id="frmAdoptado" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                @if(session()->has('message'))
                    <div class="col-12 alert alert-success text-center my-3">
                        <p><i class="fas fa-check-circle"></i> &nbsp;{{ session()->get('message') }}</p>
                    </div>
                @endif
                <div class="form-group col-sm-6 col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del adoptado" required>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="foto">Foto Antes</label>
                    <input type="file" name="foto_antes" id="foto_antes" class="form-control" accept="image/*" required>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>450x450</strong> pixeles
                    </small>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="foto">Foto Después</label>
                    <input type="file" name="foto_despues" id="foto_despues" class="form-control" accept="image/*" required>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>450x450</strong> pixeles
                    </small>
                </div>
                <div class="form-group col-12">
                    <label for="historia">Historia</label>
                    <div id="summernote"></div>
                    <input type="hidden" name="historia" id="historia">
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="video">Video</label>
                    <input type="text" name="video" id="video" class="form-control" placeholder="Video del adoptado">
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Por favor proporcione el enlace de su video en caso de contar con uno.
                    </small>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar &nbsp;<i class="far fa-save"></i></button>
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

            $("#frmAdoptado").on('submit',function(e){
                e.preventDefault();
                var history = $('#summernote').summernote('code');
                if(history=="" || history=="<p><br></p>"){
                    $("#summernote").summernote('focus');
                    return false;
                }
                $("#historia").val(history)
                $(this).off('submit').submit();
            });
        });
    </script>
@endpush
