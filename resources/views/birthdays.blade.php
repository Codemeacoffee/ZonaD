@extends('layout')
@section('title') CUMPLEAÑOS INFANTIL - ZONA D @endsection
@section('description')
    CUMPLEAÑOS INFANTIL
@endsection
@section('content')
    <div class="container-fluid faq mb-5 pb-lg-5 roboto">
        <div class="row mb-5">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-0">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="text-orange impact">CUMPLEAÑOS INFANTIL</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <p class="text-white text-justify">
                                Por fín llegó el momento de celebrar un cumpleaños original y diferente de verdad!!!
                            </p>
                            <p class="text-white text-justify">
                                ¿Te gusta el deporte? ¿Te gustan las emociones fuertes, cargadas de adrenalina?
                                Si es así, celébralo con nosotros en ZONA D Y ZONA D PAINTBALL, durante 4 horas de juegos <br>
                                Elige la opción que más te guste:
                            </p>
                            <ul>
                                <li>
                                    <p class="text-white">
                                        Multijuegos en Zona D (Pista Americana, Rocódromo, circuito de bicicletas, Fútbol, Cañón de Espuma y Petanca).<br>
                                        Incluye, Monitor, comida (Bebidas, Snacks y merienda).<br>
                                        Picoteos para adultos, y tarta bajo petición y precio a parte.
                                    </p>
                                </li>
                                <li>
                                    <p class="text-white">
                                        Zona D Painball<br>
                                        Incluye Monitor. La comida se puede solicitar a parte.
                                    </p>
                                </li>
                                <li>
                                    <p class="text-white">
                                        Pack Ambas combinaciones, (consultar condiciones y tarifas)
                                    </p>
                                </li>
                            </ul>
                            <p class="text-white text-justify">
                                Local para las celebraciones, Interior y en Terraza, desde la que podrán disfrutar de las vistas a la zona de multijuegos para poder
                                ver en todo momento como disfrutan los más pequeños.
                            </p>
                            <p class="text-white text-justify">
                                Posibilidad de reservas personalizadas, (consultar condiciones y tarifas)

                            </p>
                            <div class="row mb-5">
                                <div class="col-12 offset-0">
                                    <img class="w-100" src="{{asset('images/birthdays-1.png')}}" alt='Imagen compuesta por 4 fotos distintas de niños jugando a juegos tradicionales'>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <h4 class="text-red impact">Descarga aquí tu invitación de cumpleaños...!!!</h4>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6 col-12 mb-4">
                                    <a download href="{{asset('files/tarjeta de invitacion infantil.pdf')}}"><img class="w-100 h-100" src="{{asset('images/Tarjeta invitacion cumpleaños infantil.png')}}" alt='Invitación infantil'></a>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <a download href="{{asset('files/tarjeta de invitacion paintball junior.pdf')}}"><img class="w-100 h-100" src="{{asset('images/Tarjeta de invitacion paintball junior.png')}}" alt='Invitación junior'></a>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <h2 class="text-red impact mt-5">CUMPLEAÑOS ADULTOS</h2>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <img class="w-100" src="{{asset('images/birthdays-2.png')}}" alt='Logo de Zona D sobre un fondo de fuego'>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <p class="text-white text-justify">
                                        Por fin ha llegado el momento de <b>celebrar tu cumpleaños</b>, o el de un amigo o familiar, y esta vez quieres celebrar una fiesta de
										cumpleaños original y diferente de verdad, <b>quieres disfrutar de un día que no olvidarás</b>, haciendo una actividad que no sea la
										típica salida a cenar si eres un adulto, o ir a los típicos centros de ocio para niños.
                                    </p>
                                    <p class="text-white text-justify">
                                        ¿Te gusta el deporte? ¿Te gustan las <b>emociones fuertes</b>, cargadas de adrenalina? ¿Te gustan los juegos donde <b>disfrutar de un buen rollo especial con tus amigos</b>? Si es así, ¡no dudes en celebrar tu cumpleaños jugando en <b>ZONA D Y EN ZONA D PAINTBALL</b>,
                                        durante 4 horas de juegos.
                                    </p>
                                    <p class="text-white text-justify">
                                        Elige la opción que más te guste:
                                    </p>
                                    <ul>
                                        <li>
                                            <p class="text-white">
                                                Multijuegos en Zona D (Pista Americana, Rocódromo, circuito de bicicletas, Fútbol, Cañón de Espuma y Petanca).<br>
                                                Incluye, Monitor, comida (Bebidas, Snacks y merienda).<br>
                                                Tarta bajo petición y precio a parte.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-white">
                                                Zona D Painball<br>
                                                Incluye Monitor. La comida se puede solicitar a parte.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-white">
                                                Pack Ambas combinaciones, (consultar condiciones y tarifas)
                                            </p>
                                        </li>
                                    </ul>
                                    <p class="text-white text-justify">
                                        Local para las celebraciones, Interior y en Terraza.
                                    </p>
                                    <p class="text-white text-justify">
                                        Posibilidad de reservas personalizadas, (consultar condiciones y tarifas)
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-4">
                                    <img class="w-100 h-100" src="{{asset('images/birthdays-3.png')}}" alt='Jugadores de paintball celebrando un cumpleaños'>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <img class="w-100 h-100" src="{{asset('images/birthdays-4.png')}}" alt='Collage de fotos de adultos y niños realizando actividades al aire libre'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-4">
                                    <img class="w-100 h-100" src="{{asset('images/birthdays-5.png')}}" alt='Jugadores de paintball cubriendose en una cobertura'>
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <img class="w-100 h-100" src="{{asset('images/birthdays-6.png')}}" alt='Adultos disfrutando en una terraza al aire libre'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
