@extends('layout')
@section('title') ZONA D - PROTOCOLO COVID @endsection
@section('description')
    Abrimos Zona D y Paintball Zona D con la máxima ilusión y con todo nuestro esfuerzo para lograr que el mayor número de personas puedan disfrutar
    de una magnífica experiencia en nuestros 35.000 metros cuadrados al aire libre y ¡LIBRE DE VIRUS!
@endsection
@section('content')
    <div class="container-fluid mb-5 pb-lg-5">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12 roboto">
                            <p class="text-white text-center">
                                Abrimos <b class="text-red">Zona D y Paintball Zona D</b> con la máxima ilusión y con todo nuestro esfuerzo para lograr
                                que el mayor número de personas puedan disfrutar de una magnífica experiencia en nuestros 35.000 metros cuadrados
                                <b class="text-red">al aire libre y...</b>
                            </p>
                            <h5 class="text-red text-center">
                                <b>¡LIBRE DE VIRUS!</b>
                            </h5>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-10 col-12 offset-lg-1 offset-0 impact">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4 col-12 mb-sm-0 mb-5">
                                        <img class="w-100" src="{{asset('images/protocolo-covid.png')}}" alt='Una caricatura de un virus verde sobre un fondo rojo y con un tachón rojo encima sobre el que se lee el texto "Espacio seguro" en color blanco'>
                                    </div>
                                    <div class="col-sm-7 col-12 offset-md-1 offset-0">
                                        <h1 class="text-red align-vertical">PROTOCOLO SEGURIDAD COVID-19</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-10 col-12 offset-lg-1 offset-0 text-white text-justify roboto">
                           <ul>
                               <li>
                                   <p>Todos los asistentes por el mero hecho de asistir aceptan el PROTOCOLO COVID-19 Y LAS CONDICIONES DE USO (disponibles en esta web).</p>
                               </li>
                               <li>
                                   <p>Zona D dispone de 35.000m² al aire libre donde no hay problemas de saturación de aforos.</p>
                               </li>
                               <li>
                                   <p>
                                       Es obligatorio el uso de mascarilla y geles Hidroalcohólicos durante la estancia en Zona D, así como mantener la distancia recomendada
                                       entre diferentes grupos y participantes de un mismo grupo.
                                   </p>
                               </li>
                               <li>
                                   <p>
                                       Disponemos de gel Hidroalcohólico el cual estará en el servicio, recepción y los monitores siempre llevarán con ellos. Aún así
                                       rogamos llevéis vuestro propio gel para ser aún más aséptico.
                                   </p>
                               </li>
                               <li>
                                   <p>
                                       En caso de algún participante tenga síntomas, como fiebre, dicho participante no puede asistir a la actividad mientras que el
                                       resto del grupo sí
                                   </p>
                               </li>
                               <li>
                                   <p>
                                       Al llegar a Zona D tomaremos la temperatura con termómetro de infrarrojos a todos los participantes como a los acompañantes.
                                       En caso de detectar alguien con fiebre tendrá que abandonar las instalaciones.
                                   </p>
                               </li>
                               <li>
                                   <p>Todo el material está previamente higienizado con Gel Hidroalcohólico.</p>
                               </li>
                               <li>
                                   <p>Respetar en todo momento la distancia entre las personas.</p>
                               </li>
                               <li>
                                   <p>Los regalos los entregarán sin bolsas, y un adulto del cumpleañer@ los desinfectará.</p>
                               </li>
                           </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-12 offset-lg-1 offset-0 roboto">
                            <h5 class="text-center text-red">Ya solo queda que lo paséis en grande en Zona D, ¡Nos vemos!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
