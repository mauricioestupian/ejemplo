<?php
  session_start();
  include '../funcion.php';
  verificar_sesion();
?>
<!DOCTYPE html PUBLIC>
<html>
 <head>
  <title>Reg Coordinador</title>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <style>
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input[type=number] {
      -moz-appearance:textfield;
    }
  </style>
 </head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body class="bodym">
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
              <li><a href="consul_doc.php">Docente</a></li>
              <li><a href="">Estudiante</a></li>
              <li><a href="">Programa</a></li>
              <li><a href="">Curso</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  <section>
  <form id="form1" name="form1" method="post" action="consul_coordi.php">
  <p>Usuario:
  <input type="search" name="user" id="user" placeholder="# Documento.."/>
  </p>
  <p>
    <input type="submit" name="bt_bus" class="btn btn-primary" value="Buscar" />
  </p>
</form>
<?php
include("../conexion.php");
if (isset($_POST['bt_bus']))
{
  $us = $_POST['user'];
  echo "
  <table  class='table table-bordered'>
    <tr class='table-active'>
      <th> Documento </th>
      <th> Tipo Doc. </th>
      <th> Nombres </th>
      <th> Apellidos </th>
      <th> Dirección </th>
      <th> Teléfono </th>
      <th> Celular </th>
      <th> Email </th>
    </tr>
  ";
  //Consulta
  $tupla = mysqli_query($conec,"SELECT * FROM $tb[2] WHERE  doc_co = $us ");
  while($dato = mysqli_fetch_array($tupla))
  {
    switch ($dato['tip_doc_co']) {
    case '1':
      $tpdoc = "C.C.";
      break;

    case '2':
      $tpdoc = "C.E.";
      break;

    case '3':
      $tpdoc = "Pasaporte";
      break;
    }
      echo "
      <tr aling='center'>
        <td>".$dato[doc_co]."</td>
        <td>".$tpdoc."</td>
        <td>".$dato[nom1]." ".$dato[nom2]."</td>
        <td>".$dato[ap1]." ".$dato[ap2]."</td>
        <td>".$dato[dir_co]."</td>
        <td>".$dato[tel_co]."</td>
        <td>".$dato[cel_co]."</td>
        <td>".$dato[mail]."</td>
      </tr>";
    echo "</table>";
    echo "
    <div class='formulario'>
    <form id='form2' name='form2' method='post' action='consul_coordi.php'>
        <div class='f-25'>
          <label for='doc'>Documento</label>
        </div>
        <div class='f-75'>
          <input class='inputm' type='text' name='doc' id='user' value='$dato[doc_co]' readonly>
        </div>
        <div class='f-25'>
          <label for='nom1'>Primer Nombre</label>
        </div>
        <div class='f-75'>
          <input class='inputm' type='text' name='nom1' id='user' value='$dato[nom1]'/>
        </div>
        <div class='f-25'>
          <label for='nom2'>Segundo Nombre</label>
        </div>
        <div class='f-75'>
          <input class='inputm' type='text' name='nom2' id='user' value='$dato[nom2]'/>
        </div>
        <div class='f-25'>
          <label for='ape1'>Primer Apellido</label>
        </div>
        <div class='f-75'>
          <input class='inputm' type='text' name='ape1' id='user' value='$dato[ap1]'/>
        </div>
        <div class='f-25'>
          <label for='ape2'>Segundo Apellido</label>
        </div>
        <div class='f-75'>
          <input  class='inputm' type='text' name='ape2' id='user' value='$dato[ap2]'/>
        </div>
        <div class='f-25'>
          <label for='dir'>Dirección</label>
        </div>
        <div class='f-75'>
          <input  class='inputm' type='text' name='dir' id='dir' value='$dato[dir_co]'/>
        </div>
        <div class='f-25'>
          <label for='tel'>Telefono</label>
        </div>
        <div class='f-75'>
          <input class='inputm' type='text' name='tel' id='tel' value='$dato[tel_co]'/>
        </div>
        <div class='f-25'>
          <label for='cel'>Celular</label>
        </div>
        <div class='f-75'>
          <input class='inputm' type='text' name='cel' id='cel' value='$dato[cel_co]'/>
        </div>
        <p align='center'>
        <input type='submit' name='bt_act' class='btn btn-warning' value='Actualizar' />
        <input type='submit' name='bt_eli' class='btn btn-danger' value='Eliminar'/>
        <input type='submit' name='bt_pdf' class='btn btn-danger' value='PDF'/>
        </p>
      </form>
    </div>
    ";
  }
}
//Actualizar datos
if (isset($_POST['bt_act']))
echo $_COOKIE[us]."este es";;
{
include("../conexion.php");
$us = $_POST['doc'];
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
WHERE doc_co = $us";
mysqli_query($conec,$_UPDATE_SQL);
}
//Eliminar datos
 if (isset($_POST['bt_eli']))
{
  $us = $_POST['doc'];
  setcookie('us',$us,time()+120);
echo "
<script language='JavaScript'>
          var conf = confirm('Desea elimianr el usario');
          if (conf){
          location.href='elimina_coor.php';
          }
          else{
          alert('Ha cancelado la eliminación del Registro');
          onClick = 'return true';
          }
  </script>";

}
  ?>
  </section>
</div>

</body>
</html>
