<!DOCTYPE html PUBLIC>
<html>
 <head>
  <title>Reg Coordinador</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
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
  <?php
    session_start();
    include 'funcion.php';
    verificar_sesion();
  ?>
  <div id="general">
    <div id="encabezado">
      <div id="logo">
        <H2 class="titul" >  <img src="imagen/logo-sena.png" width="92" height="99">Administrador </H2>
      </div>
      <div id="men" align="right">
        <h5 align="right" margin-top="2px" >Usted se ha identificado como:
          <?php echo $_SESSION['usua']." ( ";?>
          <a href="close.php")> Salir </a>)</h5>
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
  <section>
    <p id="ejemplo">En este párrafo se mostrará la opción clickada por el usuario</p>

    <button onclick="alerta()">Clicka para mostrar mensaje</button>
    <script language='JavaScript'>
    function alerta()
{
var mensaje;
var opcion = confirm("Introduzca su nombre:", "Aner Barrena");

if (opcion == null || opcion == "") {
  mensaje = "Has cancelado o introducido el nombre vacío";
  } else {
      mensaje = "Hola " + opcion;
      }
      document.getElementById("ejemplo").innerHTML = mensaje;
}
              </script>


  </section>
</div>

</body>
</html>
