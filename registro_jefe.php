<?php
if (isset($_POST['guardar'])) 
{
$cod_jefe=$_POST['cod_jefe']; 
$cargo=$_POST['cargo']; 
$codigo_dep=$_POST['cod_dep']; 
$descripcion_depa=$_POST['descripcion_depa']; 
	$mysql = new mysqli("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO jefes( Cod_jefe, Cargo, Cod_dep, Descripcion_depa)VALUES('$cod_jefe', '$cargo', '$cod_dep', '$descripcion_depa')")or die(mysql_error());
	echo "<script> location.href='registro_jefe.html'</script>";
}
?>