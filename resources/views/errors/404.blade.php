@extends('layoutPage',['bodyClass'=>'subpage','navClass'=>''])
@push('styles')
    <link rel="stylesheet" href="assets/css/errors.css">
@endpush
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    <h1>404 | Página NO encontrada</h1>
                </div>
            </div>
        </div>
@endsection

{{--@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))--}}
