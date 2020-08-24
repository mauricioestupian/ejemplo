<!DOCTYPE html PUBLIC>
<html>
 <head>
  <title>Reg Coordinador</title>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

<body class="bodym">
  <?php
    session_start();
    include '../funcion.php';
    verificar_sesion();
  ?>
  <div id="general">
    <div id="encabezado">
      <div id="empre">
        <div id="logo">
          <img src="../imagen/logo-sena.png" width="100%" height="auto" align="adsmiddle">
        </div>
        <div id="title">
          <H2 class="titul" align="adsmiddle">Administrador</H2>
        </div>
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
  <section>

  <!-- INICIA LA COLUMNA -->
      <center>
        <h1>Registro Coordinador</h1></center>
<div class='formulario'>
  <center>
    <h1>Registro Coordinador</h1></center>
    <form method="POST" action="new_coordi.php" >

    <div class="form-group">
      <label for="doc">Numeró Documento:</label>
      <input type="number" name="doc" class="form-control" id="doc">
    </div>
    <div class="form-group">
        <label for="rol">Tipo Documento:</label>
        <select class="form-group" name="rol" id="rol">
            <option>Seleccione.....</option>
            <option value="1">C.C.</option>
            <option value="2">C.E.</option>
            <option value="2">Pass</option>
          </select>
    </div>
    <div class="form-group">
        <label for="nom1">Primer Nombre:</label>
        <input type="text" name="nom1" class="form-control" id="nombre1" >
    </div>

    <div class="form-group">
        <label for="nom2">Segundo Nombre:</label>
        <input type="text" name="nom2" class="form-control" id="nombre2" >
    </div>

    <div class="form-group">
        <label for="ap1">Primer Apellido:</label>
        <input type="text" name="ap1" class="form-control" id="apellido1" >
    </div>

    <div class="form-group">
        <label for="ap2">Segundo Apellido:</label>
        <input type="text" name="ap2" class="form-control" id="apellido2" >
    </div>

    <div class="form-group">
        <label for="dir">Direccion:</label>
        <input type="text" name="dir" class="form-control" id="dir">
    </div>

    <div class="form-group">
        <label for="tel">Teléfono:</label>
        <input type="text" name="tel" class="form-control" id="tel">
    </div>

    <div class="form-group">
        <label for="cel">Celular:</label>
        <input type="text" name="cel" class="form-control" id="cel">
    </div>

    <div class="form-group">
        <label for="mail">Correo Electronico:</label>
        <input type="text" name="mail" class="form-control" id="mail">
    </div>
    <center>
      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">

      <input type="submit" value="Cancelar" class="btn btn-danger" name="btn_sair">
    </center>

  </form>
</div>

  <?php
    include("../conexion.php");

      $doc  = $_POST['doc'];
      $tp_d = $_POST['rol'];
      $nom1 =$_POST['nom1'];
      $nom2 =$_POST['nom2'];
      $ap1  =$_POST['ap1'];
      $ap2  =$_POST['ap2'];
      $dir  =$_POST['dir'];
      $tel  =$_POST['tel'];
      $cel  =$_POST['cel'];
      $mail =$_POST['mail'];
      $user = 2;


      if(isset($_POST['btn_registrar']))
      {
        $conec->query("INSERT INTO $tb[2] (doc_co,tip_doc_co,nom1,nom2,ap1,ap2,dir_co,tel_co,cel_co,mail,tip_user) values ('$doc','$tp_d','$nom1','$nom2','$ap1','$ap2','$dir','$tel','$cel','$mail','$user')");
          echo "<script language='JavaScript'> alert('Coordinador creado Correctamente') </script>";
          header ('location:administrador.php');
      }

      if(isset($_POST['btn_salir']))
      {
        echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
      echo $hora;}

    include("cerrar_conexion.php");
  ?>



<!-- TERMINA LA COLUMNA -->

  </section>

</div>

</body>
</html>
