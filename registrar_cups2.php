<?php 


$cu=$_POST['cups'];
$descr=$_POST['descripcion'];
$cod_espe=$_POST['cod_especialidad'];
$pos_no=$_POST['pos_nopos'];

if (isset($_POST['guardar'])) 
{
	
	$mysql = new mysql("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO cups(Cups,Descripcion,Cod_especialidad,Pos_nopos)VALUES('$cu', '$descr', '$cod_espe','$cod_m','$pos_no')")or 
	       die(mysql_error());


	echo "<script> location.href='registrar_cups.html'</script>";       


}


 ?>