@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="/assets/css/admin.css">
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4>{{$adoptado->name}}</h4>
                </div>
            </div>
            <div class="row">
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
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3 mb-4">
                        <div class="card-header">
                            <h3 class="card-title"><strong>Historia</strong></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! $adoptado->historia  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection
