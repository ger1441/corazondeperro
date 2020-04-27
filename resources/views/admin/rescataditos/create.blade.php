@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/admin/plugins/summernote.css">
@endpush
@section('content')
    <div class="col mb-3">
        <form action="/rescataditos" method="post" id="frmRescatadito" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                @if(session()->has('message'))
                    <div class="col-12 alert alert-success text-center my-3">
                        <p><i class="fas fa-check-circle"></i> &nbsp;{{ session()->get('message') }}</p>
                    </div>
                @endif
                <div class="form-group col-sm-6 col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del rescatadito" required>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="especie">Especie</label>
                    <select name="especie" id="especie" class="form-control" required>
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero" class="form-control" required>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="talla">Talla</label>
                    <select name="talla" id="talla" class="form-control" required>
                        <option value="N/A">N/A</option>
                        <option value="Chica">Chica</option>
                        <option value="Mediana">Mediana</option>
                        <option value="Grande">Grande</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="edad">Edad aproximada</label>
                    <select name="edad" id="edad" class="form-control" required>
                        <option value="3-5 meses">3-5 meses</option>
                        <option value="6-11 meses">6-11 meses</option>
                        <option value="1-2 años">1-2 años</option>
                        <option value="3-4 años">3-4 años</option>
                        <option value="5+ años">5+ años</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="foto">Foto </label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>160x160</strong> pixeles
                    </small>
                </div>
                <div class="form-group col-12">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="2" class="form-control" placeholder="Aquí puede agregar detalles del animalito como color, estado actual, si tiene alguna condición especial, etc" style="resize: none;"></textarea>
                </div>
                <div class="form-check form-check-inline col-sm-3 col-lg-2 mb-3">
                    <input type="checkbox" name="chkMostrar" id="chkMostrar" class="form-check-input" value="true" checked>
                    <label class="form-check-label" for="chkMostrar">Mostrar en búsquedas</label>
                </div>
                <div class="form-check form-check-inline col-sm-3 col-lg-2 mb-3">
                    <input type="checkbox" name="chkHistoria" id="chkHistoria" class="form-check-input" value="true">
                    <label class="form-check-label" for="chkHistoria">Agregar historia</label>
                </div>
                <div class="form-group col-12 history d-none">
                    <div id="summernote"></div>
                    <input type="hidden" name="historia" id="historia">
                </div>
                <!--<div class="form-group col-12 history d-none">
                    <label for="historia">Historia</label>
                    <textarea id="historia" rows="2" class="form-control" placeholder="Aquí puedes detallar la historia de este peludito" style="resize: none;"></textarea>
                </div>-->
                <div class="form-group col-md-4 history d-none">
                    <label for="fotos">Foto(s)</label>
                    <input type="file" name="fotos[]" id="fotos" class="form-control" accept="image/*" multiple>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda imágenes de <strong>160x160</strong> pixeles
                    </small>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar &nbsp;<i class="far fa-save"></i></button>
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

            $("#frmRescatadito").on('submit',function(e){
                e.preventDefault();
                var history = $('#summernote').summernote('code');
                $("#historia").val(history)
                $(this).off('submit').submit();
            });
        });

        $(document).on('click','#chkHistoria',function(){
            console.log($(this).is(':checked'));
            if($(this).is(':checked')) $("div.history").removeClass('d-none');
            else $("div.history").addClass('d-none');
        });
    </script>
@endpush
