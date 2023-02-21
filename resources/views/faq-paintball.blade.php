@extends('layout')
@section('title') FAQ PAINTBALL - ZONA D @endsection
@section('description')
    PREGUNTAS FRECUENTES ACERCA DEL PAINTBALL
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}">
@endsection
@section('content')
    <div class="container-fluid faq mb-5 pb-lg-5">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-0">
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-12 impact">
                            <h2 class="text-red">PREGUNTAS FRECUENTES</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-orange mb-3"><b>¿Es seguro jugar al Paintball?</b></h5>
                            <p class="text-white text-justify">
                                Si, el Paintball es de los deportes más seguros que existen. Si se respeta la regla más
                                importante que existe (no quitarse nunca la máscara durante la partida), las posibles
                                lesiones se reducen a algún arañazo o torcedura de menor importancia. La otra regla
                                en las que hacemos hincapié es: siempre que no se esté jugando mantener puesto el
                                chupete y el seguro .
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-orange mb-3"><b>¿Cuál es el número mínimo de personas para jugar?</b></h5>
                            <p class="text-white text-justify">
                                El número mínimo de personas debe ser de 8. Si sois menos hacérnoslo saber para incluiros
                                en nuestra lista de partidas abiertas, y así ayudaros a formar un grupo con el que
                                disfrutar de una gran partida de Paintball en Zona D Paintball.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Quienes pueden jugar al Paintball?</b></h5>
                            <ul>
                                <li class="text-white">
                                    <p>Cualquier persona mayor de 18 años puede jugar en Zona D.</p>
                                </li>
								<li class="text-white">
                                    <p>Los chicos y chicas entre 14 y 18 años deberán venir con DNI en vigor y una autorización paterna que podéis descargar aquí:</p>
                                    <p>
                                        —
                                        <a class="text-orange" target="_blank" href="{{asset('files/autorizacion entre 14 y 18.pdf')}}">
                                            <u>Descargar autorización a menores de edad entre 14 y 18</u>
                                        </a>
                                        —
                                    </p>
                                </li>
								<li class="text-white">
                                    <p>
										Los niños y niñas de entre 8 y 13 años jugarán a una modalidad de Paintball especial con equipos específicamente adaptados para ellos.
										Deberán traer autorización paterna, que podéis descargar aquí:
									</p>
                                    <p>
                                        —
                                        <a class="text-orange" target="_blank" href="{{asset('files/autorizacion entre 8 y 13.pdf')}}">
                                            <u>Descargar autorización a menores entre 8 y 13 años</u>
                                        </a>
                                        —
                                    </p>
                                </li>
                                <li class="text-white">
                                    <p>
                                        Animamos a todos a venir y descargar adrenalina realizando una actividad deportiva en un entorno completamente natural.
                                        El Paintball en Zona D Paintball es ideal para empresas, despedidas de soltero, actividades de multiaventura, o simplemente
                                        para disfrutar de un día divertido, original y, sobretodo, diferente.
                                    </p>
                                    <p>
                                        —
                                        <a class="text-orange" target="_blank" href="{{asset('files/aceptacion de condiciones.pdf')}}">
                                            <u>Descargar aceptación de condiciones para jugar en Zona D y Zona D Paintball</u>
                                        </a>
                                        —
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-10 col-12 offset-lg-1 offset-0">
                            <img class="w-100" src="{{asset('images/faq-paintball-1.png')}}" alt='Personas jugando al Paintball'>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Cuánto tiempo puedo jugar?</b></h5>
                            <p class="text-white text-justify">
                                En Zona D Painball, el límite de tiempo es de 3 horas y media, desde la hora que se les cite. Nuestra experiencia nos dice que es
                                tiempo de sobra para utilizar hasta 1000 bolas. La mayoría de los campos dejan jugar 90 minutos, pero nosotros queremos que disfruten
                                de la experiencia sin prisas y saboreando todos los escenarios posibles. Únicamente rogamos puntualidad para que todas las partidas
                                discurran de manera fluida. A partir de ahí las únicas limitaciones serán tus energías y la visibilidad mínima necesaria.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Qué días se puede jugar?</b></h5>
                            <p class="text-white text-justify">Se puede jugar cualquier día del año siempre que reserves con suficiente antelación.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Cuál es el horario?</b></h5>
                            <p class="text-white text-justify">
                                Nuestro horario es de lunes a viernes de 16.00 h a 20.00 horas
                            </p>
							<p class="text-white text-justify">
                                Sábados, Domingos y festivos de 10.00 h a 14.00 horas y de 16.00 h a 20.00 horas
                            </p>

                            <p class="text-white text-justify">
                               Recuerda que hay un mínimos de personas para poder reservar.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Qué tipo de ropa debo llevar?</b></h5>
                            <p class="text-white text-justify">
                                Te recomendamos que lleves ropa cómoda, y calzado deportivo o de montaña. ¡El Paintball es un deporte en el que no pararás
                                de correr, esconderte y arrastrarte para sorprender a tus rivales y ganar la partida!
                            </p>
							 <p class="text-white text-justify">
                                También hay posibilidad de alquiler mono de camufflaje por 2.50€
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Se manchará mi ropa de pintura?</b></h5>
                            <p class="text-white text-justify">
                                No, en Zona D os damos las mejores equipaciones del mercado, y éstas incluyen monos integrales que cubren
                                incluso el cuello. Aún así la pintura que se utiliza es completamente biodegradable y sale simplemente con darle un poco de agua.
                            </p>
                        </div>
                    </div>
					<div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Se manchará mi ropa de pintura?</b></h5>
                            <p class="text-white text-justify">
								Lla pintura que se utiliza es completamente biodegradable y sale simplemente con darle un poco de agua.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Se puede jugar al Paintball si llueve o hace frío?</b></h5>
                            <p class="text-white text-justify">
                                Si, se puede jugar si llueve o hace frío.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 roboto">
                            <h5 class="text-red mb-3"><b>¿Qué debo hacer para reservar?</b></h5>
                            <p class="text-white text-justify">
                                Solo tienes que llamarnos al  <a target="_blank" href="https://api.whatsapp.com/send?phone=622316172"><u class="text-red">622 316 172</u></a>,
                                o mandarnos un correo a <a target="_blank" href="mailto:info@zona-d.com"><u class="text-red">info@zona-d.com</u></a> y buscaremos el
                                horario y la oferta que mejor se te adapte. También puedes mandarnos un WhatsApp diciéndonos que quieres reservar o que quieres información,
                                y nosotros te llamamos. ¡Más fácil imposible!
                            </p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-10 col-12 offset-lg-1 offset-0">
                            <img class="w-100" src="{{asset('images/reserva-en-zona-d.png')}}" alt='Una pistola de paintball al lado del texto "Reserva tu día en Zona D"'>
                        </div>
                    </div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Cómo se juega?</b></h5>
							<p class="text-white text-justify">
								Los juegos más comunes consisten en dividir a los participantes en dos equipos, y asignarles misiones o diferentes retos.
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Cuántas bolas utilizaré?</b></h5>
							<p class="text-white text-justify">
								Aunque esto depende mucho de la persona y de la estrategia que adopte cada uno, lo normal es usar entre 100-300 bolas para disfrutar de la partida al máximo.
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Cuáles son nuestras tarifas?</b></h5>
							<p class="text-white text-justify">
								Te recomendamos que visites el apartado <a class="text-red" href="{{url('tarifas-y-reservas')}}"><u>“Tarifas y reservas”</u></a>
								para encontrar la promoción que mejor se adapte a vuestro grupo.
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Cuándo se elimina un jugador?</b></h5>
							<p class="text-white text-justify">
								Cuando reciba un impacto directo, tanto sobre la persona como sobre cualquier objeto que lleve, cuando sobrepase los límites de un campo,
								o cuando se quite la máscara durante una partida (recuerda, ¡nunca debes romper esta regla!).
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Qué tipo de marcadoras tenéis?</b></h5>
							<p class="text-white text-justify">
								En Zona D Paintball tenemos muy buenas marcadoras Os damos equipos de competición, con marcadoras semiautomáticas
								(cada vez que aprietas el gatillo sale una bola) Marca Tippmann FT-50 y FT-12
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Se pueden llevar gafas con la máscara?</b></h5>
							<p class="text-white text-justify">
								Si, nuestras máscaras están diseñadas para que puedas llevar debajo gafas de cualquier tipo.
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Qué distancia alcanzan las bolas? ¿Hacen daño?</b></h5>
							<p class="text-white text-justify">
								Las bolas pueden alcanzar una distancia aproximada de 60 metros. Si se disparan a distancias muy cortas (menos de 6 metros),
								pueden doler un poco, como cuando te dan un pellizco. Por ello nuestros monitores siempre estarán pendientes de que se respeten
								las normas en todo momento y nada impida que disfrutéis de esta gran experiencia.
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Qué ocurre si se cancela el evento y hemos pagado la señal?</b></h5>
							<p class="text-white text-justify">
								En caso de cancelación por parte del cliente, <u>avisando con al menos 48 horas de antelación</u>, o por decisión de Zona D Paintball
								debido a las condiciones climatológicas, la partida se podrá realizar dentro del periodo de 1 año, en otra fecha que convenga al cliente
								y a Zona D Paintball. La señal no será susceptible de devolución en ningún caso, ya que debéis tener en cuenta que una vez habéis reservado,
								rechazamos muchas partidas de personas que posteriormente quieren reservar a esa hora.
							</p>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-12 roboto">
							<h5 class="text-red mb-3"><b>¿Tenéis algún tipo de seguro dentro de las instalaciones?</b></h5>
							<p class="text-white text-justify">
								Si, tenemos dos seguros: <u>seguro de responsabilidad civil</u>, y <u>seguro de accidentes</u>, que actúa como complemento del anterior y que cubre
								a los participantes ante cualquier eventualidad.
							</p>
						</div>
					</div>
					<div class="row mb-4">
                        <div class="col-lg-8 col-md-10 col-12 offset-lg-2 offset-md-1 offset-0">
                            <img class="w-100" src="{{asset('images/faq-paintball-2.png')}}" alt='Personas jugando al Paintball'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
