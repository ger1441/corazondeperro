@extends('layouts.page')

@push('styles')
    <link rel="stylesheet" href="/assets/css/adopta.css">
@endpush

@section('content')
    <section id="one" class="wrapper">
        <div class="inner">
            <h2>¡Encuentra a un Amigo!</h2>
            <p><strong>Si nos sigues en <a href="https://www.facebook.com/calpulalpancorazondeperro/" target="_blank" class="font-blue enlace-decorate-none">Facebook</a> habrás visto las terribles y desgarradoras historias a las que nos hemos enfrentado, muchos animalitos que han sido maltratados cruelmente y abandonados a su suerte. <br><br>
                    Pero ésta vez queremos hacer énfasis en lo contrario, queremos enfocarnos en aquellos casos que han brindado una <span class="font-blue">segunda oportunidad</span>, aquellos casos de animalitos que afortunadamente, gracias a personas de buen corazón han encontrado un nuevo hogar.</strong></p>
            <p><strong>Quizá creas que NO puedes cambiar el mundo... pero ten por seguro que SÍ puedes mejorarlo <br> <span class="font-blue">¡Adopta!</span></strong></p>

            <div class="12u">
                <p class="text-center">
                    <a href="#" class="button"><i class="fa fa-camera"></i> Galería</a>
                </p>
            </div>

            <div>
                <h3>¡Busca a tu próximo compañero de vida!</h3>
                <form action="/adopta/busqueda" id="frmBusqueda" method="post">
                    <div class="row uniform">
                        <div class="4u 12u$(xsmall)">
                            <div class="select-wrapper">
                                <select name="especie" id="especie" required>
                                    <option value="">- Especie -</option>
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                </select>
                            </div>
                        </div>
                        <div class="4u 12u$(xsmall) d-none">
                            <div class="select-wrapper">
                                <select name="genero" id="genero">
                                    <option value="">- Género -</option>
                                    <option value="Hembra">Hembra</option>
                                    <option value="Macho">Macho</option>
                                    <option value="Todos">Todos</option>
                                </select>
                            </div>
                        </div>
                        <div class="4u$ 12u$(xsmall) d-none">
                            <div class="select-wrapper">
                                <select name="talla" id="talla">
                                    <option value="">- Talla -</option>
                                    <option value="Chica">Chica</option>
                                    <option value="Mediana">Mediana</option>
                                    <option value="Grande">Grande</option>
                                    <option value="Todos">Todas</option>
                                </select>
                            </div>
                        </div>
                        <div class="12u">
                            <button type="submit" class="button special">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="resultados"></div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(function(){
            $("#frmBusqueda")[0].reset();

            $("#especie").change(function(e){
                $("#genero").parent().parent().removeClass('d-none');
            });

            $("#genero").change(function(e){
                $("#talla").parent().parent().removeClass('d-none');
            });

            $("#frmBusqueda").submit(function(e){
                e.preventDefault();
                if($("#genero").val()==""){
                    $("#genero").focus();
                    return false;
                }
                if($("#talla").val()==""){
                    $("#talla").focus();
                    return false;
                }

                $("#resultados").html('<div class="text-center"><p><strong>Espere un momento por favor ...</strong></p></div>');

                $.ajax({
                    url : '/api/adopta/busqueda',
                    type: 'post',
                    data: $("#frmBusqueda").serialize()
                }).success(function(data){
                    if(Array.isArray(data) && data.length>0){
                        var body = '<div class="flex flex-4 text-center contentResult">';
                        for(i=0;i<data.length;i++){
                            body += imprimeRescatadito(data[i]);
                        }
                        body += '</div>';
                        $("#resultados").html(body);
                    }else $("#resultados").html('<div class="text-center"><p><strong>No hubo coincidencias en su búsqueda, intente con otros datos.</strong></p></div>');
                }).error(function(e){
                    alert("Por el momento el servicio NO está disponible, disculpe las molestias");
                });
            });
        });

        function imprimeRescatadito(rescatadito)
        {
            var bodyR = '<div class="box person result">'+
                            '<div class="image round">'+
                                '<img src="{{asset('storage/images/rescataditos')}}/'+rescatadito.foto+'" alt="'+rescatadito.nombre+'" class="imageR" />'+
                            '</div>'+
                            '<h3>'+rescatadito.nombre+'</h3>'+
                            '<a href="/adopta/'+rescatadito.id+'/conoceme" target="_blank"><button class="buton special small">CONÓCEME</button></a>'+
                        '</div>';
            return bodyR;
        }
    </script>
@endpush
