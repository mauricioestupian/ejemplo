<?php
//Actualizar datos
if (isset($_POST['bt_act']))
{
include("../conexion.php");
$nom1 = $_POST['nom1'];
$nom2 = $_POST['nom2'];
$ape1 = $_POST['ape1'];
$ape2 = $_POST['ape2'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$_UPDATE_SQL="UPDATE $tb[2] Set
nom1='$nom1',
nom2='$nom2',
ap1='$ape1',
ap2='$ape2',
dir_co='$dir',
tel_co='$tel',
cel_co='$cel'
WHERE doc_co = $_COOKIE[us] ";
mysqli_query($conec,$_UPDATE_SQL);
}
 ?>
