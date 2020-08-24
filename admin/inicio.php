<!DOCTYPE html>
<html>
<head>
	<title>JOIN</title>
</head>
<body>
	<form id="form1" name="form1" method="post" action="inicio.php">
  <p>Usuario:
  <input type="search" name="user" id="user" placeholder="Usuario"/>
  </p>
  <p>
    <input type="submit" name="bt_bus" class="btn btn-primary" value="Buscar" />
  </p>
</form>
<?php
include("../conexion.php");
$us = $_POST['user'];
if (isset($_POST['bt_bus']))
{
	$tupla = mysqli_query($conec,"SELECT * FROM $tb[1] INNER JOIN $tb[6] ON	admin.docad = users.doc_us WHERE users.doc_us =$us");
	while($dato = mysqli_fetch_array($tupla))
	{
		echo $dato["docad"]."<br>";
		echo $dato["nom1"]." ".$dato["nom2"]."<br>";
		echo $dato["usuario"]."<br>";
		echo $dato["tipo_us"]."<br>";
	}
}
//Consulta
$tupla = mysqli_query($conec,"SELECT * FROM $tb[2] JOIN $tb[6] WHERE coordinador.doc_co = users.doc_us");
while($dato = mysqli_fetch_array($tupla))
{
	echo $dato["doc_co"]."<br>";
	echo $dato["nom1"]." ".$dato["nom2"]."<br>";
	echo $dato["usuario"]."<br>";
	echo $dato["tipo_us"]."<br>";
}
requiere_once('../mpdf/mpdf.php')
$mpdf = new mPDF();
$mpdf->writeHTML('<div>Hola..</div>');

?>
</body>
</html>
