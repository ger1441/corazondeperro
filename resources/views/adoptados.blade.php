@extends('layouts.page')

@push('styles')
    <style>
        .content-historia-adopcion{
            border: 3px solid #5385c1;
            padding: 15px;
            margin-bottom: 35px;
        }
        .content-historia-adopcion h3{
            font-weight: bold;
            font-size: 1.6rem;
        }

        .content-image-estado {
            position: relative;
            width: 80%;
            margin: auto;
        }
        .content-image-estado:hover > div.estado{
            display: none;
        }
        .img-comparacion{
            width: 100%;
            height: 400px;
            border: 8px solid;
            opacity: 0.8;
        }
            .img-comparacion:hover{
                opacity: 1;
            }

        .img-antes{
            border-color: #ca1010;
        }
        .img-despues{
            border-color: #099918;
        }

        div.estado{
            position: absolute;
            background-color: rgba(0,0,0,0.8);
            width: 100%;
            bottom: 6px;
            font-weight: bold;
            color: #FFF;
            opacity: 1;
            z-index: 9999;
            padding: 10px 0px;
            text-align: center;
        }

        div.historia-adopcion{
            padding-left: 25px !important;
            margin-top: 25px;
        }
    </style>
@endpush
@section('content')
    <section id="one" class="wrapper">
        <div class="inner">

            @foreach($adoptados as $adoptado)
            <div class="content-historia-adopcion">
                <div class="text-center"><h3>{{$adoptado->name}}</h3></div>
                <div class="row">
                    <div class="6u 12u$(small)">
                        <div class="content-image-estado">
                            <div class="estado">
                                Antes
                            </div>
                            <img src="{{asset('storage/images/adoptados/'.$adoptado->foto_antes)}}" alt="{{$adoptado->nombre}} antes" class="img-fluid img-comparacion img-antes">
                        </div>
                    </div>
                    <div class="6u 12u$(small)">
                        <div class="content-image-estado">
                            <div class="estado">
                                Después
                            </div>
                            <img src="{{asset('storage/images/adoptados/'.$adoptado->foto_despues)}}" alt="{{$adoptado->nombre}} despues" class="img-fluid img-comparacion img-despues">
                        </div>
                    </div>
                </div>
                <div class="historia-adopcion">
                    {!! $adoptado->historia !!}
                </div>
            </div>
            @endforeach

            <div class="row">
                <div class="12u">
                    <p><strong>Si eres de las personas que han ayudado a conseguir un nuevo hogar a alguno de nuestros rescataditos, por favor <a
                            href="https://www.facebook.com/calpulalpancorazondeperro/" target="_blank">cuéntanos tu historia</a></strong></p>
                </div>
            </div>
        </div>
    </section>
@endsection
