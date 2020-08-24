<?php
session_start();
if ((isset ($_POST['user'])) || (isset ($_POST['password'])))
	{
	$users = $_POST['user'];
	$pasword = $_POST['password'];
	include("conexion.php");
	$tupla = mysqli_query($conec,"SELECT * FROM $tb[6] WHERE usuario = '$users' ");
	while($dato = mysqli_fetch_array($tupla))
	{
		$usua = $dato[usuario];
		$name = $dato[doc_us];
		$tpus = $dato[tipo_us];
		$pas = $dato[pass];
		include("close_conec.php");

	}
		if (($users == $usua) && ($pasword == $pas))
		{
			include("conexion.php");
			$tupla = mysqli_query($conec,"SELECT * FROM $tb[$tpus] WHERE docad = '$name'");
			while($dato = mysqli_fetch_array($tupla))
			{
			$names = $dato[nom1].' '.$dato[ap1];
			include("close_conec.php");
			}
			$_SESSION['usua'] = $names;
			$_SESSION['us'] = $tpus;
			switch ($tpus) {
				case '1':
					header('location:admin/administrador.php');
					break;
				case '2':
					header('location:coordinador.html');
					break;
			}
		}
		else
 		{
	 		header ('location:registro.html?no conecta');
 		}
 	}
	else
 	{
	 	header ('location:registro.html?algo pasa');
 	}
?>
