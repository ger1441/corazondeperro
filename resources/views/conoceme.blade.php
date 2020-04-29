@extends('layouts.page')

@push('styles')
    <link rel="stylesheet" href="/assets/css/adopta.css">
@endpush

@section('content')
    <section id="one" class="wrapper">
        <div class="inner">
            <div class="row"><h2>Cambia la vida de un rescatadito ...  ¡Adopta!</h2></div>
            <div class="row">
                <div class="6u 8u(medium) 12u$(small) text-center">
                    <div class="content-image">
                        <img src="{{asset("storage/images/rescataditos/$rescatadito->foto")}}" alt="{{$rescatadito->nombre}}">
                    </div>
                </div>
                <div class="4u 2u(medium) 12u$(small) detalles">
                    <h3>Nombre</h3>
                    <p><strong>{{$rescatadito->nombre}}</strong></p>
                    <h3>Género</h3>
                    <p><strong>{{$rescatadito->sexo}}</strong></p>
                    <h3>Talla</h3>
                    <p><strong>{{$rescatadito->talla}}</strong></p>
                    <h3>Edad aproximada</h3>
                    <p><strong>{{$rescatadito->edad}}</strong></p>
                    <h3>Descripción</h3>
                    <p><strong>
                            @if($rescatadito->description!="")
                                {{$rescatadito->description}}
                            @else
                                Por el momento no hay más detalles
                            @endif
                        </strong></p>
                </div>
            </div>
            @if(isset($rescatadito->animalitoHistoria->historia)&&!empty($rescatadito->animalitoHistoria->historia))
            <div class="row my">
                <div class="12u">
                    <div class="historia">
                        <h3>Historia</h3>
                        {!! $rescatadito->animalitoHistoria->historia !!}
                    </div>
                </div>
            </div>
            @endif

            @if(isset($rescatadito->animalitoGaleria) && count($rescatadito->animalitoGaleria)>0)
            <div class="row-my">
                <div class="12u">
                    <div class="historia">
                        <h3>Galeria</h3>
                        <div class="contendor-galeria">
                            @foreach($rescatadito->animalitoGaleria as $galeryAnimalito)
                                <img class="galeria_img" src="{{asset('storage/images/rescataditos/'.$galeryAnimalito->id_animalito.'/'.$galeryAnimalito->foto)}}" alt="{{$rescatadito->nombre}}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row my">
                <div class="12u">
                    <h3>Adóptame</h3>
                    <p>
                        <strong>Si estás interesado en adoptar a <span class="font-blue">{{$rescatadito->nombre}}</span> ponte en contacto con nosotros y trataremos de responderte a la brevedad.</strong><br>
                        <strong>Si por el momento NO puedes adoptar, agradeceríamos infinitamente tu <a href="/apoyanos">valioso apoyo</a>.</strong>
                    </p>
                    <form method="post" action="#">
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="name" id="name" value="" placeholder="Nombre" />
                            </div>
                            <div class="6u$ 12u$(xsmall)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                            </div>
                            <!-- Break -->
                            <div class="12u$">
                                <textarea name="message" id="message" placeholder="Déjanos tu mensaje o comentario, gracias por apoyar!" rows="6" style="resize: none;"></textarea>
                            </div>
                            <!-- Break -->
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="Enviar" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


