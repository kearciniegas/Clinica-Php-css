<?php
if (isset($_POST['guardar'])) 
{
$cod_depa=$_POST['cod_depa']; 
$descripcion=$_POST['descripcion']; 
$cantidad_emp=$_POST['cantidad_emp']; 
	$mysql = new mysqli("localhost","root","","ingreso");
	$mysql = $mysql -> query("INSERT INTO departamento( Cod_depa, Descripcion, Cantidad_emp)VALUES('$cod_depa', '$descripcion', '$cantidad_emp')")or die(mysql_error());
	echo "<script> location.href='registro_departamento.html'</script>";
}
?>