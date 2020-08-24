	<?php
function verificar_sesion(){
if (!isset ($_SESSION['usua']))
{
	unset($_SESSION);
	header ('location:../registro.html');}
}
