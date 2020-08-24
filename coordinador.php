<!DOCTYPE html PUBLIC>
<html>
 <head>
 	<title>Coordiandor</title>
 	<link rel="stylesheet" type="text/css" href="css/estilos.css">
 	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 </head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body class="bodym">
	<?php
		session_start();
 		include 'funcion.php';
 		verificar_sesion();
	?>
	<div id="general">
		<div id="encabezado">
			<div id="logo">
				<H2 class="titulo">  <img src="imagen/logo-sena.png" width="92" height="99"> Coordinador</H2>
				<h3>bienbenido <?php echo $_SESSION['usua']  ?> </h3>
			</div>
			<div id="men" align="right">
				<form action="registro.html" method="post" name="form1" target="_blank"> 
					<input align="right" type="submit" name="bt_new_us" id="bt_new_us"  class="bt" value="Inicio Sesión">
				</form>
				<ul class="menu" >
					<li><a href="index.html">Inicio</a></li>
					<li><a href="">Menu 1</a>
						<ul>
							<li><a href="ejer01.php">submenu 01</a></li>
							<li><a href="">submenu 02</a></li>	
							<li><a href="">submenu 03</a></li>
							<li><a href="">submenu 04</a></li>		
						</ul>
					</li>	
					<li><a href="">Menu 2</a>
						<ul>
							<li><a href="">submenu 01</a></li>	
						</ul>	
					</li>
					<li><a href="">Crear 3</a>
						<ul>
							<li><a href="">submenu 01</a></li>
						</ul>
					</li>
					<li><a href="">Conlsutar 4</a>
						<ul>
							<li><a href="actividad01.php">submenu 01</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	<div id="baner">
		<img src="imagen/Banner.jpg" width="920" height="440">
	</div>
	<section>
	
		<h2 align="center">Estudiar técnico en sistemas del SENA</h2>
		 <P> <img src="imagen/tecnico.jpg" width="402" height="409" align="left"> Sistemas es una carrera que en la actualidad tiene bastante demanda laboral, ya que con el uso de las tecnologías de información y comunicación, se pueden mejorar los diferentes procesos productivos en los diferentes sectores como la industria, el comercio, sector turístico etc..</P>

		 <p>Dentro de los programas de formación titulada que nos ofrece el <b>SENA</b> encontramos el programa de técnico en sistemas, donde el estudiante se capacitará en las áreas de redes sociales, mantenimiento de equipos de cómputo y redes de computadores entre otros, brindándole elementos de formación profesional, con metodologías de aprendizaje innovadoras y con acceso a tecnologías de última generación. </p>

		 <p>En este programa de formación técnico, se verán temas como el mantenimiento preventivo y predictivo que garantice el buen funcionamiento de los equipos entre otros</p>

		 <p>Las personas interesadas en ingresar a este programa de formación a nivel técnico, deben hacer su inscripción en la página oficial de la entidad, dentro de las fechas estipuladas en cada convocatoria.</p>

		 <p>El SENA presenta 4 convocatorias al año, las cuales son trimestrales (febrero, mayo, agosto y noviembre) y algunas veces podemos contar con convocatorias extraordinarias.</p>

		 <h3>Requisitos de inscripción</h3>

		 <p>Para inscribirte a cualquier proceso educativo del SENA debes estar registrado en la plataforma SOFIA Plus, con este proceso tus datos quedarán incluidos en el sistema. Para esto puedes ingresar a este <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/registro.html">link</a>.</p>

		 <p>Dentro de los requisitos para inscribirte a la carrera técnica de sistemas, debes contar con un nivel educativo de básica secundaria, realizar la inscripción en las fechas estipuladas y presentar y aprobar oportunamente las pruebas de selección fase I y II y/o taller</p>

	</section>
	
</div>
	
</body>
</html>