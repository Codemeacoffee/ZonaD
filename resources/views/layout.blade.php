@section('header')
    <!DOCTYPE html>
<html itemscope lang="es" dir="ltr" itemtype="https://schema.org/WebSite">
<head>
    <title>@yield('title')</title>
    <meta name="author" content="Jose Emmanuel Castro Martel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- SEO -->
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <meta property="og:site_name" content="Zona D"/>
    <meta property="og:title" content="@yield('title')">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" itemprop="image" content="{{asset('images/logo-seo.jpg')}}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:updated_time" content="{{strtotime(date('Y-m-d'))}}">
    <!-- SEO -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @yield('styles')
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    @yield('scripts')
</head>
<body>
    <nav id="main-navbar" class="navbar w-100 navbar-expand-lg navbar-dark bg-transparent position-fixed impact">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Interruptor de navegación">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav nav-fill mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/')}}"><h4>INICIO</h4></a>
                </li>
				<li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="groupsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h4 class="d-inline">ACTIVIDADES</h4>
                    </a>
                    <div class="dropdown-menu bg-black text-center border-0" aria-labelledby="groupsDropdown">
                        <a class="dropdown-item text-white" href="{{url('paintball-junior-infantil')}}">Paintball Junior e Infantil</a>
                        <a class="dropdown-item text-white" href="{{url('paintball-adultos')}}">Paintball Adultos</a>
                        <a class="dropdown-item text-white" href="{{url('cumpleaños')}}">Cumpleaños</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="groupsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h4 class="d-inline">GRUPOS</h4>
                    </a>
                    <div class="dropdown-menu bg-black text-center border-0" aria-labelledby="groupsDropdown">
                        <a class="dropdown-item text-white" href="{{url('campamento-urbano')}}">Campamento urbano</a>
                        <a class="dropdown-item text-white" href="{{url('grupos-escolares')}}">Grupos escolares</a>
                        <a class="dropdown-item text-white" href="{{url('team-building')}}">Team building</a>
                        <a class="dropdown-item text-white" href="{{url('otros-grupos')}}">Otros grupos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('tarifas-y-reservas')}}"><h4>TARIFAS Y RESERVAS</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('contacto')}}"><h4>CONTACTO</h4></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="faqDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h4 class="d-inline">FAQ</h4>
                    </a>
                    <div class="dropdown-menu bg-black text-center border-0" aria-labelledby="faqDropdown">
                        <a class="dropdown-item text-white" href="{{url('faq-zona-d')}}">Zona D</a>
                        <a class="dropdown-item text-white" href="{{url('faq-paintball')}}">Paintball</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid banner impact mb-5">
        <div class="row spacing-top">
            <div class="col-xl-4 col-md-6 col-12">
                <img class="w-100 mb-4" src="{{asset('images/logo-rojo.png')}}" alt='Texto "Zona D" en rojo'>
                <h2 class="text-orange text-center mb-4">OCIO, DEPORTES Y EVENTOS</h2>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <img class="w-100" src="{{asset('images/logo-completo.png')}}" alt='Jugadores de paintball con el texto "Zona D" superpuesto en color rojo sobre unas
                 gotas de pintura azul'>
            </div>
			<div class="col-xl-4 col-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-8 offset-md-0 offset-2">
							 <img class="w-100 mb-md-5" src="{{asset('images/seguridad-garantizada.png')}}" alt='Medalla dorada monstrando el texto "Seguridad 100% garantizada"'>
						</div>
						<div class="col-md-9 col-12">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-3 col-3 text-center">
										<img src="{{asset('images/icono-telefono.png')}}">
									</div>
									<div class="col-lg-9 col-9">
										<a target="_blank" href="https://api.whatsapp.com/send?phone=622316172">
											<h2 class="text-white mt-2">622 316 172</h2>
										</a>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-lg-3 col-3 text-center">
										<img src="{{asset('images/icono-email.png')}}">
									</div>
									<div class="col-lg-9 col-9">
										<a target="_blank" href="mailto:info@zona-d.com">
											<h2 class="text-white mt-2">info@zona-d.com</h2>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-8 offset-md-0 offset-2">
							<img class="w-100" src="{{asset('images/protocolo-covid.png')}}" alt='Una caricatura de un virus verde sobre un fondo rojo y con un tachón rojo encima sobre el que se lee el texto "Espacio seguro" en color blanco'>
						</div>
						<div class="col-md-9 col-12">
							<div class="container-fluid h-100">
								<div class="row h-100">
										<div class="col-12">
											<a class="w-100 align-vertical pt-md-0 pt-5" href="{{url('protocolo-covid')}}">
												<h3 class="text-orange text-xl-center ml-xl-0 ml-5">VER PROTOCOLO COVID</h3>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 pt-lg-5">
				<div class="col-12">
					<h1 class="text-white text-center roboto mb-5">
						35.000m² al aire libre para disfrutar de tus celebraciones!!!! <br>
						Ocio, Deportes y Eventos en Gran Canaria
					</h1>
				</div>
			</div>
		</div>
@show
@yield('content')
@section('footer')
    <div class="container-fluid impact">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-12 offset-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-4">
                            <h3 class="text-orange">
                                HABLA CON NOSOTROS
                            </h3>
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-lg-1 col-2">
                                        <img src="{{asset('images/icono-telefono-rojo.png')}}" alt="Icono que muestra un teléfono rojo">
                                    </div>
                                    <div class="col-lg-11 col-10">
                                        <h3 class="text-white mt-2">622 316 172</h3>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-1 col-2">
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=622316172">
                                            <img src="{{asset('images/icono-whatsapp.png')}}" alt="Icono de whatsapp mostrando un teléfono blanco dentro de un bocadillo
                                             de diálogo verde con los bordes blancos">
                                        </a>
                                    </div>
                                    <div class="col-lg-11 col-10">
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=622316172">
                                            <h3 class="text-white mt-2">Mándanos un Whatshap</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-1 col-2">
                                        <a target="_blank" href="mailto:info@zona-d.com">
                                            <img src="{{asset('images/icono-email-rojo.png')}}" alt="Icono que muestra un sobre rojo">
                                        </a>
                                    </div>
                                    <div class="col-lg-11 col-10">
                                        <a target="_blank" href="mailto:info@zona-d.com">
                                            <h3 class="text-white mt-2">info@zona-d.com</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <h3 class="text-orange text-lg-center">
                                CONTACTA CON NUESTROS CANALES
                            </h3>
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-xl-6 col-lg-8 col-md-12 col-sm-8 col-12 offset-xl-3 offset-lg-2 offset-md-0 offset-0">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <img class="w-100" src="{{asset('images/icono-facebook-gota-de-pintura.png')}}" alt='Icono alternativo de Facebook que
                                                    muestra una "F" blanca sobre una gota de pintura de color azul marino'>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=622316172">
                                                        <img class="w-100" src="{{asset('images/icono-whatsapp-gota-de-pintura.png')}}" alt="Icono alternativo de Whatsapp que
                                                        muestra un teléfono blanco sobre una gota de pintura verde">
                                                    </a>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <a target="_blank" href="https://telegram.me/">
                                                        <img class="w-100" src="{{asset('images/icono-telegram-gota-de-pintura.png')}}" alt="Icono alternativo de Telegram que
                                                        muestra un avión de papel blanco sobre una gota de pintura de color azul celeste">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-8 col-12 offset-lg-2 offset-0">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-4 col-3">
                                                    <a class="d-block" href="mailto:info@zona-d.com?subject=Adjunto CV- Deseo trabajar en Zona D">
                                                        <img class="w-100" src="{{asset('images/icono-trabaja-con-nosotros.png')}}" alt='Caricatura de un jugador de paintball
                                                        sobre una gota verde'>
                                                    </a>
                                                </div>
                                                <div class="col-md-8 col-9 position-relative">
                                                    <a class="d-block" href="mailto:info@zona-d.com?subject=Adjunto CV- Deseo trabajar en Zona D">
                                                        <h3 class="text-white align-vertical">
                                                            TRABAJA CON NOSOTROS
                                                        </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 py-lg-5 py-3">
                        <div class="col-12">
                            <h3 class="text-center text-red roboto">
                                <b>ZONA D, OCIO DEPORTES Y EVENTOS,</b>  EN LAS PALMAS DE  EN GRAN CANARIA <br><br>

                                RESERVA ESPACIO EN TU AGENDA Y VEN A CONOCER TU NUEVO CENTRO DE OCIO <br>
                                AL AIRE LIBRE Y CELEBRA TODAS TUS FIESTAS CON NOSOTROS. <br><br>

                                <b>¡PRUEBALO Y REPETIRÁS!</b>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@show
