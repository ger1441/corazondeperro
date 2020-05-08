@extends('layouts.page')

@push('styles')
    <link href="/assets/admin/plugins/twentytwenty-master/css/foundation.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/plugins/twentytwenty-master/css/twentytwenty.css" rel="stylesheet" type="text/css" />
    <style>
        .containerComparativePrincipal{
            display: flex;
            flex-direction: column;
            border: 1px solid #5385c1;
            padding: 10px 0px;
            margin-bottom: 30px;
        }
            .containerComparativePrincipal h3{
                margin: 5px 0px;
            }

        .containerComparative{
            width: 450px;
            height: 350px;
            margin: auto;
            margin-bottom: 20px;
        }
            .containerComparative img{
                width: 450px;
                height: 350px;
                /*object-fit: cover;*/
            }
            .containerComparative .containerImage{
                border: 3px solid #5385c1 !important;
            }

        @media screen and (max-width:580px){
            .containerComparative{
                width: 400px;
                height: 300px;
            }
            .containerComparative img{
                width: 400px;
                height: 300px;
            }
        }
        @media screen and (max-width:490px){
            .containerComparative{
                width: 300px;
                height: 200px;
            }
            .containerComparative img{
                width: 300px;
                height: 200px;
            }
        }
        @media screen and (max-width:490px){
            .containerComparativePrincipal .historiaAdopcion{
                padding-right: 15px;
            }
            .containerComparative{
                width: 280px;
                height: 180px;
            }
            .containerComparative img{
                width: 280px;
                height: 180px;
            }
        }
    </style>
@endpush
@section('content')
    <section id="one" class="wrapper">
        <div class="inner">

            @foreach($adoptados as $adoptado)
                <div class="row containerComparativePrincipal">
                    <div class="12u text-center">
                        <h3>{{$adoptado->name}}</h3>
                    </div>
                    <div class="12u containerComparative">
                        <div class="containerImage">
                            <img src="{{asset('storage/images/adoptados/'.$adoptado->foto_antes)}}" alt="{{$adoptado->nombre}} antes">
                            <img src="{{asset('storage/images/adoptados/'.$adoptado->foto_despues)}}" alt="{{$adoptado->nombre}} despues">
                        </div>
                    </div>
                    <div class="12u text-center historiaAdopcion">
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

@push('scripts')
    <script src="/assets/admin/plugins/twentytwenty-master/js/jquery.event.move.js"></script>
    <script src="/assets/admin/plugins/twentytwenty-master/js/jquery.twentytwenty.js"></script>
    <script>
        $(function(){
            $(".containerImage").twentytwenty();
        })
    </script>
@endpush
