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

	<!-- Link css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/header-virtual.css">
	<!-- Link js -->
	<script defer src="assets/js/app.js"></script>
	<!-- Link favicon -->
    <link rel="icon" type="image/x-icon" href="assets/media/favicon.png">

	<title>Zoo Barcelona | Experiencia Virtual</title>

</head>
<body>
	<?php include 'template/header.php'; ?>

	<div class="hero-container">
		<div class="cont-slides">
			<div class="mySlides slide-1 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2>BIENVENIDO AL ESPACIO VIRTUAL DE</h2>
						<h1>EUROPA</h1>
					</div>
				</div>
			</div>
			<button onclick="showModalVideo('modalEuropa')" class="btn-virtual">Ver Vídeo</button>
			
			<div class="mySlides slide-2 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2>SUMÉRGETE EN EL HOGAR DE LA FAUNA MÁS DIVERSA DE</h2>
						<h1>SUDAMÉRICA</h1>
					</div>
					<button onclick="showModalVideo('modalSudamerica')" class="btn-virtual">Ver Vídeo</button>
				</div>
			</div>
			
			<div class="mySlides slide-3 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2 id="america-slogan">APRENDE SOBRE LAS ESPECIES DE</h2>
						<h1 id="america">AMÉRICA DEL NORTE</h1>
					</div>
					<button onclick="showModalVideo('modalNorteamerica')" class="btn-virtual">Ver Vídeo</button>
				</div>
			</div>

			<div class="mySlides slide-4 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2>DEJATE SORPRENDER POR LOS TESOROS DEL MUNDO ANIMAL EN</h2>
						<h1>ANTÁRTIDA</h1>
					</div>
					<button onclick="showModalVideo('modalAntartida')" class="btn-virtual">Ver Vídeo</button>
				</div>
			</div>

			<div class="mySlides slide-5 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2>APRENDE A VALORAR LA IMPORTANCIA DE SU HABITAT EN</h2>
						<h1>AUSTRALIA</h1>
					</div>
					<button onclick="showModalVideo('modalAustralia')" class="btn-virtual">Ver Vídeo</button>
				</div>
			</div>

			<div class="mySlides slide-6 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2>ADÉNTRATE EN LA SELVA Y DESCÚBRE LA BELLEZA DE</h2>
						<h1>ASIA</h1>
					</div>
					<button onclick="showModalVideo('modalAsia')" class="btn-virtual">Ver Vídeo</button>
				</div>
			</div>

			<div class="mySlides slide-7 fade-animation">
				<div class="containerHero">
					<div class="textHero">
						<h2>DESCUBRE LA MAJESTUOSIDAD DE LA VIDA SILVESTRE EN</h2>
						<h1>ÁFRICA</h1>
					</div>
					<button onclick="showModalVideo('modalAfrica')" class="btn-virtual">Ver Vídeo</button>
				</div>
			</div>
			
			<div id="cont-arrows">
				<a class="prev" onclick="plusSlides(-1)"><img src="assets/media/exp-virtual/Polygon-left.png" alt=""><img class="arrow-hover" src="assets/media/exp-virtual/Polygon-left-hover.png" alt=""></a>
				<a class="next" onclick="plusSlides(1)"><img src="assets/media/exp-virtual/Polygon-right.png" alt=""><img class="arrow-hover" src="assets/media/exp-virtual/Polygon-right-hover.png" alt=""></a>
			</div>
			
			
			<div id="cont-dots">
				<div id="dots">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
					<span class="dot" onclick="currentSlide(6)"></span>
					<span class="dot" onclick="currentSlide(7)"></span>
				</div>
			</div>
		</div>
	</div>

	<div id="modalEuropa" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/E89TIl_9l8k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

	<div id="modalSudamerica" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/7IBzc3pajzY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

	<div id="modalNorteamerica" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/-bWVoyw9OU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

	<div id="modalAntartida" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/OfO6zxvhtBg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

	<div id="modalAustralia" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/GDykIi-TQRQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

	<div id="modalAsia" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/KfjIaEP0EtY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

	<div id="modalAfrica" class="modal">
		<iframe width="1120" height="630" src="https://www.youtube.com/embed/P8frC_cLLD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

</body>
</html>