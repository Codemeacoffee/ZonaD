@extends('layout')
@section('title') ZONA D - OCIO, DEPORTES Y EVENTOS @endsection
@section('description')
    RESERVA ESPACIO EN TU AGENDA Y VEN A CONOCER TU NUEVO CENTRO DE OCIO
    AL AIRE LIBRE Y CELEBRA TODAS TUS FIESTAS CON NOSOTROS.
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('js/adjustMap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/newsDisplayer.js')}}"></script>
@endsection
@section('content')
    <div class="container-fluid mb-5 pb-lg-5">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-0">
                <div class="container-fluid">
                    <div class="row overflow-hidden mb-4">
                        <div class="col-xl-8 col-lg-7 col-12 carousel-image-block position-relative px-0 mb-4">
                            <?php

                            if($information[0]->type == 'image'){
                                echo '<img class="w-100 position-absolute current" data-toggle="modal" data-target="#new-0" src="'.asset('uploads/'.$information[0]->media).'">';
                            }else{
                                echo '<video class="w-100 position-absolute current" data-toggle="modal" data-target="#new-0">
                                        <source src="'.asset('uploads/'.$information[0]->media).'">
                                        </video>';
                            }

                            for($i = 1; $i < Count($information); $i++){
                                if($information[$i]->type == 'image'){
                                    echo '<img class="w-100 position-absolute" data-toggle="modal" data-target="#new-'.$i.'" src="'.asset('uploads/'.$information[$i]->media).'">';
                                }else{
                                    echo '<video class="w-100 position-absolute" data-toggle="modal" data-target="#new-'.$i.'">
                                        <source src="'.asset('uploads/'.$information[$i]->media).'">
                                        </video>';
                                }
                            }

                            ?>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-12 carousel-content-block pl-4">
                            <h5 class="impact text-white mb-4">INFORMACIÓN Y NOTICIAS</h5>
                            <div class="scrollable-content">
                                <?php

                                foreach($information as $index => $current){
                                    echo '<div class="content roboto" data-toggle="modal" data-target="#new-'.$index.'">
                                    <p class="title text-red mb-1">'.$current->name.'</p>
                                    <p class="text text-white">'.$current->text.'</p>
                                    </div>

                                    <div class="modal fade" id="new-'.$index.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content modal-border bg-black">
                                          <div class="modal-header modal-border-bottom">
                                            <h5 class="modal-title text-red impact" id="exampleModalLabel">'.$current->name.'</h5>
                                            <button type="button" class="close impact text-red" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">';
                                    if($current->type == 'image'){
                                        echo '<img class="w-100" src="'.asset('uploads/'.$current->media).'">';
                                    }else{
                                        echo '<video class="w-100" controls>
                                                                <source src="'.asset('uploads/'.$current->media).'">
                                                                </video>';
                                    }
                                    echo'</div>
                                                    <div class="col-md-6 col-12">
                                                         <p class="text-justify text-white">'.$current->text.'</p>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer modal-border-top">
                                            <button type="button" class="btn bg-red text-white" data-dismiss="modal"><b>Cerrar</b></button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>';
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 roboto">
                            <p class="text-white text-justify">
                                <b class="text-orange">Zona D</b>, es el mayor Centro de Ocio, Deportes y Eventos en Gran Canaria con 35.000 m² al aire libre para
                                disfrutar de una gran variedad de juegos lúdico-deportivos para todas las edades.
                            </p>
                            <p class="text-white text-justify">
                                <b class="text-green">4 horas de diversión</b> Jugando en diferentes estaciones de multijuegos y campos de Paintball.<br>
                                Celebra un día perfecto con nosotros, diversión garantizada, y el mejor recuerdo de todas tus celebraciones.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 impact">
                            <h4 class="text-orange mb-4">En nuestras instalaciones de Zona D encontrarás:</h4>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <h5 class="text-white mb-3">Pista Americana</h5>
                                                    <h5 class="text-white mb-3">Rocódromo</h5>
                                                    <h5 class="text-white mb-3">Circuito de bicicletas</h5>
                                                    <h5 class="text-white mb-3">3 canchas de Fútbol polivalentes</h5>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h5 class="text-white mb-3">Paintball infantil y Junior</h5>
                                                    <h5 class="text-white mb-3">Paintball Adultos</h5>
                                                    <h5 class="text-white mb-3">Petanca</h5>
													<h5 class="text-white mb-3">Cañón de Espuma</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row mb-5">
						<div class="col-12">
							<p class="text-white">
								Puesta en forma y entrenamientos en Zona D y Zona D Paintball:
							</p>
							<p class="text-white ml-4">
								*Alquiler de Pista Americana para entrenamiento y mantenimiento físico.
							</p>
							<p class="text-white ml-4">
								*Alquiler de los campos de Paintball para tus entrenamientos.
							</p>
						</div>
					</div>
                    <div class="row mb-5">
                        <div class="col-12 roboto">
                            <p class="text-white text-justify">
                                ¡¡¡...<b class="text-orange">En Zona D y Zona D Paintball</b>, Contamos con parking gratuito para coches y Autocares, Vestuarios y taquillas.
                            </p>
                            <p class="text-white text-justify">
                                Quédate después en nuestro Local de celebraciones o en nuestra magnífica terraza, con vistas a la zona multijuegos, con posibilidad de
                                disfrutar de unos snacks, meriendas y bebidas para reponer fuerzas. Lo disponemos todo para que después de unas horas de máxima diversión
                                puedan seguir disfrutando de la mano de Zona D.
                            </p>
                            <p class="text-white text-justify">
                                Monitores/Árbitros altamente cualificados, y seguro completo de responsabilidad civil y accidentes…!!!
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 impact">
                            <h2 class="text-orange">¿DONDE ESTAMOS?</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <iframe class="map w-100" src="https://maps.google.com/maps?q=C/%20ALFONSO%20DE%20ARMAS%20AYALA,%20N%C2%BA%2030%20%20LA%20GALERA,%20TAMARACEITE,
                            %20LAS%20PALMAS%20DE%20GRAN%20CANARIA&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-white text-justify">
                                <b class="text-orange">ZONA D, OCIO DEPORTES Y EVENTOS</b> C/ ALFONSO DE ARMAS AYALA, Nº 30  LA GALERA, TAMARACEITE, LAS PALMAS DE GRAN CANARIA
                                35018, TLFNO: 622 316 172  EMAIL: info@zona-d.com
                            </h5>
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
