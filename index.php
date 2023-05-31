<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta description -->
    <meta name="description" content="Projectes 2">
    
    <!-- Meta Keywords -->
    <meta name="Keywords" content="html, css, js">
    <meta name="author" content="Silvia Pujadas">
    <meta name="copyright" content="Silvia Pujadas">
    <meta name="locality" content="Barcelona, España">
    <meta name="revised" content="Mayo 2023">

	<!-- Libreria Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<!-- Link Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<!-- My css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Libreria Swiper JS -->
	<script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script defer src="assets/js/swiper.js"></script>
	<!-- My JS -->
	<script defer src="assets/js/app.js"></script>
	<script defer src="assets/js/login.js"></script>
	<!-- Link favicon -->
    <link rel="icon" type="image/x-icon" href="assets/media/favicon.png">

	<title>Zoo Barcelona</title>	

</head>
<body>
	<?php include 'template/header.php'; ?>

	<main>
		<section class="hero-image animate__animated animate__fadeIn">
			<div id="triangle" class="figuras"><img src="assets/media/home/triangle.png" alt="triangle"></div>
			<div id="rectangle" class="figuras"><img src="assets/media/home/rectangle.png" alt="rectangle"></div>
			<div class="container">
				<div class="hero">
					<div class="content-hero animate__animated animate__fadeInLeft">
						<h2 class="title-slogan">EL FUTURO ESTÁ AQUÍ</h2>
						<h1 class="title">Zoo <span>Inmersivo</span></h1>
						<p class="text-global">Sumérgete en una aventura animal envolvente y vive una experiencia única al adentrarte en el hábitat natural de los animales. En nuestro zoo inmersivo, podrás interactuar con ellos y sentirte parte de su mundo, mientras aprendes sobre sus comportamientos y necesidades. ¡Disfruta de este viaje tan emocionante y lleno de vida!</p>
						<div class="buttons">
							<a href="https://www.vendaonline.bsmsa.cat/zoo_muslinkIII/venda/index.jsp?lang=2&nom_cache=ZOO&property=ZOO&grupActiv=3&_gl=1*1pvutbb*_ga*MTM1OTIzMjg5OC4xNjY0ODkzNTgy*_ga_DZ8WNG4H14*MTY4Mjg3MTE2My40OS4wLjE2ODI4NzExNjMuMC4wLjA." target="_blank"><button class="btn">Entradas</button></a>			
							<button class="btn" onclick="location.href='juegos.php'">Jugar ahora</button>
						</div>
					</div>
				</div>
			</div>
			<div id="circle" class="figuras"><img src="assets/media/home/circle.png" alt="circle"></div>
			<div id="cross" class="figuras"><img src="assets/media/home/cross.png" alt="cross"></div>
		</section>

		<div id="funcionamiento" class="container container-title">
            <div class="content-title">
                <h2 class="subtitle">FUNCIONAMIENTO DEL ZOO</h2>
            </div>
        </div>

		<section id="funcionamiento-zoo">
			<div class="container container-steps">
				<div class="steps-items">
					<div class="step">
						<p class="title-steps">1. Gafas de vr</p>
						<p class="text-steps text-global">Es necesario usar gafas de realidad virtual para participar. Estas gafas són proporcionadas por el propio zoo ya que estarán en cada una de las instalaciones de cada animal y no requieren que los visitantes traigan sus propias gafas.</p>
					</div>
					<div class="step">
						<p class="title-steps">2. Interacción</p>
						<p class="text-steps text-global">El zoo también proporcionará algunos elementos adicionales, como un controlador para interactuar con los animales o un dispositivo para simular la sensación de estar dentro del hábitat de cada animal.</p>
					</div>
					<div class="step">
						<p class="title-steps">3. Zonas</p>
						<p class="text-steps text-global">Los niños pueden disfrutar de la experiencia del zoo virtual, siempre y cuando estén acompañados por un adulto que los supervise. Aún así hay espacios en los que se les indica el mínimo de edad para poder participar. Estas restricciones están para garantizar una experiencia segura y satisfactoria para todos los participantes.</p>
					</div>
					<div class="step">
						<p class="title-steps">4. Visita</p>
						<p class="text-steps text-global">Para participar en las actividades no es necesario que los visitantes se registren. Los soportes físicos tàctiles que se encuentran en las instalaciones del zoo, servirán como una herramienta educativa, ya que tienen información sobre cada especie y su hábitat natural. De esta manera, los visitantes podrán investigar y potenciar su educación antes de participar en cada actividad.</p>
					</div>
					<div class="step">
						<p class="title-steps">5. Registrarse</p>
						<p class="text-steps text-global">Si decides registrarte, podrás acumular puntos donde podrás visualizarlos en nuestra propia aplicación. Estos puntos sirven para obtener descuentos, promociones exclusivas y para tener la oportunidad de participar en una campaña de recaudación de fondos, promoviendo la causa del zoo y recaudando dinero para la conservación de los animales y la protección de su hábitat natural.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="exp-virtual">
			<div id="triangle-2" class="figuras"><img src="assets/media/home/triangle-2.png" alt="triangle"></div>
			<div class="container virtual">
				<div class="image-virtual">
					<img id="ellipse" src="assets/media/home/Ellipse.png" alt="ellipse">
					<img id="joystick" src="assets/media/home/joystick.png" alt="joystick">
				</div>
				<div class="text-virtual">
					<h2 class="subtitle fade" data-scrollposition="1200">Experiencia virtual</h2>

					<p class="text-global fade" data-scrollposition="1300">Visita uno de los apartados más interesantes de nuestro zoo virtual donde podrás adentrarte en el mundo animal y descubrir, aprender e investigar sobre sus curiosidades y su entorno. Desde los animales más comunes hasta los más exóticos, podrás aprender sobre su hábitat natural, sus costumbres, alimentación y comportamiento.</p>

					<p class="text-global fade" data-scrollposition="1400">Sumérgete en un mundo de conocimiento y curiosidades sobre la fauna y la flora, explorando el el mundo animal en todo su esplendor y descubriendo su importancia para el ecosistema. ¡Te esperamos!</p>
					<button class="btn fade" data-scrollposition="1400" onclick="location.href='exp-virtual.php'">Accede</button>	
					
				</div>
			</div>
			<div id="circle-2" class="figuras"><img src="assets/media/home/circle.png" alt="circle"></div>
		</section>

		<section id="actividades">
			<div id="bubbles" class="figuras"><img src="assets/media/home/bubbles.png" alt="bubbles"></div>
			<div class="container activities">
				<div class="text-actividades">
					<h2 class="subtitle fade" data-scrollposition="1800">Actividades</h2>
					<p class="text-global fade" data-scrollposition="1900">Nuestras actividades están diseñadas para todas las edades y niveles de habilidad, desde niños pequeños hasta adultos mayores, con niveles de dificultad que se ajustan a cada jugador. Además, están en constante actualización, por lo que siempre tendrás algo nuevo y emocionante que descubrir.</p>

					<p class="text-global fade" data-scrollposition="2000">Desde juegos de aventura, juegos educativos y de simulación de animales, hasta juegos de estrategia y competición, ¡tenemos todo lo que necesitas para pasar horas de diversión y entretenimiento! ¡No te pierdas la oportunidad de experimentar la vida salvaje como nunca antes lo habías hecho!</p>	
				</div>

				<div class="carroussel-container swiper fade" data-scrollposition="2100">
					<div class="carroussel-content">
						<div class="card-wrapper swiper-wrapper">
							<div class="card swiper-slide">
								<div class="card-bg">
									<div class="image-content">
										<div class="card-image">
											<img src="assets/media/home/leon.jpg" alt="leon">
										</div>
									</div>

									<div class="card__content">
										<h3>Safari virtual</h3>
										<p class="text-global">Vive una aventura en África y experimenta la emoción de ver de cerca animales salvajes como leones, elefantes y jirafas en su hábitat natural.</p>
									</div>
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="card-bg">
									<div class="image-content">
										<div class="card-image">
											<img src="assets/media/home/camaleon.jpg" alt="camaleon">
										</div>
									</div>

									<div class="card__content">
										<h3>El laboratorio del biólogo</h3>
										<p class="text-global">Aprende sobre la ciencia detrás de la vida animal y participa en experimentos y proyectos que te permitirán descubrir el mundo natural en un entorno virtual seguro y educativo.</p>
									</div>
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="card-bg">
									<div class="image-content">
										<div class="card-image">
											<img src="assets/media/home/panda.jpg" alt="panda">
										</div>
									</div>

									<div class="card__content">
										<h3>El reto del cuidador</h3>
										<p class="text-global">Conviértete en un cuidador de animales virtual y aprende cómo se cuida a las diferentes especies del zoo. Alimenta a los animales, limpia sus jaulas y verifica su salud.</p>
									</div>
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="card-bg">
									<div class="image-content">
										<div class="card-image">
											<div id="shark">
												<div class="number"><p>16</p></div>
											</div>
											<img src="assets/media/home/tiburon.jpg" alt="tiburon">
										</div>
									</div>

									<div class="card__content">
										<h3>Supervivencia Extrema</h3>
										<p class="text-global">Sumérgete en un ambiente de supervivencia rodeado de animales peligrosos. Aprende a protegerte de los depredadores mientras tratas de sobrevivir en un entorno hostil y desafiante.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-button-next swiper-navBtn"></div>
					<div class="swiper-button-prev swiper-navBtn"></div>
					<div class="swiper-pagination"></div>
				</div>
			</div>	
		</section>

		<section id="formulario">
			<div class="container form">
				<div class="row">
					<div class="col">
						<div class="content-form">
							<h2 class="subtitle fade" data-scrollposition="2800">CONTACTO</h2>
							<p class="text-global fade" data-scrollposition="2900">Déjanos tus datos para que podamos ponernos en contacto contigo y ayudarte en qualquier duda que tengas.</p>
						</div>
					</div>
					<div class="col">
						<form action="model/formulario.php" class="form-contact fade" fade" data-scrollposition="3100" method="post">
							<div class="form-row">
								<input type="text" class="form-contact-input" id="w-40" name="nombre" placeholder="Nombre" maxlength="50" required />
								<input type="text" class="form-contact-input" id="w-60"name="apellidos" placeholder="Apellidos" maxlength="100" required />
							</div>
							<div class="form-row">
								<input type="tel" class="form-contact-input" id="w-33"name="telefono" placeholder="Teléfono" maxlength="10" />
								<input type="email" class="form-contact-input" id="w-60" name="email" placeholder="Email" maxlength="250" required />
							</div>
							<div class="form-row">
								<textarea class="form-contact-textarea" name="comentario" placeholder="Deja tu mensaje..." maxlength="500" required></textarea>
								<div class="politicas">
									<label class="container-check">
										<input type="checkbox">
										<div class="checkmark"></div>
										<p class="text-global">He leído y acepto la <a href="#" class="text-global text-politicas">Política de Privacidad</a></p>
									</label>
								</div>
								<div class="btn-form">
									<button type="submit" class="btn">Enviar</button>
								</div>								
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<div id="scrollUp">
			<a class="btnScrollUp"><img src="assets/media/home/scrollUp.png" alt="scrollUp"><img class="img-hover" src="assets/media/home/scrollUp-hover.png" alt="scrollUp"><span class="text-global">Volver arriba</span></a>
		</div>
	</main>

	<hr class="gradient">
	
	<?php include 'template/footer.php'; ?>

</body>
</html>