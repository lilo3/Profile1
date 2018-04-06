	<!DOCTYPE HTML>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Autonomy by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Perfil Profesional Y Personal</a></h1>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.html">Homepage</a></li>
						<li><a href="twocolumn1.html">Estudios Realizados</a></li>
						<li><a href="twocolumn2.html"> Hobbies </a></li>
						<li><a href="onecolumn.html">Aspiraciones</a></li>
					</ul>
				</nav>

			</div>
		</div>

		<div id="banner">&nbsp;</div>

		<div id="featured">
			<div class="container">
				<div class="row">

					<div class="3u">
						<section>
							<!--<a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a> !-->
							<header>
								<h2>Contacto</h2>
							</header>
													
						
						<?php 
						$nombre=$_POST ['nombre'];
						$apellido=$_POST['apellido'];
						$telefono=$_POST['telefono'];
						$correo=$_POST['correo'];
						$asunto=$_POST['asunto'];
						$comentario=$_POST['comentario'];


						

						if (isset($nombre)&& !empty($nombre)&&ctype_alpha($nombre) ) {
							echo "El nombre es : $nombre<br>";
						} else {
							echo "Por favor escriba un nombre";
						}
						
						if (isset($apellido)&& !empty($apellido)) {
							echo "El Apellido es : $apellido<br>";
						} else {
							echo "Por favor escriba un apellido";
						}

						if (isset($telefono)&&  !empty($telefono) && is_numeric($telefono)&&(strlen($telefono))>6){
							echo "El numero telefonico es : $telefono <br>";
						}else{
							echo "Por favor ingrese un numero valido <br>";
						}

						if (isset($correo)&& !empty($correo)&& filter_var($correo, FILTER_VALIDATE_EMAIL)) {
							echo "El correo es :$correo<br>";
						} else {
							echo "Ingrese un correo valido";
						}

						if (isset($asunto)&& !empty($asunto)) {
							echo "El asunto es : $asunto <br>";
						} else {
							echo "Ingrese un asunto";
						}

						if (isset($comentario)&& !empty($comentario)) {
							echo "El comentario  es : $comentario <br>";
						} else {
							echo "Ingrese un comentario";
						}

						
						
						
					
					   ?>

							
						</section>
					</div>

										
				</div>
			</div>
		</div>
		

		<div id="main">
			<div class="container">
				<div class="row">
					<div class="8u">
						<section>
							<header>
								<h2>Datos de Contacto</h2>
							</header>
							<p>Email : Lalopez072@misena.edu.co</p>
							<p>Telefono: 3225228691</p>
							<p>Cali -Valle </p>

						</section>
					</div>
					
				</div>
			</div>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>