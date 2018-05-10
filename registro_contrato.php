<?php
if (isset($_POST['guardar'])) 
{
$cod_contrato=$_POST['cod_contrato']; 
$descripcion_contrato=$_POST['descripcion_contrato']; 
$estado=$_POST['estado']; 
$sueldo_minimo=$_POST['sueldo_minimo']; 
$sueldo_maximo=$_POST['sueldo_maximo']; 
	$mysql = new mysqli("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO contratos( Cod_contrato, Descripcion_contrato, Estado, Sueldo_minimo, Sueldo_maximo)VALUES( '$cod_contrato', '$descripcion_contrato', '$estado', '$sueldo_minimo', '$sueldo_maximo')")or die(mysql_error());
	echo "<script> location.href='registro_contrato.html'</script>";
}
?>