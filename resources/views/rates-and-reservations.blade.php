@extends('layout')
@section('title') ZONA D - OCIO, DEPORTES Y EVENTOS @endsection
@section('description')
    RESERVA ESPACIO EN TU AGENDA Y VEN A CONOCER TU NUEVO CENTRO DE OCIO
    AL AIRE LIBRE Y CELEBRA TODAS TUS FIESTAS CON NOSOTROS.
@endsection
@section('content')
    <div class="container-fluid mb-5 pb-lg-5">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-white roboto">
                            <p>Nuestros multijuegos en Zona D  pueden disfrutarse a partir de los 6 años de edad., y en Zona D Paintball a partir de 8 años de edad.</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-5 col-md-6 col-12 text-white roboto">
                            <p>Reservas mínimas por grupos, mínimo de 15 niños.</p>
                            <p>Horarios:</p>
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-3 offset-md-1 offset-0">
                                        <p>De Lunes a Viernes:</p>
                                    </div>
                                    <div class="col-8 text-right">
                                        <p>de 16:00 a 20:00 horas</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3 offset-md-1 offset-01">
                                        <p>Sábados, Domingos y Festivos:</p>
                                    </div>
                                    <div class="col-8 text-right">
                                        <p>de 10:00 a 14:00 horas</p>
                                        <p>de 16:00 a 20:00 horas</p>
                                    </div>
                                </div>
                            </div>
                            <p>Disponemos de seguro completo de responsabilidad civil y de accidentes.</p>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 text-white roboto">
                            <img class="w-100" src="{{asset('images/tarifas-y-reservas-1.png')}}" alt="Un hombre completando una pista de actividades al aire libre">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 impact">
                            <h2 class="text-orange">TARIFAS ZONA D</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 roboto text-white">
                            <p><b>PRECIO ESPECIAL POR APERTURA DE ZONA D: </b>16.50€ por persona.</p>
                            <p class="mb-2">Reservas por grupos mínimo de 15 niños.</p>
                            <p>Incluye:</p>
                            <ul>
                                <li><p>4 horas de diversión en nuestra zona de multijuegos.</p></li>
                                <li><p>Monitores/Árbitros altamente cualificados</p></li>
                                <li><p>Comida (opción A o B). La opción escogida deberá ser la misma para todos los niños/as del evento.</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 impact">
                            <h2 class="text-orange">TARIFAS ZONA D PAINTBALL</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto text-white">
                            <p><b>PRECIO ESPECIAL POR APERTURA DE ZONA D PAINTBALL, INFANTIL (8 A 13 AÑOS): 12€ por persona</b></p>
                            <p class="mb-2">Reservas por grupos mínimo de 12 niños.</p>
                            <p class="mb-2">Incluye: 100 bolas</p>
                            <p>Equipación:</p>
                            <ul class="mb-2">
                                <li><p>Marcadora</p></li>
                                <li><p>Máscara</p></li>
                                <li><p>Chaleco protector para todos los participantes</p></li>
                            </ul>
							<p class="mb-2">Monitores/Árbitros altamente cualificados</p>
							<p class="mb-4">Seguro completo de responsabilidad civil y accidentes.</p>
                            <p class="mb-2">-OPCIONES EXTRA– Recarga 100 bolas: 5€</p>
                            <p>Consulta nuestras ofertas de menús con bebidas para tomar en nuestro local y/o terraza.</p>
                            <p>La opción escogida deberá ser la misma para todos los niños/as del evento.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto text-white">
                            <p><b>TARIFAS ZONA D PAINTBALL ADULTOS (A PARTIR DE 14 AÑOS, CON AUTORIZACIÓN FIRMADA DE SUS PADRES): 16€ por persona.</b></p>
                            <p class="mb-2">Reservas por grupos mínimo de 12 personas.</p>
                            <p class="mb-2">Incluye: 100 bolas</p>
                            <p>Equipación:</p>
                            <ul class="mb-2">
								<li><p>Marcadora</p></li>
                                <li><p>Máscara</p></li>
                                <li><p>Chaleco protector para todos los participantes</p></li>
                            </ul>
							<p class="mb-2">Monitores/Árbitros altamente cualificados</p>
							<p class="mb-4">Seguro completo de responsabilidad civil y accidentes.</p>
                            <p class="mb-2">-OPCIONES EXTRA– Recarga 100 bolas: 5€</p>
							<p class="mb-2">Mono camuflaje: 2.50€</p>
                            <p>Consulta nuestras ofertas de menús con bebidas para tomar en nuestro local y/o terraza.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto text-white">
                            <h6>Opcional:</h6>
                            <div class="ml-5 mb-3">
                                <p>Pack Multiaventuras Zona D y Zona D Paintball Infantil, 26€ por niño</p>
                                <p>Reservas por grupos mínimo de 15 niños.</p>
                            </div>
                            <div class="ml-5">
                                <p>Pack Multiaventuras Zona D y Zona D Paintball Junior y adultos, 30€ por persona.</p>
                                <p>Reservas por grupos mínimo de 15 personas.</p>
                                <p>Comida para Adultos , menús a elegir y con posibilidad de personalizarlos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 roboto text-white">
                            <h6>Opcional:</h6>
                            <div class="ml-5">
                                <p>
                                    Pass Day Zona D y/o Zona D Paintball: Por 6€ más en tu entrada, podrás disfrutar de todos los multijuegos en Zona D durante todo el día.
									Para Zona D Paintball, consulta las condiciones.
                                </p>
                                <p>Puedes pedirnos una ampliación del menú escogido para personalizarlo a tu gusto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-12">
                            <img class="w-100 h-100" src="{{asset('images/tarifas-y-reservas-2.png')}}" alt='Niños jugando al paintball con un texto superpuesto en azul que dice "Paintball Kids"'>
                        </div>
                        <div class="col-md-6 col-12">
                            <img class="w-100 h-100" src="{{asset('images/tarifas-y-reservas-3.png')}}" alt="Adultos con equipamiento de paintball posando juntos para la foto.">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto text-white">
							<p>
								La entrega a cuenta para garantizar la reserva será de 100€. No se devolverá el importe en ningún caso. Hasta 48 horas antes de la celebración se podrá
								efectuar alguna modificación en la reserva. Pasado ese tiempo habrá que abonar nuevamente la entrega a cuenta establecida. La nueva fecha dependerá de la
								disponibilidad existente.
							</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6 col-12 roboto mb-4">
							<h4 class="text-red mb-5"><b>Porque todo se celebra mejor con un buen plato……!!!</b></h4>
                            <p class="text-white"><b>ESCOGE UNA OPCIÓN DE TU MENÚ. PUEDES AÑADIRLE MÁS COMIDA Y PERSONALIZARLO.</b></p>
                        </div>
						 <div class="col-lg-6 col-12">
							<img class="w-100 h-100" src="{{asset('images/tarifas-y-reservas-4.png')}}" alt='Chef mostrando una tarjeta en la que pone "ZONA D"'>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-12">
                            <p class="roboto text-white text-center mb-4">MENÚ OPCIÓN A</p>
							<div class="position-relative">
								<div class="text-white menu-text-block py-5 pl-5">
									<p class="mb-0"><b>Pack Zona D:</b> mínimo 15 personas:</p>
									<p class="mb-0">Incluye:</p>
									<ul class="mb-0">
										<li>3 botellas de Agua</li>
										<li>2 botellas de refrescos</li>
									</ul>
									<p class="mb-0">Por persona:</p>
									<ul class="mb-0">
										<li>1 Mini Hamburguesa</li>
										<li>1 Salchicha</li>
										<li>4 Bolitas de pollo </li>
										<li>Papas fritas</li>
									</ul>
									<p>*incluido en el precio de la entrada</p>

									<p class="mb-0"><b>Pack Zona D Paintball:</b> mínimo 12 niños</p>
									<p class="mb-0">Incluye:</p>
									<ul>
										<li>3 botellas de Agua</li>
										<li>2 botellas de refrescos</li>
									</ul>
									<p>Por persona:</p>
									<ul>
										<li>1 Mini Hamburguesa</li>
										<li>1 Salchicha</li>
										<li>4 Bolitas de pollo </li>
										<li>Papas fritas</li>
									</ul>
									<p>Extra por persona: 6.25€</p>
									<p><b>* PVP: 75.-€</b></p>
								</div>
								<img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
							</div>
                        </div>
					   <div class="col-md-6 col-12">
							<p class="roboto text-white text-center mb-4">MENÚ OPCIÓN B</p>
							<div class="position-relative">
								<div class="text-white menu-text-block py-5 pl-5">
									<p><b>Pack Zona D:</b> mínimo 15 personas:</p>
									<p class="mb-0">Incluye:</p>
									<ul class="mb-0">
										<li>3 botellas de Agua</li>
										<li>2 botellas de refrescos</li>
									</ul>
									<p class="mb-0">Por persona:</p>
									<ul class="mb-0">
										<li>1 Mini Pizza</li>
										<li>10 Bolitas de pollo</li>
										<li>Papas fritas</li>
									</ul>
									<p class="mb-4">*incluido en el precio de la entrada</p>

									<p><b>Pack Zona D Paintball:</b> mínimo 12 niños</p>
									<p class="mb-0">Incluye:</p>
									<ul>
										<li>3 botellas de Agua</li>
										<li>2 botellas de refrescos</li>
									</ul>
									<p>Por persona:</p>
									<ul>
										<li>1 Mini Pizza</li>
										<li>10 Bolitas de pollo</li>
										<li>Papas fritas</li>
									</ul>
									<p>Extra por persona: 6.25€</p>
									<p><b>* PVP: 75.-€</b></p>
								</div>
								<img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
							</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-4 col-lg-6 col-md-8 col-10 offset-xl-4 offset-lg-3 offset-md-2 offset-1">
                            <img class="w-100" src="{{asset('images/tarifas-y-reservas-5.png')}}" alt='Chef mostrando una tarjeta que pone "menú adultos a elegir"'>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-12">
                            <div class="position-relative">
                                <div class="text-white menu-text-block py-5 pl-5">
                                    <p><b>Picoteo A:</b></p>
                                    <p>Incluye:</p>
                                    <ul class="mb-4">
                                        <li>2 botellas de Agua, de 1,5L</li>
                                        <li>2 botellas de refrescos, de 1,5L</li>
                                        <li>1 Tortilla Mediana</li>
                                        <li>2 Bandejas de Sandwiches variados</li>
                                    </ul>
                                    <p class="mb-5"><b>* PVP: 38.-€</b></p>
                                    <p><b>Picoteo B:</b></p>
                                    <p>Incluye:</p>
                                    <ul class="mb-4">
                                        <li>2 botellas de Agua, de 1,5L</li>
                                        <li>2 botellas de refrescos, de 1,5L</li>
                                        <li>1 Tortilla Mediana</li>
                                        <li>2 Bandejas de Sandwiches variados</li>
                                        <li>1 Pizza Mediana</li>
                                    </ul>
                                    <p><b>* PVP: 46.-€</b></p>
                                </div>
                                <img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="position-relative">
                                <div class="text-white menu-text-block py-5 pl-5">
                                    <p><b>Picoteo C:</b></p>
                                    <p class="mb-0">Incluye:</p>
                                    <ul class="mb-2">
                                        <li>2 botellas de Agua, de 1,5L</li>
                                        <li>2 botellas de refrescos, de 1,5L</li>
                                        <li>1 Tortilla Mediana</li>
                                        <li>2 Bandejas de Sandwiches variados</li>
                                        <li>1/2Kg Papas Arrugadas</li>
                                        <li>1/2Kg  Pata Asada</li>
                                        <li>1 Empanada de atún mediana</li>
                                    </ul>
                                    <p class="mb-3"><b>* PVP: 55.-€</b></p>
                                    <p><b>Picoteo D:</b></p>
                                    <p class="mb-0">Incluye:</p>
                                    <ul class="mb-2">
                                        <li>3 botellas de Agua, de 1,5L</li>
                                        <li>2 botellas de refrescos, de 1,5L</li>
                                        <li>1 Tortilla Mediana</li>
                                        <li>2 Bandejas de Sandwiches variados</li>
                                        <li>1 Pizza Familiar</li>
                                        <li>1 Empanada de atún mediana</li>
                                    </ul>
                                    <p><b>* PVP: 60.-€</b></p>
                                </div>
                                <img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-4 col-lg-6 col-md-8 col-10 offset-xl-4 offset-lg-3 offset-md-2 offset-1 roboto">
                            <img class="w-100" src="{{asset('images/tarifas-y-reservas-6.png')}}" alt='Chef mostrando una tarjeta que pone "carta adicional"'>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-12">
                            <div class="position-relative">
                                <div class="text-white menu-text-block py-5 pl-5">
                                    <p><b>Precios por unidad:</b></p>
                                    <div class="d-flex pr-5 justify-content-between"><span>Pan tamaño pulquita</span><span>0.60€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Alioli, tarrina</span><span>2.25€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Pan con ajo</span><span>1,75€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Nuggets de Pollo</span><span>0.55€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Bolitas de Pollo, 4 unidades</span><span>2.15€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Sandwiches variados, por unidad</span><span>2,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Salchichas</span><span>0.60€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mini Hamburguesa, ternera-cerdo o pollo</span><span>2,25€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Hamburguesa, ternera-cerdo o pollo</span><span>4,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mini Pizza</span><span>2,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Pizza pequeña</span><span>6,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Pizza Mediana</span><span>9,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Pizza Familiar</span><span>12,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Tortilla pequeña</span><span>9,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Tortilla mediana</span><span>18,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Tortilla grande</span><span>27,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Empanada de atún pequeña</span><span>6,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Empanada de atún grande</span><span>12,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Papas fritas pequeñas</span><span>1,20€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Papas fritas grandes</span><span>2,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Papas gajo pequeñas</span><span>1,75€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Papas gajo grandes</span><span>2,65€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Croquetas de pescado o pollo</span><span>0.55€</span></div>
                                </div>
                                <img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="position-relative">
                                <div class="text-white menu-text-block py-5 pl-5">
                                    <p class="mb-4"><b>Precios por Ración:</b></p>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Papas arrugadas</span><span>4,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between">
                                        <span class="mb-2">Queso Semi con frutos secos y mermelada de naranja y pimientos</span>
                                        <span>6,00€</span>
                                    </div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Pata de cerdo asada</span><span>7,75€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Tiras de pollo con salsa de mostaza</span><span>7,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Delicias de pollo (bolitas a la pimienta)</span><span>7,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Ensaladilla rusa</span><span>6,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Tacos de pescado</span><span>8,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Albóndigas</span><span>6,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Ropa vieja</span><span>6,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Ropa vieja de pulpo</span><span>8,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Croquetas, pollo o pescado, (10 unidades)</span><span>5,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Croquetas ,ibérico, morcilla, gambas (12 unidades)</span><span>8,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Pulpo a la vinagreta</span><span>14,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Salpicón de marisco</span><span>13,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Paella mixta, por persona</span><span>6,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span class="mb-2">Paella de marisco, por persona</span><span>7,00€</span></div>
                                </div>
                                <img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-4 col-lg-6 col-md-8 col-10 offset-xl-4 offset-lg-3 offset-md-2 offset-1 roboto">
                            <img class="w-100" src="{{asset('images/tarifas-y-reservas-7.png')}}" alt='Chef mostrando una tarjeta que pone "nuestros postres"'>
                        </div>
                    </div>
                     <div class="row mb-4">
                        <div class="col-md-6 col-12">
                            <div class="position-relative">
                                <div class="text-white menu-text-block py-5 pl-5">
                                    <p><b>100% Caseros:</b></p>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de chocolate</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de Gofio</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse  de galleta oreo</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de polvito uruguayo</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de frutas del bosque</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de Fresa</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de Arándanos</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Mousse de suspiros de Moya</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Pudin</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Crema Catalana</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Arroz con Leche</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Natilla de vainilla</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Natilla de Chocolate</span><span>3,00€</span></div>
                                    <div class="d-flex pr-5 justify-content-between mb-4"><span>Porción de Bizcocho</span><span>1,50€</span></div>
                                    <p><b>Nuestras porciones de Tartas:</b></p>
                                    <div class="d-flex pr-5 justify-content-between"><span>Tarta Tres Chocolates</span><span>3,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Tarta de Piña</span><span>3,50€</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Tarta de queso La Viña</span><span>3,75€</span></div>
                                </div>
                                <img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="position-relative">
                                <div class="text-white menu-text-block p-5">
                                    <p><b>Tartas temáticas, clásicas y fondant:</b></p>
                                    <div class="d-flex pr-5 justify-content-between"><span>Paintball</span><span>Disney</span><span>Marvel</span></div>
                                    <div class="d-flex pr-5 justify-content-between"><span>Fornite</span><span>Bodas</span><span>Bautizos</span></div>
                                    <div class="d-flex pr-5 justify-content-between mb-3"><span>Comuniones y otros</span></div>
                                    <div class="container-fluid">
                                        <div class="row mb-4">
                                            <div class="col-4">
                                                <img class="w-100 h-100" src="{{asset('images/tartas-1.png')}}" alt="Tarta con temática de paintball">
                                            </div>
                                            <div class="col-4">
                                                <img class="w-100 h-100" src="{{asset('images/tartas-2.png')}}" alt="Tarta de Lilo y Stitch">
                                            </div>
                                            <div class="col-4">
                                                <img class="w-100 h-100" src="{{asset('images/tartas-3.png')}}" alt="Tarta de Disney">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><b>Mesas dulces:</b></p>
                                                <div class="d-flex pr-5 justify-content-between"><span>Vasitos de postre</span></div>
                                                <div class="d-flex pr-5 justify-content-between"><span>Profiteroles</span></div>
                                                <div class="d-flex pr-5 justify-content-between"><span>Magnum Choco</span></div>
                                                <div class="d-flex pr-5 justify-content-between"><span>Brownies</span></div>
                                                <div class="d-flex pr-5 justify-content-between"><span>Minicupcakes</span></div>
                                                <div class="d-flex pr-5 justify-content-between mb-2"><span>Vasitos de postre</span></div>
                                                <p><b>Consultar otras variedades.</b></p>
                                            </div>
                                            <div class="col-6">
                                                <img class="w-100 h-100" src="{{asset('images/postres.png')}}" alt="Carrito de postres">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img class="background-image" src="{{asset('images/menu-background.png')}}" alt="Carta del menú">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
