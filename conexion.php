<?php
	$servidor="localhost";
	$usuario="root";
	$pass="1234";
	$basedatos="sistemas";
	$tb = array( 1 => "admin", 2 =>"coordinador", 3 =>"docente", 4 =>"estudiante", 5 =>"programa", 6 =>"users");
	$conec = mysqli_connect($servidor,$usuario,$pass,$basedatos);// or die ("error de coneccion");
	  mysqli_set_charset( $conec, 'utf8');
	if($conec -> connect_errno){
echo "No se realiza la conección";
exit();
}
?>
