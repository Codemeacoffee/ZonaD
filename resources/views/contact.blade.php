@extends('layout')
@section('title') CONTACTO - ZONA D @endsection
@section('description')
    ZONA D, OCIO DEPORTES Y EVENTO
    C/ ALFONSO DE ARMAS AYALA, Nº 30  LA GALERA, TAMARACEITE, LAS PALMAS DE GRAN CANARIA 35018
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('js/adjustMap.js')}}"></script>
@endsection
@section('content')
    <div class="container-fluid mb-5 pb-lg-5">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-0">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-12 impact">
                            <h2 class="text-orange">¿DONDE ESTAMOS?</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h5 class="text-white text-justify roboto">
                                <b class="text-orange">ZONA D, OCIO DEPORTES Y EVENTOS</b> C/ ALFONSO DE ARMAS AYALA, Nº 30  LA GALERA, TAMARACEITE, LAS PALMAS DE GRAN CANARIA
                                35018, TLFNO: 622 316 172  EMAIL: info@zona-d.com
                            </h5>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <iframe class="map w-100" src="https://maps.google.com/maps?q=C/%20ALFONSO%20DE%20ARMAS%20AYALA,%20N%C2%BA%2030%20%20LA%20GALERA,%20TAMARACEITE,
                            %20LAS%20PALMAS%20DE%20GRAN%20CANARIA&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-12 offset-lg-1 offset-0">
                            <img class="w-100" src="{{asset('images/reserva-en-zona-d.png')}}" alt='Una pistola de paintball al lado del texto "Reserva tu día en Zona D"'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
