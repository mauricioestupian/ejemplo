<!DOCTYPE html PUBLIC>
<html>
 <head>
 	<title>jercicio1</title>
 	<link rel="stylesheet" type="text/css" href="css/estilos.css">
 	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 </head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body class="bodym">
	<div id="general">
		<div id="encabezado">
			<div id="logo">
				<H2 class="titulo">  <img src="imagen/logo-sena.png" width="92" height="99"> Técnico en Sistemas</H2>
			</div>
			<div id="men" align="right">
				<form action="registro.html" method="post" name="form1" target="_blank">
					<input align="right" type="submit" name="bt_new_us" id="bt_new_us"  class="bt" value="Inicio Sesión">
				</form>
				<ul class="menu" >
					<li><a href="index.html">Inicio</a></li>
					<li><a href="">Menu 1</a>
						<ul>
							<li><a href="">submenu 01</a></li>
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
				</ul>
			</div>
		</div>
	<section>
 <H1 align="center">EJERCICIO 01</H1>
<H2 align="center">Tabla de Multilicar </H2>
 <p>A continuación se presenta una aplicción donde el usuario ingresa el numero del cual desea saber la tabla de multiplicar hasta un determinado multiplo.</p>
  <div>
 	<form name="form1" method="POST" action="ejer01.php">
 		<div class="form-group">
    		<label for="tex_num">Numero:
    	  	<input type="text" name="tex_num" id="tex_num2" class="form-control">
        	</label>
 		</div>
 		<div class="form-group">
	 		<label for="tex_mult">Multiplo:
	    	<input type="text" name="tex_mult" id="tex_mult" class="form-control">
	 		</label>
	 	</div>
 	 	<div class="form-group">
	    <input type="submit" name="bt_tabla" id="bt_tabla" value="Mostrar" class="btn btn-success">
 	  </div>
	 	</form>
	</div>
 <?php
 date_default_timezone_set('America/Bogota');
 $hora = date("H:i:s");
 echo $hora;
/* session_start();
 include 'funcion.php';
 verificar_sesion();*/
 if (isset ($_POST['tex_num'],$_POST['tex_mult']))
 {
	$num=$_POST['tex_num'];
	$mod=1;
		print ('A continuación se presenta la tabla del numero "'.$num.'"<br>');
		$v=1;
		$c=$_POST['tex_mult'];
		for ($m=1;$m<=$c;$m++)
		{
			$v=$num*$m;
			echo "$num * $m = ";
			$mod = $v % 2;
			if ($mod > 0)
				{
				echo "$v impar<br>";
				}
			else
				{
				echo "$v par<br>";
				}
		}
		$num++;
			echo "<br/>";
	   }
  	?>
	</section>
</div>
 </body>
</html>
