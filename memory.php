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
    <link rel="stylesheet" href="assets/css/juegos.css">
	<!-- Link js -->
	<script defer src="assets/js/app.js"></script>
    <script defer src="assets/js/memory.js"></script>
	<!-- Link favicon -->
    <link rel="icon" type="image/x-icon" href="assets/media/favicon.png">

	<title>Zoo Barcelona | Juegos | Memory</title>

    

</head>
<body>
	<?php include 'template/header.php'; ?>
        
    <section id="memory">
        <div class="container content-memory">
            <div id="cont-comeBack">
                <a class="comeBack" href="juegos.php">
                    <img src="assets/media/juegos/arrow-back.png" alt="">
                    <img class="comeBack-hover" src="assets/media/juegos/arrow-back-hover.png" alt="">Volver atrás
                </a>
            </div>

            <div class="container-cards">
                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/africa.png" alt="">
                    <div class="back"></div>
                </div>
                
                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/antartida.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/asia.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/australia.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/europa.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/norteamerica.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/africa.png" alt="">
                    <div class="back"></div>
                </div>
                
                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/antartida.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/asia.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/australia.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/europa.png" alt="">
                    <div class="back"></div>
                </div>

                <div class="cardContainer">
                    <img src="assets/media/juegos/memory/norteamerica.png" alt="">
                    <div class="back"></div>
                </div>
            </div>
            

            <div id="textos">
                <p id="fails">Errores: </p>
                <p id="wins">Aciertos: </p>
                <button id="easy" class="btn-level btn">Fácil</button>
                <button id="hard" class="btn-level btn">Difícil</button>
            </div>
        </div>        
    </div>

</body>
</html>