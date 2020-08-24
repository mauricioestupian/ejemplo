<!DOCTYPE html PUBLIC>
<html>
 <head>
 	<title>Adminsitrador</title>
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 </head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body class="bodym">
	<?php
		session_start();
 		include '../funcion.php';
 		verificar_sesion();
	?>
	<div id="general">
		<div id="encabezado">
			<div id="logo">
				<H2 class="titul" >  <img src="../imagen/logo-sena.png" width="92" height="99">Administrador </H2>
			</div>
			<div id="men" align="right">
				<h5 align="right" margin-top="2px" >Usted se ha identificado como:
   				<?php echo $_SESSION['usua']." ( ";?>
    			<a href="../close.php")> Salir </a>)</h5>
				<ul class="menu" >
					<li><a href="administrador.php">principal</a>
					<li><a href="">Crear</a>
						<ul>
							<li><a href="new_coordi.php">Coordinador</a></li>
							<li><a href="">Docente</a></li>
							<li><a href="">Estudiante</a></li>
							<li><a href="">Programa</a></li>
							<li><a href="">Curso</a></li>
						</ul>
					</li>
					<li><a href="">Conlsutar</a>
						<ul>
							<li><a href="consul_coordi.php">Coordinador</a></li>
				            <li><a href="">Docente</a></li>
				            <li><a href="">Estudiante</a></li>
				            <li><a href="">Programa</a></li>
				            <li><a href="">Curso</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	<div id="baner">
		<img src="../imagen/banner_admin.png" width="100%" height="auto">
	</div>
	<section>

		<h2 align="center">propiedades Adminsitador</h2>
		 <P> En casi todas las organizaciones, los administrador de sitio web sirven como conectores del día moderno en todos los oficios. Se espera que posea los conocimientos suficientes para dirigir a un equipo de expertos en la creación y mantenimiento de un sitio web. Su función requiere creatividad, conocimientos técnicos y multimedia.</P>

		 <p>Esta es la función principal de un administrador de sitio web, la cual involucra la responsabilidad total de la planificación y ejecución de proyectos de desarrollo web. Dedibo al enfoque de los proyectos que se realizarán, se espera que un jefe de proyecto tenga un amplio conocimiento técnico. Dado que se espera que un jefe de proyecto dirija a las personas, el tiempo y los recursos, es de gran importancia que sea capaz de hacer malabares con las tres tareas al mismo tiempo para el éxito de cualquier proyecto. Por lo tanto, las funciones del jefe de proyectos requiere de personas con habilidades que vayan más allá de lo técnico y que incluya habilidades interpersonales, de análisis y administrativas.</p>

		 <h3 style="color:orange;">Director técnico:</h3>
		 <p>El administrador de sitio web toma la función de los desarrolladores de las aplicaciones de alto nivel o del ingeniero de software senior, quien supervisa la arquitectura subyacente de cualquier proyecto de desarrollo de software. El director técnico también es responsable de liderar los demás ingenieros de software y actúa como un mentor para el equipo de desarrollo.</p>

		 <h3 style="color:orange;">Jefe Creativo:</h3>
		 <p>Esta función consiste en tomar la iniciativa en diseño multimedia y gráfico en el proyecto de desarrollo de software o desarrollo web. También se llama diseñador jefe o a cargo, y es responsable de la visión, diseño y dirección del proyecto o producto. Un jefe creativo se espera igualmente que posea algunos conocimientos técnicos referentes a la publicidad, mercadeo o un campo como el desarrollo de videojuegos antes de tomar este papel.</p>

		 <h3 style="color:orange;">Analista de Sistemas:</h3>
		 <p>Esta función incluye el análisis de los requisitos de software, definición de parámetros y especificaciones de desarrollo de programas, pruebas y control de los productos y orientar al equipo de documentación de software. Debido a su frecuente interacción con los clientes para asegurar los proyectos se encuentran alineados con los requisitos del cliente, también se espera que tenga buenas habilidades de comunicación y capacidad de articular las visiones de forma clara, así como de pensar y conceptualizar de una manera creativa..</p>

	</section>

</div>

</body>
</html>
