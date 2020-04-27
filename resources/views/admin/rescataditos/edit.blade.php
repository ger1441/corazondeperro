@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="/assets/admin/plugins/summernote.css">
@endpush
@section('content')
    <div class="col mb-3">
        <form action="/rescataditos/{{$rescatadito->id}}" method="post" id="frmRescatadito" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-row">
                @if(session()->has('message'))
                    <div class="col-12 alert alert-success text-center my-3">
                        <p><i class="fas fa-check-circle"></i> &nbsp;{{ session()->get('message') }}</p>
                    </div>
                @endif
                <div class="col-12 col-sm-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{asset('storage/images/rescataditos/'.$rescatadito->foto)}}"
                                     alt="{{$rescatadito->nombre}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-8">
                    <label for="foto">Cambiar foto </label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>250x250</strong> pixeles
                    </small>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        La imagen actual se eliminará
                    </small>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del rescatadito" required value="{{$rescatadito->nombre}}">
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="especie">Especie</label>
                    <select name="especie" id="especie" class="form-control" required>
                        <option value="Perro" @if($rescatadito->especie=="Perro") selected @endif>Perro</option>
                        <option value="Gato" @if($rescatadito->especie=="Gato") selected @endif>Gato</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero" class="form-control" required>
                        <option value="Macho" @if($rescatadito->sexo=="Macho") selected @endif>Macho</option>
                        <option value="Hembra" @if($rescatadito->sexo=="Hembra") selected @endif>Hembra</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="talla">Talla</label>
                    <select name="talla" id="talla" class="form-control" required>
                        <option value="N/A" @if($rescatadito->talla=="N/A") selected @endif>N/A</option>
                        <option value="Chica" @if($rescatadito->talla=="Chica") selected @endif>Chica</option>
                        <option value="Mediana" @if($rescatadito->talla=="Mediana") selected @endif>Mediana</option>
                        <option value="Grande" @if($rescatadito->talla=="Grande") selected @endif>Grande</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4">
                    <label for="edad">Edad aproximada</label>
                    <select name="edad" id="edad" class="form-control" required>
                        <option value="3-5 meses" @if($rescatadito->edad=="3-5 meses") selected @endif>3-5 meses</option>
                        <option value="6-11 meses" @if($rescatadito->edad=="6-11 meses") selected @endif>6-11 meses</option>
                        <option value="1-2 años" @if($rescatadito->edad=="1-2 años") selected @endif>1-2 años</option>
                        <option value="3-4 años" @if($rescatadito->edad=="3-4 años") selected @endif>3-4 años</option>
                        <option value="5+ años" @if($rescatadito->edad=="5+ años") selected @endif>5+ años</option>
                    </select>
                </div>
                {{--<div class="form-group col-sm-6 col-md-4">
                    <label for="foto">Foto </label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda una imagen de <strong>160x160</strong> pixeles
                    </small>
                </div>--}}
                <div class="form-group col-12">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="2" class="form-control" placeholder="Aquí puede agregar detalles del animalito como color, estado actual, si tiene alguna condición especial, etc" style="resize: none;">{{$rescatadito->description}}</textarea>
                </div>
                <div class="form-check form-check-inline col-sm-3 col-lg-2">
                    <input type="checkbox" name="chkMostrar" id="chkMostrar" class="form-check-input" value="true" @if($rescatadito->mostrar) checked @endif>
                    <label class="form-check-label" for="chkMostrar">Mostrar en búsquedas</label>
                </div>
                <div class="form-check form-check-inline col-sm-3 col-lg-8">
                    <input type="checkbox" name="chkHistoria" id="chkHistoria" class="form-check-input" value="true" @if(isset($rescatadito->animalitoHistoria->historia)||count($rescatadito->animalitoGaleria)>0) checked @endif>
                    <label class="form-check-label" for="chkHistoria">Agregar historia</label>
                </div>
                <div class="form-group col-12 mb-3">
                    <small id="HistoriaHelpBlock" class="form-text text-muted">
                        <span class="text-danger"><strong>NOTA:</strong> </span> Si se <strong>desmarca</strong> la casilla <em>'Agregar Historia'</em> y el rescatadito cuenta con una historia y/o galería, al dar clic en <em>'Editar'</em> éstas se perderán.
                    </small>
                </div>
                <div class="form-group col-12 history @if(!isset($rescatadito->animalitoHistoria->historia)&&count($rescatadito->animalitoGaleria)<1) d-none @endif">
                    <label for="summernote">Historia</label>
                    <div id="summernote"></div>
                    <input type="hidden" name="historia" id="historia">
                </div>
                <!--<div class="form-group col-12 history d-none">
                    <label for="historia">Historia</label>
                    <textarea id="historia" rows="2" class="form-control" placeholder="Aquí puedes detallar la historia de este peludito" style="resize: none;"></textarea>
                </div>-->
                <div class="form-group col-md-4 history @if(!isset($rescatadito->animalitoHistoria->historia)&&count($rescatadito->animalitoGaleria)<1) d-none @endif">
                    <label for="fotos">Agregar Foto(s)</label>
                    <input type="file" name="fotos[]" id="fotos" class="form-control" accept="image/*" multiple>
                    <small id="fotoHelpBlock" class="form-text text-muted">
                        Se recomienda imágenes de <strong>160x160</strong> pixeles
                    </small>
                </div>
                <!-- Galeria -->
                @if(count($rescatadito->animalitoGaleria)>0)
                    <div class="col-10 pull-right history">
                        <label for="galeria">Galería</label>
                        <div class="contendor-galeria">
                            @foreach($rescatadito->animalitoGaleria as $galeryAnimalito)
                                <div class="content-image" id="contentImage{{$galeryAnimalito->id}}">
                                    <img class="galeria_img" src="{{asset('storage/images/rescataditos/'.$galeryAnimalito->id_animalito.'/'.$galeryAnimalito->foto)}}" alt="Photo" data-image="{{$galeryAnimalito->id}}">
                                    <i class="fa fa-trash deleteElement deleteElementGallery" data-rescatadito="{{$rescatadito->id}}" data-image="{{$galeryAnimalito->id}}"></i>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
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

    <div class="modal" tabindex="-1" role="dialog" id="modalConfirmDeleteElementGalery">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyDeleteImage">
                    <p>¿Está seguro de eliminar la imagen?<br>Se eliminará definitivamente</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteImage" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Eliminando">Eliminar</button>
                </div>
            </div>
        </div>
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
            $('#summernote').summernote('code', '@if(isset($rescatadito->animalitoHistoria->historia)) {!! $rescatadito->animalitoHistoria->historia !!} @endif');

            $("#frmRescatadito").on('submit',function(e){
                e.preventDefault();
                var history = $('#summernote').summernote('code');
                $("#historia").val(history)
                $(this).off('submit').submit();
            });

            $(document).on('click','.galeria_img',function(e){
                var img = e.target.src;
                $("#modalGaleryImage").prop('src',img);
                $("#modalGalery").modal('show');
            });

            $(document).on('click','.deleteElementGallery',function(e){
                res = $(this).data('rescatadito');
                img = $(this).data('image');
                $("#modalConfirmDeleteElementGalery").modal('show');
            });

            $(document).on('click','#btnDeleteImage',function(e){
                $("#btnDeleteImage").button('loading');
                $.ajax({
                   'url' : '/api/rescataditos/'+res+'/'+img+'/delete',
                   'type' : 'delete',
                }).done(function(data){
                    //console.log(data);
                    $("#modalConfirmDeleteElementGalery").modal('hide');
                    $("#contentImage"+img).remove();
                    $("#btnDeleteImage").button('reset');
                }).fail(function(jqXHR,textStatus,errorThrown){
                    //console.log(jqXHR);
                    $("#btnDeleteImage").button('reset');
                });
            });
        });

        $(document).on('click','#chkHistoria',function(){
            console.log($(this).is(':checked'));
            if($(this).is(':checked')) $("div.history").removeClass('d-none');
            else $("div.history").addClass('d-none');
        });
    </script>
@endpush
