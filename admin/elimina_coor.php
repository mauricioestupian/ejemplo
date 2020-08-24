<?php
include("../conexion.php");
  $us = $_COOKIE[us];
  echo "Hola ".$us." usuario";
  $_DELETE_SQL =  "DELETE FROM $tb[2] WHERE doc_co = '$us'";
  mysqli_query($conec,$_DELETE_SQL);
  include("../close_conec.php");
  header('location:administrador.php');
  ?>
